@extends('frontend.app')
@section('Home','one-page-optimize')
@section('content')
    <main class="og-bg-primary-color">
        <!-- ===========================Banner Section Start Here==============================================-->
        @include('frontend.partials.service_banner_header')
        <!-- ===========================Banner Section End Here==============================================-->

        <!-- ===========================Keyword Research Section Start Here==============================================-->
        <section class="og-keyword-section">
            <div class="container og-keyword-section-container">
                <div class="og-keyword-section-left">
                    <h2 class="og-keyword-section-title">On-Page Optimization</h2>
                    <p class="og-keyword-section-description">
                        Fine-Tuning Every Element of Your Web Pages—From Meta Tags,
                        Headings, and Content Structure to Internal Linking and User
                        Experience to Improve Search Engine Visibility, Enhance Relevance,
                        and Drive Targeted Organic Traffic
                    </p>
                    <button class="og-keyword-section-btn">Get started</button>
                </div>
                <div class="og-keyword-section-right">
                    <img
                        src="{{asset('frontend/assets/images/person-writing-sticky-notes.png')}}"
                        alt=""
                         class="og-keyword-section-right-image"
                    />
                </div>
            </div>
        </section>
        <!-- ===========================Keyword Research Section End Here==============================================-->

        <!-- =========================== Our approach Section Start Here ==============================================-->
        <section class="og-beyond-basic-keyword-section">
            <div class="container">
                <div class="our-approach-container">
                    <div class="og-beyond-basic-keyword-left">
                        <img
                            src="{{asset('frontend/assets/images/business-team.png')}}"
                            alt="investment-advisor"
                            class="og-beyond-basic-keyword-left-image"
                        />
                    </div>
                    <div class="og-beyond-basic-keyword-right">
                        <div>
                            <h2 class="og-beyond-content-seo-section-heading">
                                On-Page SEO Mastery
                            </h2>
                            <p class="og-beyond-basic-keyword-description">
                                We don’t optimize in isolation—we optimize with intent.
                            </p>

                            <p class="og-beyond-basic-keyword-description">
                                Our on-page work is based on the keyword strategy we create
                                specifically for your site, targeting high-impact,
                                low-competition keyword variations that support both
                                short-term and long-term ranking goals.
                            </p>
                            <p class="og-beyond-basic-keyword-description">
                                We fine-tune everything from meta tags and header structures
                                to internal links, schema markup, and image optimization,
                                ensuring each page aligns with your overall SEO strategy and
                                has the best chance to rank and convert.
                            </p>
                            <p class="og-beyond-basic-keyword-description">
                                It’s not about overloading a page with keywords. It’s about
                                aligning structure, content, and intent to give search
                                engines— and your users —precisely what they’re looking for.
                            </p>

                            <button class="og-keyword-section-btn">Get started</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =========================== Our approach Section End Here ==============================================-->

        <!-- ==========================Boost Your Online Visibility with Expert SEO Services start here====================================== -->
        @include('frontend.partials.boost')
        <!-- ==========================Boost Your Online Visibility with Expert SEO Services end here====================================== -->
    </main>
@endsection
