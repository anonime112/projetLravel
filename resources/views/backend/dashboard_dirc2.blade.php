@extends('backend.layouts.app')

@section('title', config('app_name') . ' :: ' . __('Home'))

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>Welcome dirc2 Chef de département</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another Action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <h4>Welcome</h4>

                    <h3>Demandes à valider</h3>
                    @if(!empty($demandes) && count($demandes) > 0)        

@foreach ($demandes as $demande)
    <div class="card mb-3">
        <div class="card-body">
            <h5>Type de demande : {{ $demande->type->nom }}</h5>
            <p>Fait par : {{ $demande->user->email }}</p>
            <p>Date : {{ \Carbon\Carbon::parse($demande->created_at)->format('d/m/Y') }} </p>

            <form action="{{ route('requests.index', $demande->id) }}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-success btn-sm">Approuver</button>
            </form>

            <form action="{{ route('requests.index', $demande->id) }}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-danger btn-sm">Refuser</button>
            </form>
        </div>
    </div>
@endforeach
@else
    <p>Aucune demande à approuver.</p>
@endif
                    
                </div>
            </div>
        </div>
    </div>
@push('after-scripts')
<script>
    jQuery(document).ready(function() {
      jQuery('.breadcrumb').parent().find(".breadcrumb-item:nth-child(2)").removeClass('active');
    });
</script>
@endpush
@endsection
