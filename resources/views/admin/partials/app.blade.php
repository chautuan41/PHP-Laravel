<!--

=========================================================
* Volt - Bootstrap 5 Admin Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->

    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Admin Dashboard">
    <meta name="author" content="Themesberg">
    <meta name="description"
        content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt">
    <meta property="og:title" content="Volt - Free Bootstrap 5 Admin Dashboard">
    <meta property="og:description"
        content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta property="og:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/volt">
    <meta property="twitter:title" content="Volt - Free Bootstrap 5 Admin Dashboard">
    <meta property="twitter:description"
        content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta property="twitter:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('backend/assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend/assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('backend/assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('backend/assets/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fontawesome -->
    <link type="text/css" href="{{ asset('backend/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('backend/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('backend/css/volt.css')}}" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>

    @include('admin.partials.sidebar')
    <main class="content">
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <!-- Search form -->
                        <form class="navbar-search form-inline" id="navbar-search-main">
                            <div class="input-group input-group-merge search-bar">
                                <span class="input-group-text" id="topbar-addon"><span
                                        class="fas fa-search"></span></span>
                                <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search"
                                    aria-label="Search" aria-describedby="topbar-addon">
                            </div>
                        </form>
                    </div>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="media d-flex align-items-center">
                                    <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder"
                                        src="/backend/assets/img/team/{{ Auth::user()->avartar }}">
                                    <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                                        <span
                                            class="mb-0 font-small font-weight-bold">{{ Auth::user()->fullname }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                                <a class="dropdown-item font-weight-bold" href="#"><span
                                        class="far fa-user-circle"></span>My Profile</a>
                                <a class="dropdown-item font-weight-bold" href="#"><span
                                        class="fas fa-cog"></span>Settings</a>
                                <a class="dropdown-item font-weight-bold" href="#"><span
                                        class="fas fa-envelope-open-text"></span>Messages</a>
                                <a class="dropdown-item font-weight-bold" href="#"><span
                                        class="fas fa-user-shield"></span>Support</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item font-weight-bold" href="{{ route('admin.logout') }}"><span
                                        class="fas fa-sign-out-alt text-danger"></span>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </main>

    <!-- Core -->
    <script src="{{ asset('backend/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('backend/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>

    <!-- Slider -->
    <script src="{{ asset('backend/vendor/nouislider/distribute/nouislider.min.js')}}"></script>

    <!-- Jarallax -->
    <script src="{{ asset('backend/vendor/jarallax/dist/jarallax.min.js')}}"></script>

    <!-- Smooth scroll -->
    <script src="{{ asset('backend/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>

    <!-- Count up -->
    <script src="{{ asset('backend/vendor/countup.js/dist/countUp.umd.js')}}"></script>

    <!-- Notyf -->
    <script src="{{ asset('backend/vendor/notyf/notyf.min.js')}}"></script>

    <!-- Charts -->
    <script src="{{ asset('backend/vendor/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>

    <!-- Datepicker -->
    <script src="{{ asset('backend/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

    <!-- Simplebar -->
    <script src="{{ asset('backend/vendor/simplebar/dist/simplebar.min.js')}}"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js')}}"></script>

    <!-- Volt JS -->
    <script src="{{ asset('backend/assets/js/volt.js')}}"></script>

</body>

</html>