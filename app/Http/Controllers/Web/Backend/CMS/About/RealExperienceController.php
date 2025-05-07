<?php

namespace App\Http\Controllers\Web\Backend\CMS\About;

use Exception;
use App\Models\CMS;
use App\Enums\Page;
use App\Enums\Section;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class RealExperienceController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $data = CMS::where('page', Page::ABOUT->value)->where('section', Section::ABOUT_REAL_EXPERIENCE->value)->first();
        return view('backend.layout.cms.about.real_experience.index', compact('data'));
    }
    public function updateContent(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'nullable',
            'content' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        try {
            $validatedData['page'] = Page::ABOUT->value;
            $validatedData['section'] = Section::ABOUT_REAL_EXPERIENCE->value;

            // Fetch the current CMS record (if it exists)
            $cms = CMS::where('page', $validatedData['page'])
                ->where('section', $validatedData['section'])
                ->first();

            // Handle the image
            $file = 'image';
            if ($request->hasFile($file)) {
                // Delete the old file from the filesystem if it exists
                if ($cms && isset($cms->{$file}) && file_exists(public_path($cms->{$file}))) {
                    unlink(public_path($cms->{$file}));
                }
                // Upload the new file
                $randomString = Str::random(10);
                $validatedData[$file] = Helper::fileUpload($request->file($file), 'cms/about', $randomString);
            }

            // Create or update the CMS record
            CMS::updateOrCreate(
                ['page' => $validatedData['page'], 'section' => $validatedData['section']],
                $validatedData
            );
            return redirect()->route('admin.cms.about-us.real-experience.index')->with('t-success', 'CMS updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', $e->getMessage());
        }
    }
}
