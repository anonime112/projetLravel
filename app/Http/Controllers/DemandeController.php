<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\Etudiant;
use App\Http\Controllers\Log;

class DemandeController extends Controller
{
   public function index()
    {
        $demandes = Demande::with(['etudiant', 'typeDemande'])->get();
        return view('backend.table_secre2', compact('demandes'));
    }
    public function index1()
    {
        $demandes = Demande::with(['etudiant', 'typeDemande'])->get();

        return view('backend.table_secre1', compact('demandes'));
    }

    public function index_dirc()
    {
        $demandes = Demande::with(['etudiant', 'typeDemande'])
            ->where('est_soldee', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        

        return view('backend.table_dirc1', compact('demandes'));
    }

    public function show($id)
    {
        try {
            $demande = Demande::with(['etudiant', 'typeDemande'])->findOrFail($id);
            return response()->json([
                'type' => $demande->typeDemande ? $demande->typeDemande->nom : 'Type inconnu',
                'commentaire' => $demande->commentaire ?? 'Aucun commentaire',
                'statut' => $demande->statut ?? ($demande->est_soldee ? 'En Cours' : 'Annulé'),
                'etudiant' => $demande->etudiant ? [
                    'nom' => $demande->etudiant->nom,
                    'prenom' => $demande->etudiant->prenom,
                    'matricule' => $demande->etudiant->matricule,
                    'email' => $demande->etudiant->email,
                    'niveau' => $demande->etudiant->niveau,
                    'date_inscription' => optional($demande->etudiant->date_inscription)->format('d/m/Y'),
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

    public function validerStatut(Request $request, $id)
    {
        try {
            Log::info('Début validerStatut', ['id' => $id]);
            $demande = Demande::findOrFail($id);
            Log::info('Demande trouvée', ['id' => $id, 'statut_actuel' => $demande->statut]);

            $demande->statut = 'Validé';
            $result = $demande->save();
            Log::info('Sauvegarde effectuée', ['id' => $id, 'result' => $result, 'nouveau_statut' => $demande->statut]);

            return response()->json([
                'success' => true,
                'statut' => $demande->statut,
            ]);
        } catch (\Exception $e) {
            Log::error('Erreur dans validerStatut', ['id' => $id, 'error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
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
