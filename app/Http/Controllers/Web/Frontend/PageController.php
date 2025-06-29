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
        //about Banner
        $aboutBanner = CMS::where('page', 'AboutPageBanner')
            ->where('section', 'AboutSectionBanner')
            ->first();
        //seo ESP
        $aboutSeoEsp = CMS::where('page', 'AboutPageSeoEsp')
            ->where('section', 'AboutSectionSeoEsp')
            ->first();
        //real experience
        $realExperience = CMS::where('page', 'AboutPageRealExperience')
            ->where('section', 'AboutSectionRealExperience')
            ->first();
        //about us scales across
        $salesAcross = CMS::where('page', 'AboutPageSalesAcross')
            ->where('section', 'AboutSectionSalesAcross')
            ->first();
        //my work
        $AboutMyWork = CMS::where('page', 'AboutPageMyWork')
            ->where('section', 'AboutSectionMyWork')
            ->first();
        //my work items
        $AboutMyWorkItems = CMS::where('page', 'AboutPageMyWorkItem')
            ->where('section', 'AboutSectionMyWorkItem')
            ->get();
        //About SEO ESP ApartResource
        $aboutSeoEspApart = CMS::where('page', 'AboutPageEspApart')
            ->where('section', 'AboutSectionEspApart')
            ->get();

        return view('frontend.layouts.pages.about', compact('aboutBanner', 'aboutSeoEsp', 'realExperience', 'salesAcross', 'AboutMyWork', 'AboutMyWorkItems', 'aboutSeoEspApart'));
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
