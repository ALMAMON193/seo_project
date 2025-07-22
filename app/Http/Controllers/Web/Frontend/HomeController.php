<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\CMS;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $homeBanner = CMS::where('page', 'HomePageBanner')
            ->where('section', 'HomeSectionBanner')
            ->first();
        $whoWeAre = CMS::where('page', 'HomePageAboutUS')
            ->where('section', 'HomeSectionAboutUS')->first();
        //about item
        $whoWeAreItems = CMS::where('page', 'HomePageAboutUSItem')
            ->where('section', 'HomeSectionAboutUSItem')->get();
        //why trust
        $homeWhyTrust = CMS::where('page', 'HomePageWhyTrustWithUs')
            ->where('section', 'HomeSectionWhyTrustWithUs')->first();


        return view('frontend.layouts.index', compact('homeBanner', 'whoWeAre', 'whoWeAreItems', 'homeWhyTrust'));
    }
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $subscribe = new Subscribe();
        $subscribe->email = $request->email;
        $subscribe->save();

        return redirect()->back()->with('t-success', 'Thank you for subscribing!');
    }
}
