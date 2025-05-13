<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @if(app()->getLocale() !== 'en') dir="rtl" @endif>
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @stack('after-styles')
</head>

@php
    use App\Models\Auth\Settings;

    $setting = Settings::find(1);

    $theme = match($setting->theme ?? null) {
        'g' => 'theme-green',
        'p' => 'theme-purple',
        'c' => 'theme-cyan',
        'o' => 'theme-orange',
        'r' => 'theme-red',
        'bh' => 'theme-blush',
        default => 'theme-blue',
    };

    $font = match($setting->font ?? null) {
        'n' => 'font-nunito',
        'u' => 'font-ubuntu',
        'r' => 'font-raleway',
        default => 'font-IBMplex',
    };

    $data_theme = match($setting->data_theme ?? null) {
        'd' => 'dark',
        'hc' => 'high-contrast',
        default => 'light',
    };
@endphp

<body data-theme="{{ $data_theme }}" class="{{ $font }}">
    <div id="wrapper" class="{{ $theme }}">
        @include('includes.partials.messages')
        @yield('content')
    </div>
</body>
</html>
