<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{ asset('assets1/css/aos.css')}}">
        <link rel="stylesheet" href="{{ asset('assets1/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets1/css/boxicons.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets1/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets1/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{ asset('assets1/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets1/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('assets1/css/header.css')}}">
        <link rel="stylesheet" href="{{ asset('assets1/css/responsive.css')}}">

        <title>Canyon - College University HTML Template</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/img/all-img/favicon.png')}}">
    </head>
    <body>

        <!-- preloader -->
        <div class="preloader-container" id="preloader">
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
        </div>
        <!-- preloader -->

        <!-- Inclure le header -->
        @include('home.layouts.header')

        @yield('content')


         @include('home.layouts.footer')

        <div class="go-top active">
            <i class="bx bx-up-arrow-alt"></i>
        </div>

        <!-- Links of JS files -->
        <script src="{{ asset('assets1/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets1/js/aos.js')}}"></script>
        <script src="{{ asset('assets1/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets1/js/magnific-popup.min.js')}}"></script>
        <script src="{{ asset('assets1/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets1/js/main.js')}}"></script>
    </body>
</html>
