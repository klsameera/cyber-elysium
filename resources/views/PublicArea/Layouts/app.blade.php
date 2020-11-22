<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @php
    $curr_url = Route::currentRouteName();
    @endphp
    <!-- Links of CSS files -->
    @include('PublicArea.Includes.css')

    <!-- Favicon -->
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">

    <!-- Title -->
    <title>@yield('title','CyberElysium | Public')</title>
</head>

<body>

    <!-- Start Preloader Area -->
    @include('PublicArea.Includes.preloader')
    <!-- End Preloader Area -->

    <!-- Start Header Area -->
    <header class="header-area">

        <!-- Start Navbar Area -->
        @include('PublicArea.Includes.nav')
        <!-- End Navbar Area -->

    </header>
    <!-- End Header Area -->

    @yield('head')
    @yield('content')

    <!-- Start Footer Area -->

    <!-- End Footer Area -->

    <!-- Start Copy Right Area -->
    @include('PublicArea.Includes.copyrightArea')
    <!-- End Copy Right Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="bx bx-chevrons-up"></i>
        <i class="bx bx-chevrons-up"></i>
    </div>
    <!-- End Go Top Area -->
    <!-- Links of JS files -->
    @include('PublicArea.Includes.js')

</body>

</html>
