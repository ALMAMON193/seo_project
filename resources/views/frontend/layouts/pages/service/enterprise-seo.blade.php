@extends('frontend.app')
@section('Home','Technical SEO')
@section('content')
    <main class="og-bg-primary-color">
        <!-- ===========================Banner Section Start Here==============================================-->
        @include('frontend.partials.service_banner_header')
        <!-- ===========================Banner Section End Here==============================================-->

        <!-- ===========================Keyword Research Section Start Here==============================================-->
        <section class="og-keyword-section">
            <div class="container og-keyword-section-container">
                <div class="og-keyword-section-left">
                    <h2 class="og-keyword-section-title">Enterprise SEO</h2>
                    <p class="og-keyword-section-description">
                        SEO at scale requires more than just solid tactics—it demands
                        experience, coordination, and strategic foresight.
                    </p>
                    <p class="og-keyword-section-description">
                        At SEO ESP, we bring deep experience working with large, complex
                        websites—including directories, multi-brand platforms, and sites
                        with millions of indexed pages. Our experience includes work for
                        Fortune 100 companies and well-known brands, giving us the insight
                        to navigate layered stakeholders, strict technical requirements,
                        and high-stakes traffic goals.
                    </p>
                    <button class="og-keyword-section-btn">Get started</button>
                </div>
                <div class="og-keyword-section-right">
                    <img src="{{asset('frontend/assets/images/closeup-view.png')}}" alt="" class="og-keyword-section-right-image" />
                </div>
            </div>
        </section>
        <!-- ===========================Keyword Research Section End Here==============================================-->

        <!-- =========================== Our approach Section Start Here ==============================================-->
        <section class="og-beyond-basic-keyword-section">
            <div class="container">
                <div class="scalable-seo-container">
                    <div class="og-beyond-basic-keyword-left">
                        <img
                            src="{{asset('frontend/assets/images/customer-relationship-management.png')}}"
                            alt="investment-advisor"
                            class="og-beyond-basic-keyword-left-image"
                        />
                    </div>
                    <div class="og-beyond-basic-keyword-right">
                        <div>
                            <h2 class="og-beyond-content-seo-section-heading">
                                Scalable SEO Solutions
                            </h2>
                            <p class="og-beyond-basic-keyword-description">
                                Whether you’re replat forming, expanding internationally, or
                                cleaning up years of legacy SEO, we’ll help you stay agile
                                while driving measurable results.
                            </p>

                            <div class="local-seo-our-approach-list-container">
                                <div class="our-approach-list-item">
                                    <div>
                                        <svg
                                        class="list-dot-icon"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="18"
                                            height="18"
                                            viewBox="0 0 18 18"
                                            fill="none"
                                        >
                                            <circle cx="9" cy="9" r="9" fill="#C4C0B8" />
                                        </svg>
                                    </div>
                                    <div class="our-approach-list-item-text">
                                        Align with internal teams (product, dev, content, and
                                        legal)
                                    </div>
                                </div>
                                <div class="our-approach-list-item">
                                    <div>
                                        <svg
                                        class="list-dot-icon"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="18"
                                            height="18"
                                            viewBox="0 0 18 18"
                                            fill="none"
                                        >
                                            <circle cx="9" cy="9" r="9" fill="#C4C0B8" />
                                        </svg>
                                    </div>
                                    <div class="our-approach-list-item-text">
                                        Maintain performance across thousands (or millions) of
                                        URLs
                                    </div>
                                </div>
                                <div class="our-approach-list-item">
                                    <div>
                                        <svg
                                        class="list-dot-icon"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="18"
                                            height="18"
                                            viewBox="0 0 18 18"
                                            fill="none"
                                        >
                                            <circle cx="9" cy="9" r="9" fill="#C4C0B8" />
                                        </svg>
                                    </div>
                                    <div class="our-approach-list-item-text">
                                        Uncover high-value opportunities that drive meaningful
                                        impact at scale
                                    </div>
                                </div>
                                <div class="our-approach-list-item">
                                    <div>
                                        <svg
                                        class="list-dot-icon"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="18"
                                            height="18"
                                            viewBox="0 0 18 18"
                                            fill="none"
                                        >
                                            <circle cx="9" cy="9" r="9" fill="#C4C0B8" />
                                        </svg>
                                    </div>
                                    <div class="our-approach-list-item-text">
                                        Balance long-term growth with short-term wins.
                                    </div>
                                </div>
                            </div>

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
