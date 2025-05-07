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
                    <h2 class="og-keyword-section-title">Data Analysis</h2>
                    <p class="og-keyword-section-description">
                        We turn data into direction. Using tools like GA4, Search Console,
                        and custom dashboards, we uncover what’s working, what’s not, and
                        what needs attention.
                    </p>
                    <p class="og-keyword-section-description">
                        Our approach is grounded in outcome-focused strategy—we prioritize
                        the metrics that actually drive growth, not just surface-level
                        stats that look good in a report. Whether it’s organic
                        conversions, engagement by landing page, or keyword-driven
                        revenue, we identify the KPIs that tie directly to your business
                        goals.
                    </p>
                    <button class="og-keyword-section-btn">Get started</button>
                </div>
                <div class="og-keyword-section-right">
                    <img
                        src="{{asset('frontend/assets/images/businesswoman-business-meeting.png')}}"
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
                <div class="scalable-seo-container">
                    <div class="og-beyond-basic-keyword-left">
                        <img
                            src="{{asset('frontend/assets/images/business-team-is-discussing.png')}}"
                            alt="investment-advisor"
                            class="og-beyond-basic-keyword-left-image"
                        />
                    </div>
                    <div class="og-beyond-basic-keyword-right">
                        <div>
                            <h2 class="og-beyond-content-seo-section-heading">
                                Data-Driven Decision Making
                            </h2>
                            <p class="og-beyond-basic-keyword-description">
                                Good SEO is accountable. We prioritize data that moves your
                                business forward.
                            </p>

                            <div class="local-seo-our-approach-list-container">
                                <div class="our-approach-list-item">
                                    <div>
                                        <svg
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
                                        Prioritize outcomes over outputs
                                    </div>
                                </div>
                                <div class="our-approach-list-item">
                                    <div>
                                        <svg
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
                                        Help you make confident, data-backed decisions.
                                    </div>
                                </div>
                                <div class="our-approach-list-item">
                                    <div>
                                        <svg
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
                                        Align marketing activities with measurable growth
                                    </div>
                                </div>
                                <div class="our-approach-list-item">
                                    <div>
                                        <svg
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
                                        Track progress clearly, without getting lost in the noise.
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
