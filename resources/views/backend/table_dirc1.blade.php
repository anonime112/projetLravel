@extends('backend.layouts.app2')

@section('title', config('app_name') . ' :: ' . __('Table Demandes'))

@section('content')
<div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>Demandes</h2>
                    
                </div>
                <div class="body">
                    <h4>Listes des Demandes</h4>
                    
                </div>
            </div>
        </div>
    </div>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                
                <th>Nom Etudiant</th>
                <th>Type</th>
                <th>Date</th>
                <th>Statut</th>
                <th>Action</th>
                
                
            </tr>
        </thead>
        <tbody>
        @foreach($demandes as $demande)
            <tr>
                
                <td>{{ $demande->etudiant ? $demande->etudiant->nom . ' ' . $demande->etudiant->prenom : 'Nom non trouvé' }}</td>
                <td>{{ $demande->typeDemande ? $demande->typeDemande->nom : 'Type inconnu' }}</td>
                
                <td>{{ $demande->created_at ? $demande->created_at->format('d/m/Y H:i') : 'N/A' }}</td>
                <td>
                    <span class="badge {{ $demande->est_soldee ? 'bg-success' : 'bg-danger' }}">
                        {{ $demande->est_soldee ? 'Validée' : 'Annulée' }}

                    </span>
                </td>
                <td>
                    <button class="btn btn-info btn-sm" onclick="voirPlus('{{ $demande->id }}')">Voir plus</button>
                    <button class="btn btn-success btn-sm valider-statut-btn" onclick="validerStatut('{{ $demande->id }}', this)">✔ Validé</button>
                </td>
                <td class="document-cell">
                    @if($demande->statut === 'Validé')
                        <a href="{{ route('demande.document', $demande->id) }}" target="_blank" class="btn btn-primary btn-sm">
                            📄 Voir Document
                        </a>
                    @endif
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Détails -->
<div id="modalDetail" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Détails de la demande</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalDetailContent">
                <!-- Contenu rempli dynamiquement -->
            </div>
        </div>
    </div>
</div>

<!-- Modal Confirmation -->
<div id="modalConfirmer" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment marquer cette demande comme <strong id="confirmationText"></strong> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" id="confirmBtn" class="btn btn-success">Confirmer</button>
            </div>
        </div>
    </div>
</div>


@push('after-scripts')
<script>
    jQuery(document).ready(function() {
      jQuery('.breadcrumb').parent().find(".breadcrumb-item:nth-child(2)").removeClass('active');
    });

    function validerStatut(id, btn) {
        demandeIdToValider = id;
        currentButton = btn;

        // Affiche le texte dans le modal (optionnel)
        document.getElementById('confirmationText').textContent = 'Validée';

        // Affiche le modal de confirmation
        $('#modalConfirmer').modal('show');
    }



    let demandeIdToValider = null;
    let currentButton = null;

    function voirPlus(id) {
        fetch(`/demandes/${id}`)
            .then(response => response.json())
            .then(data => {
                const content = `
                    <h6>Informations de la demande</h6>
                    <p>Type: <strong> ${data.type}</strong> </p>
                    <p>Canal: <strong> ${data.canal}</strong></p>
                    <p>Commentaire:<strong> ${data.commentaire}</strong></p>
                    <p>Statut: <strong> ${data.statut}</strong></p>
                    ${data.etudiant ? `
                        <hr>
                        <h6>Informations de l'étudiant</h6>
                        <p>Nom: <strong> ${data.etudiant.nom} ${data.etudiant.prenom}</strong></p>
                        <p>Matricule: <strong> ${data.etudiant.matricule}</strong></p>
                        <p>Email:  <strong> ${data.etudiant.email}</strong></p>
                        <p>Niveau: <strong> ${data.etudiant.niveau}</strong></p>
                        <p>Date d'inscription: <strong> ${data.etudiant.date_inscription}</strong></p>
                    ` : '<p>Étudiant: <strong> Non trouvé</strong></p>'}
                `;
                document.getElementById('modalDetailContent').innerHTML = content;
                $('#modalDetail').modal('show');
            })
            .catch(error => console.error('Erreur lors de la récupération des détails:', error));
    }



   document.getElementById('confirmBtn').addEventListener('click', function () {
    fetch(`/demandes/${demandeIdToValider}/valider-statut`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Mise à jour visuelle
            const row = currentButton.closest('tr');
            const statutBadge = row.querySelector('td:nth-child(4) .badge');
            const documentCell = row.querySelector('.document-cell');

            // Changer badge
            statutBadge.classList.remove('bg-danger');
            statutBadge.classList.add('bg-success');
            statutBadge.textContent = 'Validée';

            // Supprimer bouton
            currentButton.remove();

            // Ajouter bouton Voir Document
            documentCell.innerHTML = `
                <a href="${data.document_url}" target="_blank" class="btn btn-primary btn-sm">
                    📄 Voir Document
                </a>
            `;

            $('#modalConfirmer').modal('hide');
        } else {
            alert('Erreur : ' + (data.message || 'Impossible de valider la demande.'));
        }
    })
    .catch(error => {
        console.error('Erreur de validation:', error);
        alert('Erreur réseau ou serveur : ' + error.message);
    });
});


    

</script>

@endpush
@endsection
