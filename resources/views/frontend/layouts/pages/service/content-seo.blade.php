<section class="og-keyword-section" id="og-content-seo">
    <div class="container og-keyword-section-container">
        <div class="og-keyword-section-left">
            <h2 class="og-keyword-section-title">
                {{ $contentSeo->title ?? 'Content SEO' }}
            </h2>

            <p class="og-keyword-section-description">
                {{ $contentSeo->content ?? 'We create content strategies that don’t just sound good—they rank. While many SEO providers chase competitive keywords without considering rankability, we focus on smart opportunities your site can realistically win.' }}
            </p>

            <p class="og-keyword-section-description">
                {{ $contentSeo->sub_content ?? 'The result? A content strategy that supports your broader SEO goals, brings in real traffic, and respects your marketing budget.' }}
            </p>

            <a href="{{ route('contact') }}"
                class="og-keyword-section-btn">{{ $contentSeo->btn_text ?? 'Get started' }}</a>
        </div>
        <div class="og-keyword-section-right">
            <img src="{{ asset($contentSeo->image ?? 'frontend/assets/images/Content-Notebooks-Writing.jpeg') }}"
                alt="{{ $contentSeo->image_alt ?? 'Content SEO Image' }}" class="og-keyword-section-right-image" />
        </div>
    </div>
</section>
