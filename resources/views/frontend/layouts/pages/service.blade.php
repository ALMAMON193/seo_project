@extends('frontend.app')
@section('title', 'SEO ESP | Search Engine Optimization Services')
@section('content')
    <main class="og-bg-primary-color">
        <!-- ===========================Banner Section Start Here==============================================-->
        <section class="og-service-page-2" style="background-image: url('{{ asset("frontend/assets/images/services_banner.png") }}');">
            <div class="container">
                <h1 class="text-white text-center og-service-title-1">
                    Search Engine Optimization <br>Services
                </h1>
                <p class="og-service-description-1">
                    At SEO ESP, we offer expert consulting across the full SEO spectrum—tailored to your business goals,
                    your audience, and your <br>industry. Here's how we help you grow smarter.
                </p>
            </div>
        </section>
        <!-- ===========================Banner Section end Here==============================================-->
        <!-- ===========================Local SEO start Here==============================================-->
        <section class="container flex local-seo">
            <div class="local-seo-right-side-con-1">
                <h4 class="local-seo-title">Local SEO</h4>
                <p class="local-seo-description">
                    Winning in local search isn’t about being flawless—it’s about being more optimized than the
                    businesses around you. <br>
                    We start with competitive analysis in your specific geographic area to identify what’s working for
                    others—and where they’re falling short. Then we tailor a strategy to outperform them on local
                    rankings, maps, and discovery.
                </p>
                <div>
                    <h4 class="local-seo-con-1-title og-mb-16">That includes:</h4>
                    <div class="local-seo-steps">
                        <div class="local-seo-card-1">
                            <div>
                                <img class="local-seo-card-1-img" src="frontend/assets/images/local_seo_icon_1.png" alt="1">
                            </div>
                            <p>
                                Local keyword targeting and content.
                            </p>
                        </div>
                        <div class="local-seo-card">
                            <div class="flex items-center local-seo-card-2">
                                <div>
                                    <img class="local-seo-card-1-img" src="frontend/assets/images/local_seo_icon_2.png"
                                         alt="1">
                                </div>
                                <p>
                                    Google Business Profile optimization.
                                </p>
                            </div>
                            <div class="flex items-center local-seo-card-2">
                                <div>
                                    <img class="local-seo-card-1-img" src="frontend/assets/images/local_seo_icon_3.png"
                                         alt="1">
                                </div>
                                <p>
                                    Review strategy and citation management.
                                </p>
                            </div>
                            <div class="flex items-center local-seo-card-2">
                                <div>
                                    <img class="local-seo-card-1-img" src="frontend/assets/images/local_seo_icon_4.png"
                                         alt="1">
                                </div>
                                <p>
                                    Location-specific technical fixes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="local-seo-right-side-con">
                <img class="local-seo-img" src="frontend/assets/images/banner.png" alt="">
                <p class="local-seo-img-caption">
                    We position your business to outrank the local competition, where it counts most.
                </p>
            </div>
        </section>
        <!-- ===========================Local SEO end Here==============================================-->
        <!-- ==========================Keyword Research & Tracking start here====================================== -->
        <section class="og-keyword-section">
            <div class="container">
                <h1 class="text-center og-keyword-title">Keyword Research & Tracking</h1>
                <p class="text-center og-keyword-subtitle">We go far beyond basic keyword lists.</p>
                <p class="text-center og-keyword-description">
                    Our process begins with in-depth research to identify keyword variations that have lower competition
                    but
                    high strategic value. By targeting these, we help your site build topical relevance, making it
                    easier to
                    rank for broader, more competitive terms over time.
                    <br><br>
                    We also analyze the on-page features that appear in Google search results for each keyword, such as
                    featured snippets, shopping carousels, or People Also Ask boxes. If Google’s own content dominates a
                    keyword, we flag it. That way, you invest your efforts in terms where your content can compete and
                    win.
                    <br><br>
                    Then we track performance continuously, refining your keyword strategy based on ranking shifts, user
                    behavior, and real-world results—not just assumptions.
                </p>
                <div class="og-tracking">
                    <div class="og-tracking-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120"
                             fill="none">
                            <rect width="120" height="120" rx="60" fill="#9B907F" />
                            <path
                                d="M74.2502 57.5198V48.2974C74.2502 45.9297 72.3244 44 69.9527 44H49.8782C47.5105 44 45.5808 45.9258 45.5808 48.2974V57.6382C42.5856 58.1709 40.3047 60.7912 40.3047 63.9364C40.3047 67.4643 43.1736 70.3332 46.7015 70.3332C50.2295 70.3332 53.0984 67.4643 53.0984 63.9364C53.0984 60.6886 50.6635 57.9973 47.5223 57.5948V48.3014C47.5223 47.0031 48.5799 45.9455 49.8782 45.9455H58.9467V63.2773C55.8765 63.7469 53.5206 66.4028 53.5206 69.6032C53.5206 73.1311 56.3895 76 59.9175 76C63.4454 76 66.3143 73.1311 66.3143 69.6032C66.3143 66.4067 63.9545 63.7469 60.8882 63.2773V45.9415H69.9567C71.255 45.9415 72.3126 46.9991 72.3126 48.2974V57.5237C69.2503 58.0012 66.9023 60.6531 66.9023 63.8456C66.9023 67.3735 69.7712 70.2424 73.2991 70.2424C76.8271 70.2424 79.696 67.3735 79.696 63.8456C79.696 60.6413 77.3282 57.9815 74.2541 57.5198H74.2502ZM51.1568 63.9324C51.1568 66.3909 49.1561 68.3877 46.7015 68.3877C44.247 68.3877 42.2462 66.387 42.2462 63.9324C42.2462 61.4779 44.247 59.4771 46.7015 59.4771C49.1561 59.4771 51.1568 61.4779 51.1568 63.9324ZM64.3728 69.5953C64.3728 72.0538 62.372 74.0506 59.9175 74.0506C57.4629 74.0506 55.4622 72.0498 55.4622 69.5953C55.4622 67.1407 57.4629 65.14 59.9175 65.14C62.372 65.14 64.3728 67.1407 64.3728 69.5953ZM73.2952 68.3048C70.8367 68.3048 68.8399 66.3041 68.8399 63.8496C68.8399 61.395 70.8406 59.3943 73.2952 59.3943C75.7497 59.3943 77.7505 61.395 77.7505 63.8496C77.7505 66.3041 75.7497 68.3048 73.2952 68.3048Z"
                                fill="#FFFBF4" />
                        </svg>
                        <h4 class="text-center og-tracking-title">Keyword Variations</h4>
                        <p class="text-center og-tracking-sub-title">
                            Find less
                            competitive
                            related terms
                        </p>
                    </div>
                    <div class="og-tracking-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120"
                             fill="none">
                            <rect width="120" height="120" rx="60" fill="#726352" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M80.7343 36H38.2431C34.9411 36 32.25 38.6856 32.25 41.9931V78.0069C32.25 81.3089 34.9356 84 38.2431 84H80.7343C84.0363 84 86.7274 81.3144 86.7274 78.0069V41.9931C86.7274 38.6911 84.0418 36 80.7343 36ZM38.2431 38.7076H80.7343C82.5449 38.7076 84.0198 40.1825 84.0198 41.9931V45.8179H34.9521V41.9931C34.9521 40.1825 36.427 38.7076 38.2376 38.7076H38.2431ZM80.7343 81.2979H38.2431C36.4325 81.2979 34.9576 79.823 34.9576 78.0124V48.5256H84.0253V78.0124C84.0253 79.823 82.5504 81.2979 80.7398 81.2979H80.7343Z"
                                  fill="#FFFBF4" />
                            <path
                                d="M56.1827 55.251H40.2175C39.64 55.251 39.1719 55.7191 39.1719 56.2966V56.7094C39.1719 57.2868 39.64 57.755 40.2175 57.755H56.1827C56.7601 57.755 57.2283 57.2868 57.2283 56.7094V56.2966C57.2283 55.7191 56.7601 55.251 56.1827 55.251Z"
                                fill="#FFFBF4" />
                            <path
                                d="M53.7227 62.1299H40.2175C39.64 62.1299 39.1719 62.598 39.1719 63.1755V63.5883C39.1719 64.1657 39.64 64.6339 40.2175 64.6339H53.7227C54.3002 64.6339 54.7683 64.1657 54.7683 63.5883V63.1755C54.7683 62.598 54.3002 62.1299 53.7227 62.1299Z"
                                fill="#FFFBF4" />
                            <path
                                d="M56.1827 69.0088H40.2175C39.64 69.0088 39.1719 69.4769 39.1719 70.0544V70.4672C39.1719 71.0447 39.64 71.5128 40.2175 71.5128H56.1827C56.7601 71.5128 57.2283 71.0447 57.2283 70.4672V70.0544C57.2283 69.4769 56.7601 69.0088 56.1827 69.0088Z"
                                fill="#FFFBF4" />
                            <path
                                d="M40.4449 43.9796C41.2989 43.9796 41.9913 43.2872 41.9913 42.4332C41.9913 41.5791 41.2989 40.8867 40.4449 40.8867C39.5908 40.8867 38.8984 41.5791 38.8984 42.4332C38.8984 43.2872 39.5908 43.9796 40.4449 43.9796Z"
                                fill="#FFFBF4" />
                            <path
                                d="M46.0367 43.9796C46.8907 43.9796 47.5831 43.2872 47.5831 42.4332C47.5831 41.5791 46.8907 40.8867 46.0367 40.8867C45.1826 40.8867 44.4902 41.5791 44.4902 42.4332C44.4902 43.2872 45.1826 43.9796 46.0367 43.9796Z"
                                fill="#FFFBF4" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M80.5969 62.3283L79.5348 62.0807C79.3146 61.1121 78.9294 60.1875 78.4011 59.34L78.9239 58.476C79.0615 58.2393 79.0285 57.9367 78.8358 57.7441L77.1353 56.049C77.0197 55.9335 76.8657 55.8729 76.7116 55.8729C76.607 55.8729 76.5024 55.9004 76.4034 55.9555L75.5394 56.4783C74.6973 55.95 73.7673 55.5647 72.7987 55.3446L72.551 54.2825C72.485 54.0183 72.2429 53.8257 71.9677 53.8257H69.5682C69.2931 53.8257 69.0509 54.0128 68.9849 54.2825L68.7372 55.3446C67.7687 55.5647 66.8441 55.9445 66.0021 56.4728L65.1326 55.9555C65.039 55.9004 64.9289 55.8729 64.8244 55.8729C64.6703 55.8729 64.5162 55.9335 64.4006 56.049L62.7056 57.7441C62.5075 57.9367 62.4745 58.2449 62.6176 58.476L63.1349 59.3455C62.6065 60.1875 62.2268 61.1121 62.0067 62.0862L61.0271 62.3283C60.7574 62.3944 60.5703 62.6365 60.5703 62.9117V65.3111C60.5703 65.5808 60.7574 65.8229 61.0216 65.889L62.0012 66.1366C62.2213 67.1052 62.6065 68.0298 63.1349 68.8773L62.612 69.7413C62.4745 69.9779 62.5075 70.2806 62.7001 70.4732L64.4006 72.1738C64.5162 72.2893 64.6703 72.3444 64.8244 72.3444C64.9289 72.3444 65.0335 72.3169 65.1326 72.2618L65.9966 71.739C66.8386 72.2673 67.7632 72.6526 68.7372 72.8727L68.9849 73.8523C69.0509 74.1164 69.2931 74.3091 69.5682 74.3091H71.9677C72.2429 74.3091 72.485 74.1219 72.551 73.8523L72.7987 72.8727C73.7673 72.6526 74.6918 72.2728 75.5338 71.7445L76.4034 72.2618C76.4969 72.3169 76.607 72.3444 76.7116 72.3444C76.8657 72.3444 77.0197 72.2838 77.1353 72.1683L78.8303 70.4732C79.0285 70.2751 79.0615 69.9724 78.9184 69.7413L78.4011 68.8718C78.9294 68.0298 79.3091 67.1052 79.5293 66.1366L80.5914 65.889C80.8611 65.8229 81.0482 65.5808 81.0482 65.3056V62.9062C81.0482 62.631 80.8611 62.3889 80.5914 62.3228L80.5969 62.3283ZM70.7735 69.5102C67.7962 69.5102 65.3747 67.0887 65.3747 64.1114C65.3747 61.1341 67.7962 58.7126 70.7735 58.7126C73.7508 58.7126 76.1722 61.1341 76.1722 64.1114C76.1722 67.0887 73.7508 69.5102 70.7735 69.5102Z"
                                  fill="#FFFBF4" />
                            <path
                                d="M72.2995 65.549C73.1183 64.7302 73.1183 63.4026 72.2995 62.5838C71.4806 61.7649 70.153 61.7649 69.3342 62.5838C68.5154 63.4026 68.5154 64.7302 69.3342 65.549C70.153 66.3679 71.4806 66.3679 72.2995 65.549Z"
                                fill="#FFFBF4" />
                        </svg>
                        <h4 class="text-center og-tracking-title">On-Page Features</h4>
                        <p class="text-center og-tracking-sub-title">
                            Analyze
                            SERP elements
                            for each keyword
                        </p>
                    </div>
                    <div class="og-tracking-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120"
                             fill="none">
                            <rect width="120" height="120" rx="60" fill="#878786" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M35.6702 36C34.8263 36 34.1543 36.677 34.1543 37.5039V82.4858C34.1543 83.323 34.8263 84 35.6702 84H83.5701C84.414 84 85.0965 83.323 85.0965 82.4858C85.0965 81.6486 84.414 80.9767 83.5701 80.9767H69.8383V66.5633L77.8711 58.5891L81.0801 61.7726C81.3874 62.0775 81.7729 62.2119 82.148 62.2119C82.8564 62.2119 83.5441 61.7209 83.6587 60.9199L85.1381 50.9509C85.2736 50.0258 84.5391 49.23 83.6326 49.23C83.5597 49.23 83.4868 49.2351 83.4086 49.2455L73.3598 50.7132C72.1148 50.8889 71.6251 52.3979 72.5055 53.2765L75.7144 56.4599L68.015 64.093L53.2726 56.5685L53.184 56.5271L53.1424 56.5116C53.1111 56.4961 53.0798 56.4858 53.0434 56.4806C53.0277 56.4703 53.0121 56.4651 52.9965 56.4651L52.9079 56.4393L52.8663 56.4289C52.8246 56.4186 52.7725 56.4134 52.736 56.4031H52.4026C52.3714 56.4134 52.3297 56.4186 52.288 56.4289L52.2411 56.4393L52.1578 56.4651L52.1005 56.4755C52.0692 56.491 52.0276 56.5065 51.9859 56.522C51.9703 56.522 51.9598 56.5323 51.9442 56.5375C51.9286 56.5478 51.8973 56.5633 51.8713 56.5685L51.8244 56.5995C51.8244 56.5995 51.7775 56.6253 51.7515 56.6408L51.7098 56.6667C51.6785 56.6925 51.6473 56.7183 51.6056 56.7442V56.7545L37.1914 68.3566V37.5039C37.1914 36.677 36.5089 36 35.665 36H35.6702ZM54.1061 60.3876L66.796 66.8579L66.7856 80.9819H54.1061V60.3876ZM51.0586 61.0801L51.0482 80.9819H37.1914V72.2377L51.0534 61.0801H51.0586Z"
                                  fill="#FFFBF4" />
                        </svg>
                        <h4 class="text-center og-tracking-title">Performance Tracking</h4>
                        <p class="text-center og-tracking-sub-title">
                            Monitor rankings
                            and refine
                            strategy
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========================Keyword Research & Tracking end here====================================== -->
        <!-- ==========================Boost Your Online Visibility with Expert SEO Services start here====================================== -->
        <section class="boost-section">
            <div class="container">
                <h2 class="boost-section-title">Boost Your Online Visibility with Expert SEO Services</h2>
                <p class="boost-section-sub-title">Get More Traffic, Leads & Sales with Data-Driven SEO Strategies</p>
                <button class="og-boost-section-button">
                    Get a Free SEO Audit Now
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
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
