<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Enums\Page;
use App\Models\CMS;
use App\Enums\Section;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function servicePage()
    {
        $serviceBanner  = CMS::where('page', Page::SERVICE->value)->where('section', Section::SERVICE_BANNER->value)->first();
        return view('frontend.layouts.pages.service', compact('serviceBanner'));
    }
    public function aboutPage()
    {
        $about_scales = CMS::where('page', Page::ABOUT->value)->where('section', Section::ABOUT_SCALES_ACROSS->value)->first();
        $real_experience = CMS::where('page', Page::ABOUT->value)->where('section', Section::ABOUT_REAL_EXPERIENCE->value)->first();
        $seo_esp = CMS::where('page', Page::ABOUT->value)->where('section', Section::ABOUT_SEO_ESP->value)->first();
        return view('frontend.layouts.pages.about', compact('about_scales','seo_esp', 'real_experience'));
    }
    public function localSeoPage()
    {
        return view('frontend.layouts.pages.service.local-seo');
    }
    public function contentSeoPage()
    {
        return view('frontend.layouts.pages.service.content-seo');
    }
    public function technicalSeoPage()
    {
        return view('frontend.layouts.pages.service.technical-seo');
    }
    public function onPageSeoPage()
    {
        return view('frontend.layouts.pages.service.one-page-optimize');
    }
    public function keywordResearchPage()
    {
        return view('frontend.layouts.pages.service.keyword-research');
    }
    public function ecommerceSeoPage()
    {
        return view('frontend.layouts.pages.service.e-commerce-seo');
    }
    public function dataAnalyticsPage()
    {
        return view('frontend.layouts.pages.service.data-analysis');
    }
    public function enterpriseSeoPage()
    {
        return view('frontend.layouts.pages.service.enterprise-seo');
    }
    public function contactPage()
    {
        return view('frontend.layouts.pages.contact');
    }


}
