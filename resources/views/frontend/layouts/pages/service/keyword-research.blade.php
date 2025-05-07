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
                    <h2 class="og-keyword-section-title">
                        Keyword Research & Tracking
                    </h2>
                    <p class="og-keyword-section-description">
                        A Comprehensive Approach to Discovering the Right Keywords,
                        Analyzing Competitor Strategies, and Continuously Tracking
                        Performance to Maximize Your SEO and Content Marketing Results
                    </p>
                    <button class="og-keyword-section-btn">Get started</button>
                </div>
                <div class="og-keyword-section-right">
                    <img
                        src="{{asset('frontend/assets/images/homepage-concept-with-search-bar.png')}}"
                        alt=""
                        class="og-keyword-section-right-image"
                    />
                </div>
            </div>
        </section>
        <!-- ===========================Keyword Research Section End Here==============================================-->

        <!-- =========================== Beyond Basic Keyword Lists Section Start Here ==============================================-->
        <section class="og-beyond-basic-keyword-section">
            <div class="container">
                <h2 class="og-beyond-basic-keyword-section-heading">
                    We go far beyond basic keyword lists.
                </h2>
                <div class="og-beyond-basic-keyword-container">
                    <div class="og-beyond-basic-keyword-left">
                        <img
                            src="{{asset('frontend/assets/images/investment-advisor.png')}}"
                            alt="investment-advisor"
                            class="og-beyond-basic-keyword-left-image"
                        />
                    </div>
                    <div class="og-beyond-basic-keyword-right">
                        <div>
                            <p class="og-beyond-basic-keyword-description">
                                Our process begins with in-depth research to identify keyword
                                variations that have lower competition but high strategic
                                value. By targeting these, we help your site build topical
                                relevance, making it easier to rank for broader, more
                                competitive terms over time.
                            </p>

                            <p class="og-beyond-basic-keyword-description">
                                We also analyze the on-page features that appear in Google
                                search results for each keyword, such as featured snippets,
                                shopping carousels, or People Also Ask boxes. If Google’s own
                                content dominates a keyword, we flag it. That way, you invest
                                your efforts in terms where your content can compete and win.
                            </p>

                            <p class="og-beyond-basic-keyword-description">
                                Then we track performance continuously, refining your keyword
                                strategy based on ranking shifts, user behavior, and
                                real-world results—not just assumptions.
                            </p>

                            <div class="og-beyond-basic-keyword-card-container">
                                <div class="og-beyond-basic-keyword-card">
                                    <div class="og-beyond-basic-keyword-card-icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="84"
                                            height="84"
                                            viewBox="0 0 84 84"
                                            fill="none"
                                        >
                                            <rect width="84" height="84" rx="19" fill="#9B907F" />
                                            <path
                                                d="M53.576 39.9848V32.4917C53.576 30.5679 52.0116 29 50.085 29H33.7772C31.8537 29 30.2861 30.5647 30.2861 32.4917V40.081C27.8529 40.5139 26 42.6429 26 45.1983C26 48.0647 28.3306 50.3957 31.1966 50.3957C34.0625 50.3957 36.3931 48.0647 36.3931 45.1983C36.3931 42.5595 34.4151 40.3728 31.8634 40.0458V32.4949C31.8634 31.44 32.7225 30.5807 33.7772 30.5807H41.1441V44.6628C38.65 45.0444 36.7361 47.2022 36.7361 49.8026C36.7361 52.669 39.0667 55 41.9327 55C44.7986 55 47.1292 52.669 47.1292 49.8026C47.1292 47.2055 45.2122 45.0444 42.7213 44.6628V30.5775H50.0882C51.1429 30.5775 52.002 31.4368 52.002 32.4917V39.988C49.5143 40.376 47.6069 42.5306 47.6069 45.1246C47.6069 47.991 49.9375 50.322 52.8034 50.322C55.6694 50.322 58 47.991 58 45.1246C58 42.521 56.0765 40.36 53.5792 39.9848H53.576ZM34.8159 45.1951C34.8159 47.1926 33.1905 48.815 31.1966 48.815C29.2026 48.815 27.5772 47.1894 27.5772 45.1951C27.5772 43.2008 29.2026 41.5752 31.1966 41.5752C33.1905 41.5752 34.8159 43.2008 34.8159 45.1951ZM45.552 49.7962C45.552 51.7937 43.9267 53.4161 41.9327 53.4161C39.9387 53.4161 38.3134 51.7905 38.3134 49.7962C38.3134 47.8018 39.9387 46.1762 41.9327 46.1762C43.9267 46.1762 45.552 47.8018 45.552 49.7962ZM52.8002 48.7477C50.803 48.7477 49.1809 47.1221 49.1809 45.1278C49.1809 43.1334 50.8062 41.5078 52.8002 41.5078C54.7942 41.5078 56.4196 43.1334 56.4196 45.1278C56.4196 47.1221 54.7942 48.7477 52.8002 48.7477Z"
                                                fill="#FFFBF4"
                                            />
                                        </svg>
                                    </div>

                                    <h3 class="og-beyond-basic-keyword-card-title">
                                        Keyword Variations
                                    </h3>
                                    <p class="og-beyond-basic-keyword-card-description">
                                        Find less competitive related terms
                                    </p>
                                </div>
                                <div class="og-beyond-basic-keyword-card">
                                    <div class="og-beyond-basic-keyword-card-icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="84"
                                            height="84"
                                            viewBox="0 0 84 84"
                                            fill="none"
                                        >
                                            <rect width="84" height="84" rx="19" fill="#726352" />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M54.4796 28H29.5204C27.5808 28 26 29.5775 26 31.5204V52.6748C26 54.6144 27.5775 56.1952 29.5204 56.1952H54.4796C56.4192 56.1952 58 54.6176 58 52.6748V31.5204C58 29.5808 56.4225 28 54.4796 28ZM29.5204 29.5905H54.4796C55.5432 29.5905 56.4095 30.4568 56.4095 31.5204V33.767H27.5872V31.5204C27.5872 30.4568 28.4536 29.5905 29.5171 29.5905H29.5204ZM54.4796 54.6079H29.5204C28.4568 54.6079 27.5905 53.7416 27.5905 52.678V35.3575H56.4128V52.678C56.4128 53.7416 55.5464 54.6079 54.4829 54.6079H54.4796Z"
                                                fill="#FFFBF4"
                                            />
                                            <path
                                                d="M40.0585 39.3076H30.6806C30.3414 39.3076 30.0664 39.5826 30.0664 39.9218V40.1643C30.0664 40.5035 30.3414 40.7785 30.6806 40.7785H40.0585C40.3977 40.7785 40.6727 40.5035 40.6727 40.1643V39.9218C40.6727 39.5826 40.3977 39.3076 40.0585 39.3076Z"
                                                fill="#FFFBF4"
                                            />
                                            <path
                                                d="M38.6135 43.3486H30.6806C30.3414 43.3486 30.0664 43.6236 30.0664 43.9628V44.2053C30.0664 44.5445 30.3414 44.8195 30.6806 44.8195H38.6135C38.9527 44.8195 39.2277 44.5445 39.2277 44.2053V43.9628C39.2277 43.6236 38.9527 43.3486 38.6135 43.3486Z"
                                                fill="#FFFBF4"
                                            />
                                            <path
                                                d="M40.0585 47.3896H30.6806C30.3414 47.3896 30.0664 47.6646 30.0664 48.0039V48.2463C30.0664 48.5855 30.3414 48.8605 30.6806 48.8605H40.0585C40.3977 48.8605 40.6727 48.5855 40.6727 48.2463V48.0039C40.6727 47.6646 40.3977 47.3896 40.0585 47.3896Z"
                                                fill="#FFFBF4"
                                            />
                                            <path
                                                d="M30.8146 32.6869C31.3163 32.6869 31.723 32.2802 31.723 31.7785C31.723 31.2768 31.3163 30.8701 30.8146 30.8701C30.3129 30.8701 29.9062 31.2768 29.9062 31.7785C29.9062 32.2802 30.3129 32.6869 30.8146 32.6869Z"
                                                fill="#FFFBF4"
                                            />
                                            <path
                                                d="M34.0978 32.6869C34.5995 32.6869 35.0062 32.2802 35.0062 31.7785C35.0062 31.2768 34.5995 30.8701 34.0978 30.8701C33.5961 30.8701 33.1895 31.2768 33.1895 31.7785C33.1895 32.2802 33.5961 32.6869 34.0978 32.6869Z"
                                                fill="#FFFBF4"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M54.3984 43.4651L53.7745 43.3197C53.6452 42.7507 53.4189 42.2076 53.1085 41.7098L53.4157 41.2023C53.4965 41.0633 53.4771 40.8855 53.3639 40.7723L52.365 39.7767C52.2972 39.7088 52.2066 39.6732 52.1161 39.6732C52.0547 39.6732 51.9933 39.6894 51.9351 39.7217L51.4276 40.0288C50.933 39.7185 50.3867 39.4922 49.8177 39.3629L49.6722 38.739C49.6334 38.5838 49.4912 38.4707 49.3296 38.4707H47.9201C47.7585 38.4707 47.6163 38.5806 47.5775 38.739L47.432 39.3629C46.8631 39.4922 46.32 39.7153 45.8254 40.0256L45.3146 39.7217C45.2597 39.6894 45.195 39.6732 45.1336 39.6732C45.0431 39.6732 44.9526 39.7088 44.8847 39.7767L43.889 40.7723C43.7727 40.8855 43.7533 41.0665 43.8373 41.2023L44.1412 41.7131C43.8308 42.2076 43.6078 42.7507 43.4785 43.3229L42.9031 43.4651C42.7447 43.5039 42.6348 43.6462 42.6348 43.8078V45.2172C42.6348 45.3756 42.7447 45.5179 42.8998 45.5567L43.4753 45.7021C43.6046 46.2711 43.8308 46.8142 44.1412 47.312L43.8341 47.8195C43.7533 47.9585 43.7727 48.1363 43.8858 48.2495L44.8847 49.2484C44.9526 49.3162 45.0431 49.3486 45.1336 49.3486C45.195 49.3486 45.2564 49.3324 45.3146 49.3001L45.8222 48.993C46.3168 49.3033 46.8598 49.5296 47.432 49.6589L47.5775 50.2343C47.6163 50.3895 47.7585 50.5026 47.9201 50.5026H49.3296C49.4912 50.5026 49.6334 50.3927 49.6722 50.2343L49.8177 49.6589C50.3867 49.5296 50.9297 49.3065 51.4243 48.9962L51.9351 49.3001C51.9901 49.3324 52.0547 49.3486 52.1161 49.3486C52.2066 49.3486 52.2972 49.313 52.365 49.2451L53.3607 48.2495C53.4771 48.1331 53.4965 47.9553 53.4124 47.8195L53.1085 47.3088C53.4189 46.8142 53.6419 46.2711 53.7712 45.7021L54.3951 45.5567C54.5535 45.5179 54.6635 45.3756 54.6635 45.214V43.8046C54.6635 43.6429 54.5535 43.5007 54.3951 43.4619L54.3984 43.4651ZM48.6281 47.6838C46.8792 47.6838 45.4569 46.2614 45.4569 44.5125C45.4569 42.7637 46.8792 41.3413 48.6281 41.3413C50.377 41.3413 51.7993 42.7637 51.7993 44.5125C51.7993 46.2614 50.377 47.6838 48.6281 47.6838Z"
                                                fill="#FFFBF4"
                                            />
                                            <path
                                                d="M49.5248 45.3572C50.0058 44.8762 50.0058 44.0964 49.5248 43.6154C49.0438 43.1344 48.264 43.1344 47.783 43.6154C47.302 44.0964 47.302 44.8762 47.783 45.3572C48.264 45.8382 49.0438 45.8382 49.5248 45.3572Z"
                                                fill="#FFFBF4"
                                            />
                                        </svg>
                                    </div>

                                    <h3 class="og-beyond-basic-keyword-card-title">
                                        On-Page Features
                                    </h3>
                                    <p class="og-beyond-basic-keyword-card-description">
                                        Analyze SERP elements for each keyword
                                    </p>
                                </div>
                                <div class="og-beyond-basic-keyword-card">
                                    <div class="og-beyond-basic-keyword-card-icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="84"
                                            height="84"
                                            viewBox="0 0 84 84"
                                            fill="none"
                                        >
                                            <rect width="84" height="84" rx="19" fill="#878786" />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M26.6374 26C26.0792 26 25.6348 26.4513 25.6348 27.0026V56.9905C25.6348 57.5487 26.0792 58 26.6374 58H58.3169C58.8751 58 59.3264 57.5487 59.3264 56.9905C59.3264 56.4324 58.8751 55.9845 58.3169 55.9845H49.2351V46.3755L54.5478 41.0594L56.6701 43.1817C56.8734 43.385 57.1283 43.4746 57.3764 43.4746C57.8449 43.4746 58.2997 43.1473 58.3755 42.6133L59.354 35.9673C59.4436 35.3506 58.9578 34.82 58.3583 34.82C58.3101 34.82 58.2618 34.8234 58.2101 34.8303L51.5641 35.8088C50.7407 35.9259 50.4169 36.932 50.9991 37.5177L53.1214 39.64L48.0293 44.7287L38.279 39.7123L38.2205 39.6848L38.1929 39.6744C38.1722 39.6641 38.1516 39.6572 38.1274 39.6537C38.1171 39.6469 38.1068 39.6434 38.0964 39.6434L38.0379 39.6262L38.0103 39.6193C37.9827 39.6124 37.9483 39.609 37.9242 39.6021H37.7037C37.683 39.609 37.6554 39.6124 37.6279 39.6193L37.5969 39.6262L37.5417 39.6434L37.5038 39.6503C37.4832 39.6606 37.4556 39.671 37.4281 39.6813C37.4177 39.6813 37.4108 39.6882 37.4005 39.6916C37.3902 39.6985 37.3695 39.7089 37.3523 39.7123L37.3212 39.733C37.3212 39.733 37.2902 39.7502 37.273 39.7606L37.2455 39.7778C37.2248 39.795 37.2041 39.8122 37.1765 39.8295V39.8363L27.6434 47.5711V27.0026C27.6434 26.4513 27.1921 26 26.6339 26H26.6374ZM38.8303 42.2584L47.2231 46.5719L47.2162 55.9879H38.8303V42.2584ZM36.8148 42.7201L36.8079 55.9879H27.6434V50.1585L36.8113 42.7201H36.8148Z"
                                                fill="#FFFBF4"
                                            />
                                        </svg>
                                    </div>

                                    <h3 class="og-beyond-basic-keyword-card-title">
                                        Performance Tracking
                                    </h3>
                                    <p class="og-beyond-basic-keyword-card-description">
                                        Monitor rankings and refine strategy
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =========================== Beyond Basic Keyword Lists Section End Here ==============================================-->

        <!-- ==========================Boost Your Online Visibility with Expert SEO Services start here====================================== -->
        @include('frontend.partials.boost')
        <!-- ==========================Boost Your Online Visibility with Expert SEO Services end here====================================== -->
    </main>
@endsection
