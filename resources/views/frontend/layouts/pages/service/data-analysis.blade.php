<section class="og-keyword-section" id="og-data-analysis">
    <!-- ===========================Keyword Research Section Start Here==============================================-->
    <div class="og-keyword-section">
        <div class="container og-keyword-section-container">
            <div class="og-keyword-section-left">
                <h2 class="og-keyword-section-title">{{ $dataAnalysis->title ?? 'Data Analysis' }}</h2>
                <p class="og-keyword-section-description">
                    {!! $dataAnalysis->content ??
                        ' We turn data into direction. Using tools like GA4, Search Console,
                                                                                and custom dashboards, we uncover what’s working, what’s not, and
                                                                                what needs attention.
                    
                                                                            <br>
                                                                            <br>
                                                                                Our approach is grounded in outcome-focused strategy—we prioritize
                                                                                the metrics that actually drive growth, not just surface-level
                                                                                stats that look good in a report. Whether it’s organic
                                                                                conversions, engagement by landing page, or keyword-driven
                                                                                revenue, we identify the KPIs that tie directly to your business
                                                                                goals.' !!}
                </p>
                <a href="{{ route('contact') }}"
                    class="og-keyword-section-btn">{{ $dataAnalysis->btn_text ?? 'Get started' }}</a>
            </div>
            <div class="og-keyword-section-right">
                <img src="{{ asset($dataAnalysis->image ?? 'frontend/assets/images/data_driven_marketing.png') }}"
                    alt="{{ $dataAnalysis->image_alt ?? 'Data Analysis' }}" class="og-keyword-section-right-image" />
            </div>
        </div>
    </div>
    <!-- ===========================Keyword Research Section End Here==============================================-->
</section>
<!-- =========================== Our approach Section Start Here ==============================================-->
<!-- =========================== Our approach Section End Here ==============================================-->
