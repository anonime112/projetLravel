@extends('frontend.layouts.login')

@section('title', config('app.name') . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
<div class="vertical-align-wrap">
    <div class="vertical-align-middle auth-main">
        <div class="auth-box">
            <div class="top">
                <img src="{{ asset('assets/images/logo-white.svg') }}" alt="Iconic">
            </div>
            <div class="card">
                <div class="header">
                    <p class="lead">Login to your account</p>
                </div>
                <div class="body">
                    <form method="POST" action="{{ route('frontend.auth.login.post') }}" class="form-auth-small">
                        @csrf

                        <div class="form-group">
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control" 
                                placeholder="{{ __('validation.attributes.frontend.email') }}" 
                                maxlength="191" 
                                required 
                                autofocus
                            >
                        </div>

                        <div class="form-group">
                            <input 
                                type="password" 
                                name="password" 
                                class="form-control" 
                                placeholder="{{ __('validation.attributes.frontend.password') }}" 
                                required
                            >
                        </div>

                        <div class="form-group clearfix">
                            <label class="fancy-checkbox element-left">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span>{{ __('labels.frontend.auth.remember_me') }}</span>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">
                            {{ __('labels.frontend.auth.login_button') }}
                        </button>

                        <div class="bottom">
                            <span class="helper-text m-b-10">
                                <i class="fa fa-lock"></i> 
                                <a href="{{ route('frontend.auth.password.reset') }}">Forgot password ?</a>
                            </span>
                            <a href="{{ route('frontend.auth.register') }}">Créer un compte</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
