<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        return view('frontend.layouts.index');
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
