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
                <th>N° Demande</th>
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
                <td>{{ $demande->id }}</td>
                <td>{{ $demande->etudiant ? $demande->etudiant->nom . ' ' . $demande->etudiant->prenom : 'Nom non trouvé' }}</td>
                <td>{{ $demande->type }}</td>
                
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

    

    function validerStatut(id, button) {
        console.log('validerStatut appelé avec ID:', id);
        demandeIdToValider = id;
        currentButton = button;
        document.getElementById('confirmationText').textContent = 'Validé';
        $('#modalConfirmer').modal('show');
        setTimeout(() => {
            document.getElementById('confirmBtn').focus();
        }, 500);
    }


    function updateInterface(data) {
        const row = currentButton.closest('tr');
        const statutBadge = row.querySelector('.badge');
        const validerButton = row.querySelector('.valider-btn');


        // Afficher le bouton Voir Document dans la cellule correspondante
        const documentCell = row.querySelector('.document-cell');
        if (data.est_soldee) {
            const viewButton = document.createElement('a');
            viewButton.href = `/demandes/${demandeIdToValider}/document`; // ou route() si besoin
            viewButton.target = '_blank';
            viewButton.className = 'btn btn-primary btn-sm';
            viewButton.textContent = '📄 Voir Document';
            documentCell.innerHTML = '';
            documentCell.appendChild(viewButton);
        }

        // Mettre à jour le badge du statut
        statutBadge.textContent = data.est_soldee === null ? 'En attente' : (data.est_soldee ? 'Validée' : 'Annulée');
        statutBadge.classList.remove('bg-success', 'bg-danger', 'bg-warning');
        statutBadge.classList.add(data.est_soldee === null ? 'bg-warning' : (data.est_soldee ? 'bg-success' : 'bg-danger'));

        // Mettre à jour uniquement le bouton Valider
        validerButton.classList.remove('btn-success', 'btn-danger', 'btn-warning');
        validerButton.classList.add(data.est_soldee === null ? 'btn-warning' : (data.est_soldee ? 'btn-success' : 'btn-danger'));
        validerButton.textContent = data.est_soldee === null ? '⏳' : (data.est_soldee ? '✅' : '👍');

        $('#modalConfirmer').modal('hide');
    }

    document.getElementById('confirmBtn').addEventListener('click', function () {
        console.log('Bouton Confirmer cliqué, ID:', demandeIdToValider);
        fetch(`/demandes/${demandeIdToValider}/valider`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        })
        .then(res => {
            console.log('Statut de la réponse:', res.status, res.statusText);
            return res.json();
        })
        .then(data => {
            console.log('Données reçues:', data);
            if (data.success) {
                updateInterface(data);
            } else {
                console.error('Erreur côté serveur:', data.error);
                alert('Erreur lors de la validation: ' + data.error);
            }
        })
        .catch(error => {
            console.error('Erreur lors de la validation:', error);
            alert('Erreur réseau ou serveur: ' + error.message);
        });
    });

    document.getElementById('declineBtn').addEventListener('click', function () {
        console.log('Bouton Décliner cliqué, ID:', demandeIdToValider);
        fetch(`/demandes/${demandeIdToValider}/decliner`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        })
        .then(res => {
            console.log('Statut de la réponse:', res.status, res.statusText);
            return res.json();
        })
        .then(data => {
            console.log('Données reçues:', data);
            if (data.success) {
                updateInterface(data);
            } else {
                console.error('Erreur côté serveur:', data.error);
                alert('Erreur lors du déclin: ' + data.error);
            }
        })
        .catch(error => {
            console.error('Erreur lors du déclin:', error);
            alert('Erreur réseau ou serveur: ' + error.message);
        });
    });
</script>

@endpush
@endsection
