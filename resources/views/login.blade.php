@extends('include/auth')

@section('title', 'Login')

@section('customcss')
<link rel="stylesheet" href="{{asset('vendor/css/pages/page-auth.css')}}">
@endsection

@section('content')

       
        <!-- /Left Section -->
        <!-- <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-12 pb-2">
            <img src="{{asset('img/illustrations/auth-login-illustration-light.png')}}" class="auth-cover-illustration w-100" alt="auth-illustration" data-app-light-img="illustrations/auth-login-illustration-light.png" data-app-dark-img="illustrations/auth-login-illustration-dark.png" />
            <img src="{{asset('img/illustrations/auth-cover-login-mask-light.png')}}" class="authentication-image" alt="mask" data-app-light-img="illustrations/auth-cover-login-mask-light.png" data-app-dark-img="illustrations/auth-cover-login-mask-dark.png" />
        </div> -->
            <!-- /Left Section -->

            <div class="card p-md-7 p-1">
                <div class="app-brand justify-content-center">
                    <a href="#" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                        <span style="color:var(--bs-primary);">
                                <img src="{{ asset('vendor/img/oxw.webp') }}" width="100">
                        </span>
                        </span>
                            {{-- <span class="app-brand-text demo text-heading fw-semibold">Coin Txn</span> --}}
                    </a>
                </div>
                <div class="card-body mt-1">
                    <!-- Login -->
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                    {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <h4 class="text-light mb-4 text-center">Welcome to OX Wallet</h4>
        
                    <form id="formAuthentication" class="mb-5" action="{{url(route('usersignin'))}}" method="POST">
                        @csrf
                        <div class="form-floating form-floating-outline mb-5">
                            <input type="text" class="form-control" id="username" name="username" autofocus>
                            <label for="username">Username</label>
                        </div>
                        <div class="mb-5">
                            <div class="form-password-toggle">
                            <div class="input-group input-group-merge">
                                <div class="form-floating form-floating-outline">
                                <input type="password" id="password" class="form-control text-light" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <label for="password">Password</label>
                                </div>
                                <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
                            </div>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100">
                            Sign in
                        </button>
                    </form>
        
                    <p class="text-center mb-0">
                        <span clas="text-light">New on our platform?</span>
                        <a href="#">
                            <span>Create an account</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- <img alt="mask" src="{{asset('assets/img/illustrations/auth-basic-login-mask-light.png')}}" class="authentication-image d-none d-lg-block" data-app-light-img="illustrations/auth-basic-login-mask-light.png" data-app-dark-img="illustrations/auth-basic-login-mask-dark.png" style="visibility: visible;"> -->
            <!-- <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-12 px-12 py-6">
                <div class="w-px-400 mx-auto pt-5 pt-lg-0">

                </div>
            </div> -->
            <!-- /Login -->
@endsection

@section('customjs')
{{-- <script src="{{ asset('js/pages-auth.js') }}"></script> --}}
@endsection