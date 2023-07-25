<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>eyad - Personal Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.png') }}">
        <!-- Place favicon.ico in the root directory -->
		<!-- CSS here -->
        
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">
       
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    </head>
    <body>
        <!-- preloader-start -->
        <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <!-- preloader-end -->
		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        @include('frontend.body.header')
    <!-- header-area-end -->

    <!-- main-area -->
    <main>
        @yield('main')
   </main>
        <!-- main-area-end -->
    @include('frontend.body.footer')