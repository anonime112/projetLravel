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
                    <h1>choisir la fonction </h1>
                    @if(Auth::check())
                        <i class="fas fa-envelope"></i> {{ auth()->user()->role }}<br/>
                        <i class="fas fa-envelope"></i> {{ auth()->user()->email }}<br/>
           
                        @else 
                            <a href="{{ route('frontend.auth.login')}}" class="default-btn">CONNECT</a>
                        @endif 
                    <form method="POST" action="{{ route('frontend.valide_code') }}">
                        @csrf
                        <select name="id"  class="form-control" required>
                            <option value="">-- Sélectionnez un rôle --</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->titre }}</option>
                            @endforeach
                        </select>



                        <div class="form-group">
                            <label
                                for="password_confirmation">{{ __('validation.attributes.frontend.password_confirmation') }}</label>
                            <input type="password" name="code_role" id="password_confirmation" class="form-control"
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
                                valider
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