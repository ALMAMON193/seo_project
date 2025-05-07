<?php

namespace App\Http\Controllers\web\Backend\CMS\Home;

use App\Enums\Page;
use App\Enums\Section;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WhatMakeController extends Controller
{
    public function index()
    {
        $what_make = CMS::where('page', Page::HOME->value)
            ->where('section', Section::WHAT_MAKES->value)
            ->first();

        return view('backend.layout.cms.home.makes.index', compact('what_make'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'highlights' => 'required|array|min:1',
            'highlights.*' => 'nullable|string',
            'sub_contents' => 'required|array|min:1',
            'sub_contents.*' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $subContent = [];
        foreach ($validated['highlights'] as $index => $highlight) {
            $subContent[] = [
                'highlight' => $highlight,
                'sub_content' => $validated['sub_contents'][$index] ?? '',
            ];
        }

        $data = [
            'title' => $validated['title'],
            'content' => $validated['content'],
            'sub_content' => json_encode($subContent),
            'page' => Page::HOME->value,
            'section' => Section::WHAT_MAKES->value,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = Helper::fileUpload($request->file('image'), 'cms/home', Str::random(10));
        }

        CMS::create($data);

        return back()->with('t-success', 'Saved successfully.');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'highlights' => 'required|array|min:1',
            'highlights.*' => 'nullable|string',
            'sub_contents' => 'required|array|min:1',
            'sub_contents.*' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $cms = CMS::findOrFail($id);

        $subContent = [];
        foreach ($validated['highlights'] as $index => $highlight) {
            $subContent[] = [
                'highlight' => $highlight,
                'sub_content' => $validated['sub_contents'][$index] ?? '',
            ];
        }

        $data = [
            'title' => $validated['title'],
            'content' => $validated['content'],
            'sub_content' => json_encode($subContent),
        ];

        if ($request->hasFile('image')) {
            $data['image'] = Helper::fileUpload($request->file('image'), 'cms/home', Str::random(10));
        }

        $cms->update($data);

        return back()->with('t-success', 'Updated successfully.');
    }
}
