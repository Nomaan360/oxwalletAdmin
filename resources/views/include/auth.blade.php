<!DOCTYPE html>
<html lang="en" class="dark-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('/') }}" data-template="vertical-menu-template" data-style="dark">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('vendor/img/favicon.png') }}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400..800&display=swap" rel="stylesheet">

        @include('include/headcss')
        @yield('customcss')
        <link rel="stylesheet" href="{{asset('vendor/css/pages/page-auth.css')}}">

        <!-- Helpers -->
        <script src="{{ asset('vendor/js/helpers.js') }}"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
        {{-- <script src="{{ asset('vendor/js/template-customizer.js') }}"></script> --}}
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('js/config.js') }}"></script>
        <style>
            .page-bg {
                position: fixed;
                bottom: 0;
                right: 0%;
                width: 100%;
                height: 100%;
                z-index: -1;
                opacity: 0.2;
            }
            .page-bg img {
                object-fit: cover;
                object-position: right;
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
    <body>

        
        <div class="authentication-wrapper authentication-basic container-p-y p-4 p-sm-0">
            <!-- Logo -->
            <!-- <a href="http://www.9pay.co/" class="auth-cover-brand d-flex align-items-center gap-2">
                <span class="app-brand-logo demo">
                <span style="color:var(--bs-primary);">
                        <img src="{{ asset('vendor/img/F.png') }}" width="100">
                </span>
                </span>
                    {{-- <span class="app-brand-text demo text-heading fw-semibold">Coin Txn</span> --}}
            </a>   -->
            <!-- /Logo -->
             <div class="page-bg">
                <img src="{{asset('img/backgrounds/login-bg2.png')}}" style="filter: hue-rotate(110deg);" alt="">
            </div>
                <div class="position-relative">
                    <div class="authentication-wrapper authentication-basic container-p-y p-4 p-sm-0">
                        <div class="authentication-inner py-6">
                            @yield('content')
                        </div>
                    </div>
                </div>
        </div>


        @include('include/footjs')
        @yield('customjs')
    </body>
</html>
