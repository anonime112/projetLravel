@extends('backend.layouts.app')

@section('title', config('app_name') . ' :: ' . __('Home'))

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>Welcome Etudiant</h2>

                    @if(Auth::check())
                        <i class="fas fa-envelope"></i> {{ auth()->user()->role }}<br/>
                        <i class="fas fa-envelope"></i> {{ auth()->user()->email }}<br/>
           
                        @else 
                            <a href="{{ route('frontend.auth.login')}}" class="default-btn">CONNECT</a>
                        @endif 
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
