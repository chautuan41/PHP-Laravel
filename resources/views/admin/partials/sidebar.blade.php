<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand mr-lg-5" href="/backend/index.html">
        <img class="navbar-brand-dark" src="/backend/assets/img/brand/light.svg" alt="Volt logo" /> <img
            class="navbar-brand-light" src="/backend/assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container-fluid bg-soft">
    <div class="row">
        <div class="col-12">

            <nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
                <div class="sidebar-inner px-4 pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="/backend/pages/dashboard/dashboard.html" class="nav-link">
                                <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                                <span>Overview</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                                data-toggle="collapse" data-target="#submenu-app">
                                <span>
                                    <span class="sidebar-icon"><span class="fas fa-table"></span></span>
                                    Tables
                                </span>
                                <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                            </span>
                            <div class="multi-level collapse " role="list" id="submenu-app" aria-expanded="false">
                                <ul class="flex-column nav">
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('accounts') }}"><span>Accounts Table</span></a></li>
                                    <li class="nav-item "><a class="nav-link"
                                            href="/backend/pages/tables/bootstrap-tables.html"><span>Products
                                                Table</span></a></li>
                                    <li class="nav-item "><a class="nav-link"
                                            href="/backend/pages/tables/bootstrap-tables.html"><span>Products types
                                                Table</span></a></li>
                                    <li class="nav-item "><a class="nav-link"
                                            href="/backend/pages/tables/bootstrap-tables.html"><span>Invoices
                                                Table</span></a></li>
                                    <li class="nav-item "><a class="nav-link"
                                            href="/backend/pages/tables/bootstrap-tables.html"><span>Invoice details
                                                Table</span></a></li>
                                </ul>
                            </div>
                        </li>


                        <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>

                    </ul>
                </div>
            </nav>