<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function servicePage()
    {
        return view('frontend.layouts.pages.service');
    }
    public function aboutPage()
    {
        return view('frontend.layouts.pages.about');
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
