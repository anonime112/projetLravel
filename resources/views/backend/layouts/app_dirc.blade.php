<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', config('app_name'))</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ url('/')}}/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    

</head>

<?php 
$setting = App\Models\Auth\Settings::where('id',1)->first();
    if ($setting->theme == 'g') {
        $theme = "theme-green";
    } else if ($setting->theme == 'p') {
        $theme = "theme-purple";
    } else if ($setting->theme == 'c') {
        $theme = "theme-cyan";
    } else if ($setting->theme == 'o') {
        $theme = "theme-orange";
    } else if ($setting->theme == 'r') {
        $theme = "theme-red";
    } else if ($setting->theme == 'bh') {
        $theme = "theme-blush";
    } else {
         $theme = "theme-blue";
    }

    if ($setting->font == 'n') {
        $font = "font-nunito";
    } else if ($setting->font == 'u') {
        $font = "font-ubuntu";
    } else if ($setting->font == 'r') {
        $font = "font-raleway";
    } else {
        $font = "font-IBMplex";
    }

    if ($setting->data_theme == 'd') {
        $data_theme = "dark";
    } else if ($setting->data_theme == 'hc') {
        $data_theme = "high-contrast";
    } else {
        $data_theme = "light";
    }

    if ($setting->mode_type == 'Y') {
        $mode_type = "rtl_mode";
    } else {
        $mode_type = "";
    } 
?>
<body data-theme="{{ $data_theme }}" class="{{ $font }} {{ $mode_type }}">
    <div id="wrapper" class="{{ $theme }}">
        <nav class="navbar navbar-fixed-top">
             @include('backend.includes.header')
        </nav>
        <div id="left-sidebar" class="sidebar">
            @include('backend.includes.sidebar_dirc1')
        </div>
        <div class="right_icon_bar">
            @include('backend.includes.rightbar')
        </div>
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    @include('includes.partials.messages')
                </div>
                @yield('content')
            </div>
        </div>
    </div><!--app-body-->
    @yield('modals')
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('before-scripts')  
    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>      
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>      

    <!-- page js file -->
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script> 
    @stack('after-scripts')
</body>
</html>

