<?php

namespace App\Http\Controllers\web\Backend\CMS;

use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use App\Enums\Page;
use App\Enums\Section;

class WhatTruestController extends Controller
{
    public function index()
    {
        $why_trust = CMS::where('page', Page::HOME->value)->where('section', Section::WHY_TRUST->value)->first();
        return view('backend.layout.cms.home.why_trust.index', compact('why_trust'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'btn_text' => 'required|string'
        ]);
        try {
            $validatedData['page'] = Page::HOME->value;
            $validatedData['section'] = Section::WHY_TRUST->value;
            // Create CMS entry
            CMS::create($validatedData);

            return redirect()->back()->with('t-success', 'CMS content created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('t-error', 'Error: ' . $e->getMessage());
        }
    }

    public function update(Request $request, CMS $cms)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'btn_text' => 'required|string',
        ]);

        $validated['page'] = Page::HOME->value;
        $validated['section'] = Section::WHY_TRUST->value;

        $cms->update($validated);

        return redirect()->back()->with('t-success', 'Content updated successfully.');
    }
}
