<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
            <i class="ri-menu-fill ri-22px"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        @if (Session::has('merchantname'))
            <p>Hello {{ Session::get('merchantname') }}..,</p>
        @endif

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Language -->
       


            <!--/ Notification -->

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ asset('img/avatars/1.png') }}" alt class="rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-2">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('img/avatars/1.png') }}" alt class="rounded-circle">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    @if (Session::has('merchantid'))
                                        <span class="fw-medium d-block small">{{ session('merchantname') }}</span>
                                        <small class="text-muted">Merchant</small>
                                    @else 
                                        <span class="fw-medium d-block small">{{ session('adminname') }}</span>                                       
                                        <small class="text-muted">Admin</small>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </li>
                    @if (Session::has('merchantid'))
                        <li>
                            <a class="dropdown-item" href="{{ url(route('merchant_profile')) }}">
                                <i class="ri-user-3-line ri-22px me-3"></i><span class="align-middle">My Profile</span>
                            </a>
                        </li>
                    @endif
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="d-grid px-4 pt-2 pb-1">
                        @if (Session::has('merchantid'))
                            <a class="btn btn-sm btn-danger d-flex" href="{{ url(route('merchant_logout')) }}">
                                <small class="align-middle">Logout</small>
                                <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                            </a>
                        @else
                            <a class="btn btn-sm btn-danger d-flex" href="{{ url(route('admin_logout')) }}">
                                <small class="align-middle">Logout</small>
                                <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                            </a>
                        @endif
                        </div>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>

    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
            aria-label="Search...">
        <i class="ri-close-fill search-toggler cursor-pointer"></i>
    </div>
</nav>
<!-- / Navbar -->