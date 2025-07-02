<!-- ===========================Keyword Research Section Start Here==============================================-->
<section class="og-keyword-section" id="on-page-optimization">
    <div class="container og-keyword-section-container">
        <div class="og-keyword-section-left">
            <h2 class="og-keyword-section-title">
                {{ $onePageOptimize->title ?? 'On-Page Optimization' }}
            </h2>
            <p class="og-keyword-section-description">
                {{ $onePageOptimize->content ??
                    ' Fine-Tuning Every Element of Your Web Pages—From Meta Tags,
                                Headings, and Content Structure to Internal Linking and User
                                Experience to Improve Search Engine Visibility, Enhance Relevance,
                                and Drive Targeted Organic Traffic' }}

            </p>
            <a href="{{ route('contact') }}"
                class="og-keyword-section-btn">{{ $onePageOptimize->btn_text ?? 'Get started' }}</a>
        </div>
        <div class="og-keyword-section-right">
            <img src="{{ asset($onePageOptimize->image ?? 'frontend/assets/images/Screen-On-Page-Optimization.jpeg') }}"
                alt="{{ $onePageOptimize->image_alt ?? 'On-Page Optimization' }}"
                class="og-keyword-section-right-image" />
        </div>
    </div>
</section>
<!-- ===========================Keyword Research Section End Here==============================================-->
