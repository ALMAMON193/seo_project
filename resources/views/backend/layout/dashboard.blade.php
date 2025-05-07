<?php
use App\Models\User;
$user = User::all()->count();
// Simulated SEO metrics (replace with actual data as needed)
$pagesIndexed = 1500; // Placeholder
$averageCTR = 2.5; // Placeholder percentage
$backlinksMonitored = 320; // Placeholder
?>

@extends('backend.app')

@section('title', 'SEO Dashboard')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                    <div class="card og-card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Welcome, {{ Auth::user()->first_name ?? '' }} {{ Auth::user()->last_name ?? '' }}! 📊</h5>
                                    <p class="mb-4">
                                        Monitor your SEO performance and content metrics in real-time.
                                    </p>
                                    <a href="" class="og-btn">View Detailed Reports</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection

@push('script')

@endpush
