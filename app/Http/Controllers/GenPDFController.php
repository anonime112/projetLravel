<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Demande;

class GenPDFController extends Controller
{
    

public function telechargerPdf($id)
{
    $demande = Demande::with(['etudiant', 'typeDemande'])->findOrFail($id);

    // Récupère le nom du type de demande via la relation
    $typeNom = strtolower(trim($demande->typeDemande->nom ?? ''));

    // Choix du template selon le type
    $template = match ($typeNom) {
        'relevé de notes'              => 'demandes.pdf.releve_notes',
        'attestation de réussite'      => 'demandes.pdf.attestation_reussite',
        'attestation de fréquentation' => 'demandes.pdf.attestation_frequentation',
        'attestation d’admission'      => 'demandes.pdf.attestation_admission',
        default                        => abort(404, 'Modèle PDF non défini pour le type de demande.'),
    };

     // Génère le PDF
    $pdf = Pdf::loadView($template, [
        'demande'  => $demande,
        'etudiant' => $demande->etudiant
    ]);

    return $pdf->download("Demande_{$demande->id}.pdf");

}


}
