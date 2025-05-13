<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <a href="{{ route('frontend.index') }}" class="navbar-brand">{{ config('app.name') }}</a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('labels.general.toggle_navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            @if(config('locale.status') && count(config('locale.languages')) > 1)
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownLanguageLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">@lang('menus.language-picker.language') ({{ strtoupper(app()->getLocale()) }})</a>

                    @include('includes.partials.lang')
                </li>
            @endif

            @auth
                <li class="nav-item">
                    <a href="{{ route('user.dashboard') }}" class="nav-link {{ Route::is('user.dashboard') ? 'active' : '' }}">
                        @lang('navs.frontend.dashboard')
                    </a>
                </li>
            @endauth

            @guest
                <li class="nav-item">
                    <a href="{{ route('frontend.auth.login') }}" class="nav-link {{ Route::is('frontend.auth.login') ? 'active' : '' }}">
                        @lang('navs.frontend.login')
                    </a>
                    <a href="{{ route('frontend.auth.register') }}" class="nav-link {{ Route::is('frontend.auth.register') ? 'active' : '' }}">
                        @lang('navs.frontend.login')
                    </a>
                </li>

                @if(config('access.registration'))
                    <li class="nav-item">
                        <a href="{{ route('frontend.auth.register') }}" class="nav-link {{ Route::is('frontend.auth.register') ? 'active' : '' }}">
                            @lang('navs.frontend.register')
                        </a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuUser" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuUser">
                        @can('view backend')
                            <a href="{{ route('admin.dashboard') }}" class="dropdown-item">@lang('navs.frontend.user.administration')</a>
                        @endcan

                        <a href="{{ route('user.account') }}" class="dropdown-item {{ Route::is('user.account') ? 'active' : '' }}">
                            @lang('navs.frontend.user.account')
                        </a>
                        <a href="{{ route('frontend.auth.logout') }}" class="dropdown-item">@lang('navs.general.logout')</a>
                    </div>
                </li>
            @endguest

            <li class="nav-item">
                <a href="{{ route('frontend.contact') }}" class="nav-link {{ Route::is('frontend.contact') ? 'active' : '' }}">
                    @lang('navs.frontend.contact')
                </a>
            </li>
        </ul>
    </div>
</nav>
