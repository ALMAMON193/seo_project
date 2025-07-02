<!-- ===========================Keyword Research Section Start Here==============================================-->
<section class="og-keyword-section" id="og-keyword-research">
    <div class="container og-keyword-section-container">
        <div class="og-keyword-section-left">
            <h2 class="og-keyword-section-title">
                {{ $keywordSeo->title ?? ' Keyword Research & Tracking' }}

            </h2>

            <h3 class="og-keyword-section-subtitle">
                {{ $keywordSeo->sub_title ?? ' We go far beyond basic keyword lists.' }}

            </h3>

            <p class="og-beyond-basic-keyword-description">

                {!! $keywordSeo->content ??
                    '  Our process begins with in-depth research to identify keyword
                                                                                                                                                                                                                                                                                                                                                                                                variations that have lower competition but high strategic
                                                                                                                                                                                                                                                                                                                                                                                                value. By targeting these, we help your site build topical
                                                                                                                                                                                                                                                                                                                                                                                                relevance, making it easier to rank for broader, more
                                                                                                                                                                                                                                                                                                                                                                                                competitive terms over time.
                
                                                                                                                                                                                                                                                                                                                                                                                                <br>
                                                                                                                                                                                                                                                                                                                                                                                                <br>
                                                                                                                                                                                                                                                                                                                                                                                                We also analyze the on-page features that appear in Google
                                                                                                                                                                                                                                                                                                                                                                                                search results for each keyword, such as featured snippets,
                                                                                                                                                                                                                                                                                                                                                                                                shopping carousels, or People Also Ask boxes. If Google’s own
                                                                                                                                                                                                                                                                                                                                                                                                content dominates a keyword, we flag it. That way, you invest
                                                                                                                                                                                                                                                                                                                                                                                                your efforts in terms where your content can compete and win.
                                                                                                                                                                                                                                                                                                                                                                                                <br>
                                                                                                                                                                                                                                                                                                                                                                                                <br>
                                                                                                                                                                                                                                                                                                                                                                                                Then we track performance continuously, refining your keyword
                                                                                                                                                                                                                                                                                                                                                                                                strategy based on ranking shifts, user behavior, and
                                                                                                                                                                                                                                                                                                                                                                                                real-world results—not just assumptions.' !!}

            </p>

            <div class="og-beyond-basic-keyword-card-container">
                @if ($keywordSeoItem->isEmpty())
                    <div class="og-beyond-basic-keyword-card">
                        <div class="og-beyond-basic-keyword-card-icon">
                            <img src="{{ asset('frontend\assets\images\svg\keyword-research-icon1.svg') }}"
                                alt="">
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
                            <img src="{{ asset('frontend\assets\images\svg\keyword-research-icon2.svg') }}"
                                alt="">
                        </div>

                        <h3 class="og-beyond-basic-keyword-card-title">
                            Performance Tracking
                        </h3>
                        <p class="og-beyond-basic-keyword-card-description">
                            Monitor rankings and refine strategy
                        </p>
                    </div>
                    <div class="og-beyond-basic-keyword-card">
                        <div class="og-beyond-basic-keyword-card-icon">
                            <img src="{{ asset('frontend\assets\images\svg\keyword-research-icon3.svg') }}"
                                alt="">
                        </div>

                        <h3 class="og-beyond-basic-keyword-card-title">
                            Performance Tracking
                        </h3>
                        <p class="og-beyond-basic-keyword-card-description">
                            Monitor rankings and refine strategy
                        </p>
                    </div>
                @else
                    @foreach ($keywordSeoItem as $item)
                        <div class="og-beyond-basic-keyword-card">
                            <div class="og-beyond-basic-keyword-card-icon">
                                <img src="{{ asset($item->image ?? 'frontend\assets\images\svg\keyword-research-icon1.svg') }}"
                                    alt="{{ $item->image_alt ?? 'Keyword Variations' }}">
                            </div>

                            <h3 class="og-beyond-basic-keyword-card-title">
                                {{ $item->title ?? 'Performance Tracking' }}
                            </h3>
                            <p class="og-beyond-basic-keyword-card-description">
                                {{ $item->sub_title ?? 'Monitor rankings and refine strategy' }}

                            </p>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
        <div class="og-keyword-section-right">
            <img src="{{ asset('frontend/assets/images/homepage-concept-with-search-bar.png') }}" alt=""
                class="og-keyword-section-right-image" />
        </div>
    </div>
</section>
<!-- ===========================Keyword Research Section End Here==============================================-->
