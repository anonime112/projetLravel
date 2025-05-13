<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if(app()->getLocale() === 'ar' || app()->getLocale() === 'he') dir="rtl" @endif>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('meta_description', 'Laravel App')">
    <meta name="author" content="@yield('meta_author', 'Votre Nom')">
    @yield('meta')

    @stack('before-styles')

    {{-- Styles via Vite (si activé dans le projet) --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}" defer></script>


<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">


    {{-- Si Vite n'est pas utilisé, fallback vers CSS statique --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/frontend.css') }}"> --}}

    @stack('after-styles')
</head>
<body>
    @include('includes.partials.read-only')

    <div id="app">
        @include('includes.partials.logged-in-as')
        @include('frontend.includes.nav')

        <main class="container py-4">
            @include('includes.partials.messages')
            @yield('content')
        </main>
    </div>

    @stack('before-scripts')

    {{-- Scripts via Vite --}}
    {{-- Si vous utilisez Vite, les scripts sont déjà inclus avec @vite ci-dessus --}}
    {{-- Si non, utilisez les balises classiques : --}}
    {{-- 
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/frontend.js') }}"></script> 
    --}}

    @stack('after-scripts')

    @include('includes.partials.ga')
</body>
</html>
