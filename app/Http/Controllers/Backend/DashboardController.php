<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Demande;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.dashboard', [
            'logged_in_user' => auth()->user(),
        ]);
    }
    
    public function h_menu()
    {
        return view('backend.h_menu');
    }

    public function iot()
    {
        return view('backend.iot');
    }

    public function demographic()
    {
        return view('backend.demographic');
    }

    public function project_Board()
    {
        return view('backend.project_board');
    }

    public function crypto_Dashboard()
    {
        return view('backend.crypto_dashboard');
    }

    public function eCommerce()
    {
        return view('backend.eCommerce');
    }

    public function secre1()
    {
        $total = Demande::count();
        $validees = Demande::where('statut', 'Validé')->count();
        $enCours = Demande::where('statut', 'En cours')->count();
        $rejetees = Demande::where('statut', 'Rejeté')->count();
        return view('backend.dashboard_secre1', compact('total', 'validees', 'enCours', 'rejetees'));
    }

    public function secre2()
    {

        $total = Demande::count();
        $validees = Demande::where('statut', 'Validé')->count();
        $enCours = Demande::where('statut', 'En cours')->count();
        $rejetees = Demande::where('statut', 'Rejeté')->count();
        return view('backend.dashboard_secre2', compact('total', 'validees', 'enCours', 'rejetees'));
    }

    public function dirc1()
    {
        $total = Demande::count();
        $validees = Demande::where('statut', 'Validé')->count();
        $enCours = Demande::where('statut', 'En cours')->count();
        $rejetees = Demande::where('statut', 'Rejeté')->count();
        return view('backend.dashboard_dirc1', compact('total', 'validees', 'enCours', 'rejetees'));
    }

    public function dirc2()
    {
        $total = Demande::count();
        $validees = Demande::where('statut', 'Validé')->count();
        $enCours = Demande::where('statut', 'En cours')->count();
        $rejetees = Demande::where('statut', 'Rejeté')->count();
        return view('backend.dashboard_dirc2', compact('total', 'validees', 'enCours', 'rejetees'));
    }
}
