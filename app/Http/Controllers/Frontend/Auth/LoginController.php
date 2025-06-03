<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\RoleUser;
use App\Models\approbations;
use App\Models\Demande;
use App\Models\ApprobationDemandeType;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    /**
     * Show login form.
     */
    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }

    /**
     * Handle login request.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            $user = Auth::user();

              // Vérifie si un rôle est assigné
              if($user->role=== 'admin'){


              // Récupère l'entrée role_user liée à l'utilisateur
              $roleUser = RoleUser::where('user_id', $user->id)->with('role')->first();


                

           
                if (!$roleUser) {
                    return redirect()->back()->withErrors(['Vous n\'avez pas de rôle assigné.']);
                }
               
            
                // 2. Récupère toutes les approbations où ce role_user doit approuver
    $approbations = approbations::where('role_user_id', $roleUser->role_id)->pluck('id');
    if ($approbations->isEmpty()) return dd('Aucune approbation trouvée pour ce rôle');
    // 3. Récupère tous les type de demande liés à ces approbations
    $demandeTypeIds = ApprobationDemandeType::whereIn('approbation_id', $approbations)->pluck('demande_type_id');
    if ($demandeTypeIds->isEmpty()) return dd('Aucun type de demande lié à ces approbations');
    // 4. Récupère les demandes passées de ces types
    $demandes = Demande::whereIn('demande_type_id', $demandeTypeIds)
        ->with(['type', 'user'])
        
        ->get();





                
                if ($roleUser && $roleUser->role) {
                    $roleTitre = $roleUser->role->titre;
        
                    // Redirection en fonction du rôle
                    switch ($roleTitre) {
                        case 'Doyen ou directeur d’établissement':
                            
                            return redirect()->route('dirc1.dashboard',['demandes' => $demandes])->with('demandes', $demandes);;
                        case 'Secrétaire pédagogique':
                            return redirect()->route('secre1.dashboard',['demandes' => $demandes])->with('demandes', $demandes);;
                        case 'Chef de département':
                            return redirect()->route('dirc2.dashboard',['demandes' => $demandes])->with('demandes', $demandes);;
                        case 'Responsable de la scolarité':
                            return redirect()->route('secre2.dashboard',['demandes' => $demandes])->with('demandes', $demandes);;
                        default:
                            return redirect()->route('home');
                    }
                }
    
              }else{
                return redirect()->route('requests.index');
              }
       

          
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    /**
     * Redirect path after login.
     */
    public function redirectPath()
    
    {
       if (Auth::check()) {
        if (Auth::user()->role === "admin") {
            return route('admin.dashboard'); // ✅ Retourne une URL, pas une redirection
        }

        return route('frontend.index'); // ✅ Crée une route nommée vers le tableau de bord utilisateur
    }

    return route('frontend.auth.login');
    }

    /**
     * Handle logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('frontend.auth.login');
    }
}
