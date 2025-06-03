@php
    use App\Enums\Page;
    use App\Enums\Section;
    use App\Models\CMS;
    $service_banner = CMS::where('page', Page::SERVICE->value)
        ->where('section', Section::SERVICE_BANNER->value)
        ->first();
@endphp
<section class="og-service-page-2">
    <div class="container">
        <h1 class="text-white text-center og-service-title-1">
            {{ $service_banner->title ?? 'Search Engine Optimization <br/>Services' }}

        </h1>
        <p class="og-service-description-1">
            {{ $service_banner->content ?? 'At SEO ESP, we offer expert consulting across the full SEO
            spectrum—tailored to your business goals, your audience, and your
            <br />industry. Here’s how we help you grow smarter.' }}
        </p>
    </div>
</section>
