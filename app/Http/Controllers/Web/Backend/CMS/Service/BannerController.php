<?php

namespace App\Http\Controllers\Web\Backend\CMS\Service;

use App\Enums\Page;
use App\Enums\Section;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BannerController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $banner = CMS::where('page', Page::SERVICE->value)->where('section', Section::SERVICE_BANNER->value)->first();
        return view('backend.layout.cms.service.banner.index', compact('banner'));
    }
    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'nullable',
            'content' => 'nullable',
            'background' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        try {
            $validatedData['page'] = Page::SERVICE->value;
            $validatedData['section'] = Section::SERVICE_BANNER->value;

            // Fetch the current CMS record (if it exists)
            $cms = CMS::where('page', $validatedData['page'])
                ->where('section', $validatedData['section'])
                ->first();


            // Handle the image

            if ($request->hasFile('background')) {
                // Delete the old file from the filesystem if it exists
                if ($cms && isset($cms->background) && file_exists(public_path($cms->background))) {
                    unlink(public_path($cms->background));
                }
                // Upload the new file
                $randomString = Str::random(10);
                $validatedData['background'] = Helper::fileUpload($request->file('background'), 'cms/service', $randomString);
            }
            // Create or update the CMS record
            CMS::updateOrCreate(
                ['page' => $validatedData['page'], 'section' => $validatedData['section']],
                $validatedData
            );
            return redirect()->route('admin.cms.service.banner.index')->with('t-success', 'CMS updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', $e->getMessage());
        }
    }
}
