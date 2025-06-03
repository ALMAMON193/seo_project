@extends('frontend.app')
@section('title', 'SEO ESP | Search Engine Optimization Services')
@section('content')
    <main class="og-bg-primary-color">
        <!-- ===========================Banner Section Start Here==============================================-->
        <section class="og-service-page-2"
            style="background-image: url('{{ asset($serviceBanner->background ?? 'frontend/assets/images/services_banner.png') }}');">
            <div class="container">
                <h1 class="text-white text-center og-service-title-1">
                    {{ $serviceBanner->title ?? 'Search Engine Optimization Services' }}
                </h1>
                <p class="og-service-description-1">
                    {{ $serviceBanner->content ?? ' At SEO ESP, we offer expert consulting across the full SEO spectrum—tailored to your business goals,
                    your audience, and your industry. Here’s how we help you grow smarter.' }}

                </p>
                <div class="breadcrumbs-container">
                    <a class="og-about-us-path-title" href="{{ route('home') }}">Home</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path
                            d="M13.5703 11.22C13.5703 11.3134 13.537 11.3934 13.4703 11.46L8.25031 16.68C8.18365 16.7467 8.10365 16.78 8.01031 16.78C7.91698 16.78 7.83031 16.7467 7.75031 16.68L7.19031 16.12C7.11031 16.04 7.07031 15.9534 7.07031 15.86C7.07031 15.7667 7.11031 15.68 7.19031 15.6L11.5703 11.22L7.19031 6.82003C7.11031 6.75336 7.07031 6.67336 7.07031 6.58003C7.07031 6.4867 7.11031 6.40003 7.19031 6.32003L7.75031 5.76003C7.81698 5.68003 7.90365 5.64003 8.01031 5.64003C8.11698 5.64003 8.19698 5.68003 8.25031 5.76003L13.4703 10.96C13.537 11.0267 13.5703 11.1134 13.5703 11.22Z"
                            fill="#BDBDBD" />
                    </svg>
                    <a class="og-about-us-path-title" href="{{ route('service') }}">Services</a>
                </div>
            </div>
        </section>
        <!-- ===========================Banner Section end Here==============================================-->
        @include('frontend.layouts.pages.service.content-seo')
        <!-- ===========================Local SEO start Here==============================================-->
       @include('frontend.layouts.pages.service.local-seo')
        <!-- ===========================Local SEO end Here==============================================-->
        <!-- ==========================Keyword Research & Tracking start here====================================== -->
        @include('frontend.layouts.pages.service.keyword-research')
        @include('frontend.layouts.pages.service.technical-seo')
        @include('frontend.layouts.pages.service.enterprise-seo')
        @include('frontend.layouts.pages.service.one-page-optimize')
        @include('frontend.layouts.pages.service.data-analysis')
        @include('frontend.layouts.pages.service.e-commerce-seo')

        <section class="boost-section">
            <div class="container">
                <h2 class="boost-section-title">Boost Your Online Visibility with Expert SEO Services</h2>
                <p class="boost-section-sub-title">Get More Traffic, Leads & Sales with Data-Driven SEO Strategies</p>
                <button class="og-boost-section-button">
                    Get a Free SEO Audit Now
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                        fill="none">
                        <path d="M12 1.80273L1 12.8027" stroke="#01120D" stroke-width="1.5" stroke-linecap="round" />
                        <path
                            d="M6 0.934249C6 0.934249 11.6335 0.459354 12.4885 1.31427C13.3434 2.16918 12.8684 7.80273 12.8684 7.80273"
                            stroke="#01120D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </section>
        <!-- ==========================Boost Your Online Visibility with Expert SEO Services end here====================================== -->
    </main>
@endsection
