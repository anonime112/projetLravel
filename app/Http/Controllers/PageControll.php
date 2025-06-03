<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandeType;
use App\Models\documentsRequis;
use App\Models\Demande;
use App\Models\approbations;
use App\Models\ApprobationDemandeType;
use App\Models\DocumentDemandeType;
use Illuminate\Support\Facades\Auth;




class PageControll extends Controller
{
    public function show($page)
    {
        // Liste des pages valides
        $validPages = [
            'index',
            'about-us',
            'application-form',
            'news-and-blog',
            'blog-details',
            'alumni',
            'academics',
            'undergraduate',
            'graduate',
            'online-education',
            'faculty',
            'admission',
            'how-to-apply',
            'tuition-fees',
            'financial-aid',
            'date-deadlines',
            'schedule-tour',
            'courses',
            'courses-details',
            'university-life',
            'the-campus-experience',
            'fitness-athletics',
            'support-guidance',
            'student-activities',
            'contact-us',
            'demande-details',
            'demande',
            'suivi_demande',

        ];

        // Vérifier si la page demandée est valide
        if (!in_array($page, $validPages)) {
            abort(404);
        }

        // Renvoyer la vue correspondante
        return view("home.pages.{$page}");
    }
    public function show_demande($page)
    {
        // Liste des pages valides
        $validPages = [
            
     
            'demande-details',
            'demande',
            'suivi_demande',

        ];

        // Vérifier si la page demandée est valide
        if (!in_array($page, $validPages)) {
            abort(404);
        }
        $types = DemandeType::all();

        // Renvoyer la vue correspondante
        return view("home.pages.{$page}", compact('types'));
    }
    public function show_details($id)
    {
      
        //  Récupération du type de demande
        $types = DemandeType::findOrFail($id);
    
        // Récupération des documents liés
        $documents = DocumentDemandeType::with('documentRequis')
            ->where('demande_types_id', $id)
            ->get();
    
        // Récupération des approbations liées
        $approbations = ApprobationDemandeType::with('approbation.roleUser.role')
            ->where('demande_type_id', $id)
            ->orderBy('ordre') // facultatif si tu veux l'ordre d'approbation
            ->get();

        // Renvoyer la vue correspondante
        return view("home.pages.courses-details", compact('types','documents', 'approbations'));
    }

    public function store($demande_type_id)
    {
      
        $demande = Demande::create([
            'users_id' => Auth::id(),
            'demande_type_id' => $demande_type_id,
            'date_emission' => now(),
        ]);

        return redirect()->back()->with('success', 'Votre demande a été enregistrée.');
        
    }



    public function sidebarDemandeStats()
{
    $userId = Auth::id();


    
    // Charger les demandes avec le type de demande associé
    $demandes = Demande::with('type')
        ->where('users_id', $userId)
        ->latest()
        ->get();

    // Récupère tous les types de demande avec le count par utilisateur connecté
    $demandeCounts = DemandeType::withCount([
        'demandes as user_count' => function ($query) use ($userId) {
            $query->where('users_id', $userId);
        }
    ])->get();

    return view('home.pages.suivi_demande', compact('demandeCounts','demandes'));
}



}
