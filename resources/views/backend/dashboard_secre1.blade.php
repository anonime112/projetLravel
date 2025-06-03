@extends('backend.layouts.app1')

@section('title', config('app_name') . ' :: ' . __('Home'))

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>Bienvenue  </h2>
                    {{-- <ul class="header-dropdown">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another Action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                    </ul> --}}
                </div>
                <div class="body">
                    
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="card bg-info text-white">
                                <div class="body text-center">
                                    <h4>{{ $total }}</h4>
                                    <span>Total Demandes</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card bg-success text-white">
                                <div class="body text-center">
                                    <h4>{{ $validees }}</h4>
                                    <span>Demandes Validées</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card bg-warning text-white">
                                <div class="body text-center">
                                    <h4>{{ $enCours }}</h4>
                                    <span>Demandes en cours</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card bg-danger text-white">
                                <div class="body text-center">
                                    <h4>{{ $rejetees }}</h4>
                                    <span>Demandes Rejetées</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="card">
                    <div class="header">
                        <h2>Répartition des Demandes</h2>
                    </div>
                    <div class="body">
                        <canvas id="statutChart"></canvas>
                    </div>
            </div>

        </div>
    </div>
@push('after-scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    jQuery(document).ready(function() {
      jQuery('.breadcrumb').parent().find(".breadcrumb-item:nth-child(2)").removeClass('active');
    });
</script>

<script>
    const ctx = document.getElementById('statutChart').getContext('2d');
    const statutChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Validées', 'En cours', 'Rejetées'],
            datasets: [{
                data: [{{ $validees }}, {{ $enCours }}, {{ $rejetees }}],
                backgroundColor: ['#28a745', '#ffc107', '#dc3545'],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
</script>

@endpush
@endsection
