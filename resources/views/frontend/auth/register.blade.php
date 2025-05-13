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
                <form method="POST" action="{{ route('frontend.auth.register.post') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">{{ __('validation.attributes.frontend.first_name') }}</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" 
                                       placeholder="{{ __('validation.attributes.frontend.first_name') }}" 
                                       maxlength="191" required autofocus>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">{{ __('validation.attributes.frontend.last_name') }}</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" 
                                       placeholder="{{ __('validation.attributes.frontend.last_name') }}" 
                                       maxlength="191" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">{{ __('validation.attributes.frontend.email') }}</label>
                        <input type="email" name="email" id="email" class="form-control" 
                               placeholder="{{ __('validation.attributes.frontend.email') }}" 
                               maxlength="191" required>
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('validation.attributes.frontend.password') }}</label>
                        <input type="password" name="password" id="password" class="form-control" 
                               placeholder="{{ __('validation.attributes.frontend.password') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">{{ __('validation.attributes.frontend.password_confirmation') }}</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" 
                               placeholder="{{ __('validation.attributes.frontend.password_confirmation') }}" required>
                    </div>

                    @if(config('access.captcha.registration'))
                        <div class="form-group">
                            @captcha
                            <input type="hidden" name="captcha_status" value="true">
                        </div>
                    @endif

                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary">
                            {{ __('labels.frontend.auth.register_button') }}
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
