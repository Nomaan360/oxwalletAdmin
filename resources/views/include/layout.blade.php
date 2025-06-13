<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('/') }}" data-template="vertical-menu-template" data-style="light">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>9 Pay</title>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('vendor/img/favicon.png') }}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400..800&display=swap" rel="stylesheet">

        @include('include/headcss')
        @yield('customcss')

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
                right: -10%;
                width: 80%;
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
        

        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="page-bg">
                @if (Session::has('merchantname'))
                <img src="{{asset('img/backgrounds/page-bg2.png')}}" style="filter: hue-rotate(310deg);" alt="">
                @else
                <img src="{{asset('img/backgrounds/page-bg.png')}}" style="filter: hue-rotate(310deg);" alt="">
                @endif
            </div>
            <div class="layout-container">
                @include('include/sidebar')
                <!-- Layout container -->
                <div class="layout-page">
                    @include('include/navbar')
                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">
                            @yield('content')
                        </div>
                        <!-- Content -->
                        @include('include/footer')
                    </div>
                </div>
            </div>
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>
        </div>
        <!-- / Layout wrapper -->

        @include('include/footjs')
        @yield('customjs')
    </body>
</html>
