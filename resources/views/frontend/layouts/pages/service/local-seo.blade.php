<!-- =========================== Our approach Section Start Here ==============================================-->
<section class="og-beyond-basic-keyword-section">
    <div class="container">
        <div class="our-approach-container">
            <div class="og-beyond-basic-keyword-left">
                <img src="{{ asset($localSeo->image ?? 'frontend/assets/images/delivery-tracking-system.png') }}"
                    alt="{{ $localSeo->image_alt ?? 'Local SEO' }}" class="og-beyond-basic-keyword-left-image" />
            </div>
            <div class="og-beyond-basic-keyword-right">
                <div>
                    <div class="og-beyond-content-seo-section-heading">
                        {{ $localSeo->title ?? 'Local SEO' }}
                    </div>

                    <div class="og-beyond-basic-keyword-description">
                        {{ $localSeo->content ?? 'Winning in local search isn’t about being flawless—it’s about being more optimized than the businesses around you.' }}
                    </div>

                    <div class="og-beyond-basic-keyword-description">
                        {{ $localSeo->sub_content ?? 'We start with competitive analysis in your specific geographic area to identify what’s working for others—and where they’re falling short. Then we tailor a strategy to outperform them on local rankings, maps, and discovery.' }}
                    </div>

                    <div class="local-seo-our-approach-list-container">
                        @foreach ($localSeoItem as $item)
                            <div class="our-approach-list-item">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 18 18" fill="none">
                                        <circle cx="9" cy="9" r="9" fill="#C4C0B8" />
                                    </svg>
                                </div>
                                <div class="our-approach-list-item-text">
                                    {{ $item->title }}
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <a href="{{ route('contact') }}"
                        class="og-keyword-section-btn">{{ $localSeo->btn_text ?? 'Get started' }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========================== Our approach Section End Here ==============================================-->
