@extends('frontend.layouts.login')

@section('title', config('app.name') . ' | ' . __('labels.frontend.auth.register_box_title'))

@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-12 col-md-8">
        <div class="card">
            <div class="card-header">
                <strong>@lang('labels.frontend.auth.register_box_title')</strong>
            </div>

            <div class="card-body">
                <h1>choisir le role</h1>
                @if(Auth::check())
                        <i class="fas fa-envelope"></i> {{ auth()->user()->role }}<br/>
                        <i class="fas fa-envelope"></i> {{ auth()->user()->name }}<br/>
           
                        @else 
                            <a href="{{ route('frontend.auth.login')}}" class="default-btn">CONNECT</a>
                        @endif 
                <form method="POST" action="{{ route('frontend.choose') }}">
                    @csrf

                    <div class="row">
                    <label><input type="radio" name="role" value="etudiant"> Étudiant</label><br>
                    <label><input type="radio" name="role" value="admin"> admin</label><br>
                        
                     
                    </div>


                 

                    @if(config('access.captcha.registration'))
                        <div class="form-group">
                            @captcha
                            <input type="hidden" name="captcha_status" value="true">
                        </div>
                    @endif

                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary">
                            choisir
                        </button>
                    </div>
                </form>

                <div class="text-center mt-3">
                    @include('frontend.auth.includes.socialite')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-scripts')
    @if(config('access.captcha.registration'))
        @captchaScripts
    @endif
@endpush
