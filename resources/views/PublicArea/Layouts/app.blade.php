<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta content="GPA calculator, university gpa calculate, best gpa calculator" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description','best gpa calculator in the world')" />
    <title>@yield('title','CyberElysium | Home')</title>

    <meta property="og:title" content="@yield('ogtitle','CyberElysium')" />
    <meta property="og:url" content="{{Request::url()}}" />

    <meta property="og:type" content="@yield('ogtype','website')" />
    <meta property="og:article:published_time" content="@yield('ogarticlepublish','')"  />
    <meta property="og:article:section" content="@yield('ogarticlesection','')"  />

    <meta property="og:video:tag" content="@yield('ogvideotag','')"  />

    <meta property="og:image" content="@yield('ogimage',asset("img/logo.png") )"  />
    <meta property="og:image:secure_url" content="@yield('ogimage', asset("img/logo.png") )"  />
    <meta property="og:image:width" content="@yield('ogimagewidth',500)"  />
    <meta property="og:image:height" content="@yield('ogimageheight',200)"  />

    @php
    $curr_url = Route::currentRouteName();
    @endphp
    <!-- Links of CSS files -->
    @include('PublicArea.Includes.css')

    <!-- Favicon -->
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">

    <!-- Title -->
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
