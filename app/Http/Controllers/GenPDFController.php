<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Demande;

class GenPDFController extends Controller
{
    

public function telechargerPdf($id)
{
    $demande = Demande::with('etudiant')->findOrFail($id);

    // Détermine le modèle en fonction du type
    $template = match ($demande->type) {
        'attestation de fréquentation' => 'demandes.pdf.attestation',
        'relevé'      => 'demandes.pdf.releve_notes',
        'convention'  => 'demandes.pdf.convention_stage',
        default       => abort(404, 'Modèle PDF non défini'),
    };

    $pdf = Pdf::loadView($template, [
        'demande' => $demande,
        'etudiant' => $demande->etudiant
    ]);

    return $pdf->download("Demande_{$demande->id}.pdf");
}

}
