@extends('include/layout')

@section('title', 'OX Wallet')

@section('content')
<div class="row g-6">
    <div class="col-sm-6 col-lg-3">
        <div class="card card-border-shadow-primary h-100">
            <div class="card-body">
            <div class="d-flex align-items-center mb-2">
                <div class="avatar me-4">
                <span class="avatar-initial rounded-3 bg-label-primary"><i class="ri-car-line ri-24px"></i></span>
                </div>
                <h4 class="mb-0">{{ $data['privacy_policy'] }}</h4>
            </div>
            <h6 class="mb-0 fw-normal">privacy_policy</h6>
            <!-- <p class="mb-0">
                <span class="me-1 fw-medium">+18.2%</span>
                <small class="text-muted">than last week</small>
            </p> -->
            </div>
        </div>
    </div>
   
    <!-- Gamification Card -->


 
</div>
@endsection

@section('customjs')
<script src="{{ asset('js/dashboards-analytics.js') }}"></script>
@endsection
