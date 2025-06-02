<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\Etudiant;

class DemandeController extends Controller
{
   public function index()
    {
        $demandes = Demande::with('etudiant')->get();

        return view('backend.table_secre2', compact('demandes'));
    }
    public function index1()
    {
        $demandes = Demande::with('etudiant')->get();

        return view('backend.table_secre1', compact('demandes'));
    }

    public function show($id)
    {
        try {
            $demande = Demande::with('etudiant')->findOrFail($id);
            return response()->json([
                'type' => $demande->type,
                'canal' => $demande->canal,
                'commentaire' => $demande->commentaire ?? 'Aucun commentaire',
                'statut' => $demande->statut ?? ($demande->est_soldee ? 'En Cours' : 'Annulé'),
                'etudiant' => $demande->etudiant ? [
                    'nom' => $demande->etudiant->nom,
                    'prenom' => $demande->etudiant->prenom,
                    'matricule' => $demande->etudiant->matricule,
                    'email' => $demande->etudiant->email,
                    'niveau' => $demande->etudiant->niveau,
                    'date_inscription' => $demande->etudiant->date_inscription->format('d/m/Y'),
                ] : null,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function valider(Request $request, $id)
    {
        try {
            $demande = Demande::findOrFail($id);
            $demande->est_soldee = true;
            $demande->statut = 'En Cours';
            $demande->save();

            return response()->json([
                'success' => true,
                'est_soldee' => $demande->est_soldee,
                'statut' => $demande->statut,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function decliner(Request $request, $id)
    {
        try {
            $demande = Demande::findOrFail($id);
            $demande->est_soldee = false;
            $demande->statut = 'Annulé';
            $demande->save();

            return response()->json([
                'success' => true,
                'est_soldee' => $demande->est_soldee,
                'statut' => $demande->statut,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
