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
                    @php
                        if (is_null($demande->est_soldee) || $demande->est_soldee === '') {
                            $badgeColor = 'bg-warning';
                            $badgeText = 'En Cours';
                        } elseif ($demande->est_soldee == 1) {
                            $badgeColor = 'bg-success';
                            $badgeText = 'Validée';
                        } else {
                            $badgeColor = 'bg-danger';
                            $badgeText = 'Annulée';
                        }
                    @endphp

                    <span class="badge {{ $badgeColor }}">
                        {{ $badgeText }}
                    </span>


                </td>
                <td>
                    <button class="btn btn-info btn-sm" onclick="voirPlus('{{ $demande->id }}')">Voir plus</button>
                    
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

    
</script>

@endpush
@endsection
