@php
    $setting = \App\Models\SystemSetting::first();
@endphp
@extends('frontend.app')

@section('content')
    <main class="og-bg-primary-color">

        <!-- =============================== Banner Section Start Here ======================================-->
        <section class="container og-banner-content">
            <div class="og-banner-left-content">
                <h2 class="og-banner-title">
                    SEO ESP: Bringing Clarity to Search Strategy
                </h2>
                <p class="og-banner-description">
                    <span class="og-highlighted">SEO (Search Engine Optimization)</span> is often treated like a
                    buzzword—misunderstood, misused, and sometimes overpromised. But at its core, SEO is both art and
                    science: the process of attracting unpaid (organic) visits to your website through strategic content and
                    technical optimization.
                    Unlike SEM (Search Engine Marketing), which relies on paid ads, SEO is an investment that builds
                    long-term value. It compounds over time, earning visibility, trust, and traffic that doesn’t disappear
                    the second your ad budget runs out.At SEO ESP, we are a results-first bespoke consultancy focused on
                    cutting through the noise. We don’t sell fluff. We don’t push bloated packages. We offer practical and
                    effective strategies tailored to your business, and we ensure you understand what we’re doing and why it
                    matters.
                    <br>
                    <br>
                    At SEO ESP, we are a results-first bespoke consultancy focused on cutting through the noise. We don’t
                    sell fluff. We don’t push bloated packages. We offer practical and effective strategies tailored to your
                    business, and we ensure you understand what we’re doing and why it matters.
                </p>
            </div>
            <div class="og-banner-right-content">
                <img src="{{ asset('frontend/assets/images/banner.png') }}" class="og-banner-right-content-image" />
            </div>
        </section>
        <!-- ================================Banner Section End Here ========================================-->

        <!-- ================================Service Section start Here ========================================-->
        <section class="container og-service">
            <h2 class="og-service-title text-center">SEO <span class="text-white">Consulting Services</span></h2>

            <div class="og-service-content-parent">
                <div class="og-service-content-grid">
                    <div class="relative">
                        <img src="frontend/assets/images/svg/service_card_bg.svg" alt="service" />
                        <div class="absolute og-service-card-content">
                            <div class="flex items-center og-service-top-content">
                                <img src="frontend/assets/images/svg/service_icon_1.svg" alt="" />
                                <h3>Content SEO</h3>
                            </div>
                            <p class="og-service-description">
                                Smart content strategies that drive real traffic.
                            </p>
                            <a href="{{ route('service') }}" class="og-service-redirect-icon">
                                <img src="frontend/assets/images/svg/service_redirect_icon.svg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="frontend/assets/images/svg/service_card_bg.svg" alt="service" />
                        <div class="absolute og-service-card-content">
                            <div class="flex items-center og-service-top-content">
                                <img src="frontend/assets/images/svg/service_icon_2.svg" alt="" />
                                <h3>Local SEO</h3>
                            </div>
                            <p class="og-service-description">
                                Outrank local competitors with local SEO optimization tailored to your market.
                            </p>
                            <a href="{{ route('service') }}" class="og-service-redirect-icon">
                                <img src="frontend/assets/images/svg/service_redirect_icon.svg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="frontend/assets/images/svg/service_card_bg.svg" alt="service" />
                        <div class="absolute og-service-card-content">
                            <div class="flex items-center og-service-top-content">
                                <img src="frontend/assets/images/svg/service_icon_3.svg" alt="" />
                                <h3>Keyword Research and Tracking</h3>
                            </div>
                            <p class="og-service-description">
                                Smarter keyword strategies built on deep research and continuous performance tracking.
                            </p>
                            <a href="{{ route('service') }}" class="og-service-redirect-icon">
                                <img src="frontend/assets/images/svg/service_redirect_icon.svg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="frontend/assets/images/svg/service_card_bg.svg" alt="service" />
                        <div class="absolute og-service-card-content">
                            <div class="flex items-center og-service-top-content">
                                <img src="frontend/assets/images/svg/service_icon_4.svg" alt="" />
                                <h3>Technical SEO</h3>
                            </div>
                            <p class="og-service-description">
                                Ensure your site’s technical foundation drives sustainable SEO growth.
                            </p>
                            <a href="{{ route('service') }}" class="og-service-redirect-icon">
                                <img src="frontend/assets/images/svg/service_redirect_icon.svg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="frontend/assets/images/svg/service_card_bg.svg" alt="service" />
                        <div class="absolute og-service-card-content">
                            <div class="flex items-center og-service-top-content">
                                <img src="frontend/assets/images/svg/service_icon_5.svg" alt="" />
                                <h3>Enterprise SEO</h3>
                            </div>
                            <p class="og-service-description">
                                Scalable strategies for complex websites that drive results, align teams, and deliver
                                lasting impact.
                            </p>
                            <a href="{{ route('service') }}" class="og-service-redirect-icon">
                                <img src="frontend/assets/images/svg/service_redirect_icon.svg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="frontend/assets/images/svg/service_card_bg.svg" alt="service" />
                        <div class="absolute og-service-card-content">
                            <div class="flex items-center og-service-top-content">
                                <img src="frontend/assets/images/svg/service_icon_6.svg" alt="" />
                                <h3>On-Page Optimization</h3>
                            </div>
                            <p class="og-service-description">
                                Craft content and strategy that work together to maximize rankings and conversions.
                            </p>
                            <a href="{{ route('service') }}" class="og-service-redirect-icon">
                                <img src="frontend/assets/images/svg/service_redirect_icon.svg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="frontend/assets/images/svg/service_card_bg.svg" alt="service" />
                        <div class="absolute og-service-card-content">
                            <div class="flex items-center og-service-top-content">
                                <img src="frontend/assets/images/svg/service_icon_7.svg" alt="" />
                                <h3>Data Analysis</h3>
                            </div>
                            <p class="og-service-description">
                                Actionable insights from meaningful metrics so you can make confident, data-driven
                                decisions.
                            </p>
                            <a href="{{ route('service') }}" class="og-service-redirect-icon">
                                <img src="frontend/assets/images/svg/service_redirect_icon.svg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="frontend/assets/images/svg/service_card_bg.svg" alt="service" />
                        <div class="absolute og-service-card-content">
                            <div class="flex items-center og-service-top-content">
                                <img src="frontend/assets/images/svg/service_icon_8.svg" alt="" />
                                <h3>eCommerce</h3>
                            </div>
                            <p class="og-service-description">
                                Drive visibility and sales with eCommerce SEO built for product discovery, shopper intent,
                                and platform performance.
                            </p>
                            <a href="{{ route('service') }}" class="og-service-redirect-icon">
                                <img src="frontend/assets/images/svg/service_redirect_icon.svg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================================Service Section End Here ========================================-->

        <!-- ================================Who We Are Section Start Here ========================================-->
        <section class="container og-who-we-are">
            <div class="og-who-we-are-left">
                <div>
                    <img src="frontend/assets/images/who-we-are.png" alt="" class="og-who-we-are-image">
                    <p class="og-who-we-are-img-title image-subtitle">Cassie Vignieri, President and Founder.</p>
                </div>
                <p class="og-who-we-are-img-title">We believe in partnership over quick wins. You won’t just get SEO
                    tactics—you’ll get a long-term ally who’s
                    invested in your growth.</p>
            </div>
            <div class="og-who-we-are-right">
                <h2 class="og-who-we-are-title">
                    Who <span class="text-white">We Are</span>
                </h2>
                <p class="og-who-we-are-description">
                    At <span class="og-highlighted">SEO ESP</span>, we don’t just optimize pages—we build momentum. Our
                    expert SEO
                    and digital marketing
                    services are
                    designed to drive targeted traffic, increase conversions, and create a roadmap for sustained success.
                    Whether
                    you’re a scaling startup or an established brand rethinking your strategy, we help you turn challenges
                    into
                    opportunities for growth.
                </p>
                <div class="og-who-we-are-list">
                    <h3 class="og-who-we-are-list-title">Your Trusted Partner for Innovative Strategies and Real Results
                    </h3>
                    <div class="flex items-start gap-10">
                        <img src="frontend/assets/images/svg/check.svg" alt="">
                        <p class="og-who-we-are-list-description">
                            <span class="og-highlighted">Tailored, Not Templated:</span> Every recommendation is grounded
                            in data,
                            industry research, and your unique
                            business goals—not just a one-size-fits-all checklist.
                        </p>
                    </div>
                    <div class="flex items-start gap-10">
                        <img src="frontend/assets/images/svg/check.svg" alt="">
                        <p class="og-who-we-are-list-description">
                            <span class="og-highlighted">Clarity Meets Expertise:</span> We break down the complex, filter
                            out the
                            noise, and focus on what drives measurable results.
                        </p>
                    </div>
                    <div class="flex items-start gap-10">
                        <img src="frontend/assets/images/svg/check.svg" alt="">
                        <p class="og-who-we-are-list-description">
                            <span class="og-highlighted">Future-Proof Strategies:</span> Search is constantly changing. We
                            stay ahead
                            of the curve so your business remains competitive—today, tomorrow, and beyond.
                        </p>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="og-btn-2">
                    Learn more
                    <img src="frontend/assets/images/svg/button_icon.svg" alt="">
                </a>
            </div>
        </section>
        <!-- ================================Who We Are Section End Here ========================================-->



        <!-- ================================Why Trust Us With Your SEO? Section Start Here ========================================-->
        <section class="og-trust-section">
            <div class="container flex items-center flex-col og-trust-content">
                <h2 class="og-trust-title">Why Trust Us With Your SEO?</h2>
                <p class="text-center og-trust-description">
                    Many SEO consultants would have you believe this work lives in a black box, reserved for those with
                    mysterious
                    insider knowledge. Most people don’t know much about search or algorithms beyond typing keywords into
                    Google
                    and reading the results. So when traffic drops, they’re often left in the dark, relying on someone who
                    does
                    understand.
                    <br>
                    <br>
                    We’ve all heard the story of the mechanic who tells you ten things are wrong with your car when all you
                    came
                    in for was an oil change. Because of the knowledge gap, it’s easy to get overcharged for services you
                    may not
                    need. SEO can be the same.
                </p>
            </div>
        </section>
        <!-- ================================Why Trust Us With Your SEO? Section End Here ========================================-->



        <!-- ================================What Makes SEO ESP Different? Section Start Here ========================================-->
        <section class="container og-seo-esp-section">
            <h2 class="og-common-title text-center">What Makes<span class="text-white"> SEO ESP Different?</span></h2>
            <p class="og-common-description  text-center og-mt-24">Just like in any industry, some unethical players use
                your
                lack of
                expertise to sell unnecessary fixes—things
                like vanity metrics, over-reliance on automated audits, or empty promises about ranking #1 overnight.
                <br>
                <br>
                We’re not about that.
            </p>
            <div class="flex og-seo-esp">
                <div class="og-seo-esp-list">
                    <h3 class="og-seo-esp-list-title">At SEO ESP, we:</h3>
                    <div class="og-seo-esp-list-sub">
                        <div class="flex items-start gap-10">
                            <img src="frontend/assets/images/svg/check.svg" alt="">
                            <p class="og-seo-esp-list-description">
                                Focus on strategies that actually move the needle.
                            </p>
                        </div>
                        <div class="flex items-start gap-10">
                            <img src="frontend/assets/images/svg/check.svg" alt="">
                            <p class="og-seo-esp-list-description">
                                Use trusted auditing tools, but never treat them as gospel.
                            </p>
                        </div>
                        <div class="flex items-start gap-10">
                            <img src="frontend/assets/images/svg/check.svg" alt="">
                            <p class="og-seo-esp-list-description">
                                Tailor everything to your site’s structure, your competition, your content, and your goals.
                            </p>
                        </div>
                        <div class="flex items-start gap-10">
                            <img src="frontend/assets/images/svg/check.svg" alt="">
                            <p class="og-seo-esp-list-description">
                                Avoid activities that waste time and money, like spammy link building or chasing keywords
                                that no one
                                converts on.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="frontend/assets/images/SEO-ESP.png" alt="" class="og-seo-esp-image">
                </div>
            </div>
            <div class="og-seo-esp-bottom-card-section flex">
                <div class="og-seo-esp-bottom-card">
                    <h3 class="og-seo-esp-bottom-card-title">Let’s Talk Real Results</h3>
                    <p class="og-common-description">
                        There are “SEO best practices” you can find with a quick Google search, but many don’t yield actual
                        results.
                        The truth? What works depends on your industry, your location, your website’s code, your audience,
                        and your
                        competitive landscape.
                        <br>
                        <br>
                        That’s why we don’t do templates. We do strategy.
                    </p>
                </div>
                <div class="og-seo-esp-bottom-card">
                    <h3 class="og-seo-esp-bottom-card-title">Curious if your SEO is working?</h3>
                    <p class="og-common-description">
                        Let us take a look. <a href="{{ route('contact') }}" class="og-highlighted">Contact us today for
                            a
                            free audit and start
                            improving the
                            metrics that actually
                            matter to your business.</a>
                    </p>
                </div>
            </div>
        </section>
        <!-- ================================What Makes SEO ESP Different? Section End Here ========================================-->



        <!-- ================================Get In Touch Section End Here ========================================-->
        <section id="get_in_touch" class="container og-get-in-touch">
            <h1 class="og-common-title text-center">Get <span class="text-white">In Touch</span></h1>
            <div class="og-get-in-touch-content">
                <div class="og-get-in-touch-info">
                    <div>
                        <h4 class="og-get-in-touch-info-title">
                            Contact SEO ESP
                        </h4>
                    </div>
                    <ul class="og-get-in-touch-main-info">
                        <li class="og-get-in-touch-main-info-li">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                fill="none">
                                <path
                                    d="M20.0002 11.3935H22.0002C22.0002 6.26353 18.1272 2.39453 12.9902 2.39453V4.39453C17.0522 4.39453 20.0002 7.33753 20.0002 11.3935Z"
                                    fill="white" />
                                <path
                                    d="M13.0003 8.39477C15.1033 8.39477 16.0003 9.29177 16.0003 11.3948H18.0003C18.0003 8.16977 16.2253 6.39477 13.0003 6.39477V8.39477ZM16.4223 13.8378C16.2301 13.6631 15.9776 13.57 15.7181 13.578C15.4585 13.586 15.2123 13.6946 15.0313 13.8808L12.6383 16.3418C12.0623 16.2318 10.9043 15.8708 9.71228 14.6818C8.52028 13.4888 8.15928 12.3278 8.05228 11.7558L10.5113 9.36177C10.6977 9.1809 10.8064 8.93459 10.8144 8.67498C10.8225 8.41536 10.7292 8.16281 10.5543 7.97077L6.85928 3.90777C6.68432 3.71513 6.44116 3.59827 6.18143 3.58203C5.92171 3.56579 5.66588 3.65143 5.46828 3.82077L3.29828 5.68177C3.12539 5.85529 3.0222 6.08622 3.00828 6.33077C2.99328 6.58077 2.70728 12.5028 7.29928 17.0968C11.3053 21.1018 16.3233 21.3948 17.7053 21.3948C17.9073 21.3948 18.0313 21.3888 18.0643 21.3868C18.3088 21.3731 18.5396 21.2694 18.7123 21.0958L20.5723 18.9248C20.7417 18.7273 20.8276 18.4715 20.8115 18.2118C20.7954 17.9521 20.6788 17.7089 20.4863 17.5338L16.4223 13.8378Z"
                                    fill="white" />
                            </svg>
                            {{ $setting->phone ?? '+1 123 456 789' }}
                        </li>
                        <li class="og-get-in-touch-main-info-li">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                fill="none">
                                <path
                                    d="M22 4.39453H2V20.3945H22V4.39453ZM20 8.39453L12 13.3945L4 8.39453V6.39453L12 11.3945L20 6.39453V8.39453Z"
                                    fill="white" />
                            </svg>
                            {{ $setting->email ?? 'info@yourdomain.com' }}
                        </li>
                        <li class="og-get-in-touch-main-info-li">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                fill="none">
                                <path
                                    d="M12 1.89453C9.81276 1.89711 7.71584 2.76713 6.16923 4.31375C4.62261 5.86037 3.75259 7.95729 3.75001 10.1445C3.74739 11.9319 4.33124 13.6709 5.41201 15.0945C5.41201 15.0945 5.63701 15.3908 5.67376 15.4335L12 22.8945L18.3293 15.4298C18.3623 15.39 18.588 15.0945 18.588 15.0945L18.5888 15.0923C19.669 13.6692 20.2526 11.9311 20.25 10.1445C20.2474 7.95729 19.3774 5.86037 17.8308 4.31375C16.2842 2.76713 14.1873 1.89711 12 1.89453ZM12 13.1445C11.4067 13.1445 10.8266 12.9686 10.3333 12.6389C9.83995 12.3093 9.45543 11.8408 9.22837 11.2926C9.00131 10.7444 8.9419 10.1412 9.05765 9.55926C9.17341 8.97732 9.45913 8.44277 9.87869 8.02321C10.2982 7.60365 10.8328 7.31793 11.4147 7.20218C11.9967 7.08642 12.5999 7.14583 13.1481 7.37289C13.6962 7.59996 14.1648 7.98447 14.4944 8.47782C14.8241 8.97117 15 9.55119 15 10.1445C14.999 10.9399 14.6826 11.7024 14.1202 12.2648C13.5578 12.8271 12.7954 13.1435 12 13.1445Z"
                                    fill="white" />
                            </svg>
                            {{ $setting->office_address ?? '123 Main Street, Anytown, USA' }}
                        </li>
                    </ul>
                    <div class="og-get-in-touch-main-info-social-link">
                        <a href="{{ $setting->youtube ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" class="injected-svg"
                                data-src="https://cdn.hugeicons.com/icons/youtube-02-solid.svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" role="img" color="#808080">
                                <path
                                    d="M10 15V9L16 12L10 15ZM20 4H4C2.89 4 2 4.89 2 6V18C2 19.11 2.89 20 4 20H20C21.11 20 22 19.11 22 18V6C22 4.89 21.11 4 20 4Z"
                                    fill="#808080"></path>
                            </svg>
                        </a>
                        <a href="{{ $setting->facebook ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" class="injected-svg"
                                data-src="https://cdn.hugeicons.com/icons/facebook-02-solid-rounded.svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" role="img" color="#808080">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.55869 10.2083C4.47617 10.2083 4.25024 10.4146 4.25024 11.4028V13.1944C4.25024 14.1826 4.47617 14.3889 5.55869 14.3889H8.17557V21.5556C8.17557 22.5438 8.40149 22.75 9.48401 22.75H12.1009C13.1834 22.75 13.4093 22.5438 13.4093 21.5556V14.3889H16.3477C17.1687 14.3889 17.3803 14.2432 17.6058 13.5226L18.1666 11.7309C18.5529 10.4965 18.3148 10.2083 16.9085 10.2083H13.4093V7.22222C13.4093 6.56255 13.9951 6.02778 14.7178 6.02778H18.4418C19.5243 6.02778 19.7502 5.82154 19.7502 4.83333V2.44444C19.7502 1.45624 19.5243 1.25 18.4418 1.25H14.7178C11.1046 1.25 8.17557 3.92386 8.17557 7.22222V10.2083H5.55869Z"
                                    fill="#808080"></path>
                            </svg>
                        </a>
                        <a href="{{ $setting->instagram ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" class="injected-svg"
                                data-src="https://cdn.hugeicons.com/icons/instagram-stroke-rounded.svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" role="img" color="#808080">
                                <path
                                    d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                                    stroke="#808080" stroke-width="1.5" stroke-linejoin="round"></path>
                                <path
                                    d="M16.5 12C16.5 14.4853 14.4853 16.5 12 16.5C9.51472 16.5 7.5 14.4853 7.5 12C7.5 9.51472 9.51472 7.5 12 7.5C14.4853 7.5 16.5 9.51472 16.5 12Z"
                                    stroke="#808080" stroke-width="1.5"></path>
                                <path d="M17.5078 6.5L17.4988 6.5" stroke="#808080" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="og-get-in-touch-form-container" id="og-lets-work-section">
                    <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="og-get-in-touch-form">
                            <div class="og-get-in-touch-input">
                                <label class="og-get-in-touch-input-label">First Name</label>
                                <input class="og-get-in-touch-input-field" type="text" name="fname" required>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 302 2" fill="none">
                                    <path d="M0 0.726562H301.361" stroke="#8D8D8D" />
                                </svg>
                            </div>
                            <div class="og-get-in-touch-input">
                                <label class="og-get-in-touch-input-label">Last Name</label>
                                <input class="og-get-in-touch-input-field" type="text" name="lname" required>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 302 2" fill="none">
                                    <path d="M0 0.726562H301.361" stroke="#8D8D8D" />
                                </svg>
                            </div>
                            <div class="og-get-in-touch-input">
                                <label class="og-get-in-touch-input-label">Email</label>
                                <input class="og-get-in-touch-input-field" type="email" name="email" required>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 302 2" fill="none">
                                    <path d="M0 0.726562H301.361" stroke="#8D8D8D" />
                                </svg>
                            </div>
                            <div class="og-get-in-touch-input">
                                <label class="og-get-in-touch-input-label">Phone Number</label>
                                <input class="og-get-in-touch-input-field" type="tel" name="phone" required>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 302 2" fill="none">
                                    <path d="M0 0.726562H301.361" stroke="#8D8D8D" />
                                </svg>
                            </div>
                            <div class="og-get-in-touch-input">
                                <label class="og-get-in-touch-input-label">Company Name</label>
                                <input class="og-get-in-touch-input-field" type="text" name="company_name" required>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 302 2" fill="none">
                                    <path d="M0 0.726562H301.361" stroke="#8D8D8D" />
                                </svg>
                            </div>
                        </div>

                        <div class="home-contact-form-select-container">
                            <label class="og-get-in-touch-input-label">Select Topic</label>
                            <select class="home-contact-form-select" name="subject" required>
                                <option value="" selected disabled>Select Topic</option>
                                <option value="content_seo">Content SEO</option>
                                <option value="local_seo">Local SEO</option>
                                <option value="keyword_research_and_tracking">Keyword Research and Tracking</option>
                                <option value="technical_seo">Technical SEO</option>
                                <option value="enterprise_seo">Enterprise SEO</option>
                                <option value="on_page_optimization">On-Page Optimization</option>
                                <option value="data_analysis">Data Analysis</option>
                                <option value="ecommerce">eCommerce</option>
                                <option value="other">Other</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 302 2" fill="none">
                                <path d="M0 0.726562H301.361" stroke="#8D8D8D" />
                            </svg>
                        </div>

                        <div class="og-get-in-touch-input">
                            <label class="og-get-in-touch-input-label">Message</label>
                            <textarea class="og-get-in-touch-input-field" name="message" placeholder="Write your message.." required
                                cols="30" rows="2"></textarea>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 302 2" fill="none">
                                <path d="M0 0.726562H301.361" stroke="#8D8D8D" />
                            </svg>
                        </div>

                        <!-- Status Messages -->
                        <div id="formSuccess" class="og-form-message og-form-success" style="display: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span>Thank you for your message! We will contact you soon.</span>
                        </div>

                        <div id="formError" class="og-form-message og-form-error" style="display: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                            <span>There was an error submitting your form. Please try again.</span>
                        </div>

                        <div class="send-message">
                            <button type="submit" class="og-btn" id="submitButton">Send Message</button>
                        </div>
                    </form>
                </div>

                <style>
                    /* Form Messages Styling */
                    .og-form-message {
                        padding: 15px;
                        margin: 20px 0;
                        border-radius: 4px;
                        display: flex;
                        align-items: center;
                        gap: 12px;
                    }

                    .og-form-success {
                        background-color: #f0fff4;
                        color: #2d7d46;
                        border: 1px solid #9ae6b4;
                    }

                    .og-form-error {
                        background-color: #fff5f5;
                        color: #c53030;
                        border: 1px solid #fc8181;
                    }

                    .og-form-message svg {
                        flex-shrink: 0;
                    }

                    /* Button loading state */
                    .og-btn.loading {
                        position: relative;
                        pointer-events: none;
                    }

                    .og-btn.loading:after {
                        content: "";
                        position: absolute;
                        width: 16px;
                        height: 16px;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        margin: auto;
                        border: 3px solid transparent;
                        border-top-color: #ffffff;
                        border-radius: 50%;
                        animation: button-loading-spinner 1s ease infinite;
                    }

                    @keyframes button-loading-spinner {
                        from {
                            transform: rotate(0turn);
                        }

                        to {
                            transform: rotate(1turn);
                        }
                    }
                </style>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const form = document.getElementById('contactForm');
                        const submitButton = document.getElementById('submitButton');
                        const successMessage = document.getElementById('formSuccess');
                        const errorMessage = document.getElementById('formError');

                        form.addEventListener('submit', function(e) {
                            e.preventDefault();

                            // Reset messages
                            successMessage.style.display = 'none';
                            errorMessage.style.display = 'none';

                            // Set button to loading state
                            submitButton.classList.add('loading');
                            submitButton.disabled = true;
                            submitButton.innerHTML = '<span style="visibility: hidden;">Send Message</span>';

                            // Prepare form data
                            const formData = new FormData(form);

                            // Submit via fetch API
                            fetch(form.action, {
                                    method: 'POST',
                                    body: formData,
                                    headers: {
                                        'Accept': 'application/json',
                                        'X-Requested-With': 'XMLHttpRequest'
                                    }
                                })
                                .then(response => {
                                    if (!response.ok) {
                                        throw new Error('Network response was not ok');
                                    }
                                    return response.json();
                                })
                                .then(data => {
                                    if (data.success) {
                                        // Show success message
                                        successMessage.style.display = 'flex';
                                        form.reset();
                                    } else {
                                        // Show error message
                                        errorMessage.style.display = 'flex';
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    errorMessage.style.display = 'flex';
                                })
                                .finally(() => {
                                    // Reset button state
                                    submitButton.classList.remove('loading');
                                    submitButton.disabled = false;
                                    submitButton.innerHTML = 'Send Message';
                                });
                        });
                    });
                </script>
            </div>
        </section>
        <!-- ================================Get In Touch Section End Here ========================================-->
    </main>
@endsection
