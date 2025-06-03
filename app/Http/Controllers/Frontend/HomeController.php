<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Roles;
use App\Models\RoleUser;
use Illuminate\Support\Facades\DB;
/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * Display the frontend dashboard or redirect based on permissions.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index(Request $request) {
        
        if (Auth::check()) {
            $role = Auth::user()->role;

            $redirectRoutes = [
                'admin'    => 'admin.dashboard',
                'secre1'   => 'secre1.dashboard',
                'secre2'   => 'secre2.dashboard',
                'dirc1'    => 'dirc1.dashboard',
                'dirc2'    => 'dirc2.dashboard',
            ];

            // Redirection en fonction du rôle
            // if (array_key_exists($role, $redirectRoutes)) {
            //     return redirect()->route($redirectRoutes[$role]);
            // }

            return redirect()->route('requests.index');
        }

        return redirect()->route('frontend.auth.login'); // redirection propre
    }

    public function choix(Request $request){


    $request->validate([
        'role' => 'required|in:etudiant,admin',
    ]);
    $selectedRole = $request->input('role');
    if ($selectedRole === 'etudiant') {
            return redirect()->route('requests.index'); // route vers la page "bac"
        }
$roles = Roles::select('id', 'titre')->distinct()->get();
   

    return redirect()->route('role_code', ['roles' => $roles]);

}



public function valid(Request $request){
    $request->validate([
        'id' => 'required|exists:roles,id', // ou autre champ selon ta table roles
        'code_role' => 'required|integer',
    ]);
    $role = Roles ::find($request->input('id')) ;
    $titre = $role->titre;



    if (!$role) {
        return back()->withErrors(['titre' => 'Rôle invalide']);
    }

    // Vérifier le code du rôle
    if ($role->code !== $request->input('code_role')) {
        return back()->withErrors(['code_role' => 'Code du rôle incorrect']);
    }


       // Récupération de l'utilisateur connecté
       $user = Auth::user();

       if (!$user) {
           return redirect()->route('login')->withErrors(['auth' => 'Veuillez vous connecter']);
       }

     // Vérifie que ce couple n’existe pas déjà
     $alreadyExists = RoleUser::where('user_id', $user->id)
     ->where('role_id', $role->id)
     ->exists();

 if (!$alreadyExists) {
    RoleUser::create([
        'user_id' => $user->id,
        'role_id' => $role->id,
    ]);
 $user->role = 'admin';
 $user->save();


 if ($titre === 'Doyen ou directeur d’établissement') {
    return redirect()->route('dirc1.dashboard')->with([
        'user' => $user,
        'role' => $role,
    ]);
} elseif ($titre === 'Chef de département') {
    return redirect()->route('dirc2.dashboard')->with([
        'user' => $user,
        'role' => $role,
    ]);
} elseif ($titre === 'Secrétaire pédagogique') {
    return redirect()->route('secre1.dashboard')->with([

    ]);
} elseif ($titre === 'Responsable de la scolarité') {
    return redirect()->route('secre2.dashboard')->with([

    ]);
}else {
    return redirect()->route('secre2.dashboard')->with([
    
    ]);
}

 
 }


    return   back()->withErrors(['titre' => 'Rôle invalide']);;

}
















}
  return redirect()->route('frontend.auth.register'); // redirection propre