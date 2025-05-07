<?php

namespace App\Http\Controllers\Web\Backend\CMS\Home;

use Exception;
use App\Enums\Page;
use App\Models\CMS;
use App\Enums\Section;
use App\Helpers\Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class WhoWeAreController extends Controller
{
    public function index(Request $request): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
    {
        $who_we_are = CMS::where('page', Page::HOME->value)->where('section', Section::HOME_WHO_WE_ARE_ITEM->value)->first();
        return view('backend.layout.cms.home.who_we_are.index', compact('who_we_are'));
    }
    public function create(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('backend.layout.cms.home.who_we_are.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'sub_title' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'highlight1' => 'required|string',
            'content1' => 'required|string',
            'highlight2' => 'required|string',
            'content2' => 'required|string',
            'highlight3' => 'required|string',
            'content3' => 'required|string',
            'btn_text' => 'required|string'
        ]);

        try {
            $validatedData['page'] = Page::HOME->value;
            $validatedData['section'] = Section::HOME_WHO_WE_ARE_ITEM->value;

            // Build sub_content array
            $subContent = [
                ['highlight' => $validatedData['highlight1'], 'content' => $validatedData['content1']],
                ['highlight' => $validatedData['highlight2'], 'content' => $validatedData['content2']],
                ['highlight' => $validatedData['highlight3'], 'content' => $validatedData['content3']],
            ];
            $validatedData['sub_content'] = json_encode($subContent);

            // Remove the flat fields
            unset(
                $validatedData['highlight1'],
                $validatedData['content1'],
                $validatedData['highlight2'],
                $validatedData['content2'],
                $validatedData['highlight3'],
                $validatedData['content3']
            );

            // Handle image upload
            if ($request->hasFile('image')) {
                $randomString = Str::random(10);
                $validatedData['image'] = Helper::fileUpload($request->file('image'), 'cms/home', $randomString);
            }

            // Create CMS entry
            CMS::create($validatedData);

            return redirect()->back()->with('t-success', 'CMS content created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('t-error', 'Error: ' . $e->getMessage());
        }
    }


    public function update(Request $request, CMS $cms)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'sub_title' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'highlight1' => 'required|string',
            'content1' => 'required|string',
            'highlight2' => 'required|string',
            'content2' => 'required|string',
            'highlight3' => 'required|string',
            'content3' => 'required|string',
            'btn_text' => 'required|string'
        ]);

        try {
            $validatedData['page'] = Page::HOME->value;
            $validatedData['section'] = Section::HOME_WHO_WE_ARE_ITEM->value;

            $subContent = [
                ['highlight' => $validatedData['highlight1'], 'content' => $validatedData['content1']],
                ['highlight' => $validatedData['highlight2'], 'content' => $validatedData['content2']],
                ['highlight' => $validatedData['highlight3'], 'content' => $validatedData['content3']],
            ];
            $validatedData['sub_content'] = json_encode($subContent);

            unset(
                $validatedData['highlight1'],
                $validatedData['content1'],
                $validatedData['highlight2'],
                $validatedData['content2'],
                $validatedData['highlight3'],
                $validatedData['content3']
            );

            // Image update logic
            if ($request->hasFile('image')) {
                // Optionally delete old image here if needed
                $randomString = Str::random(10);
                $validatedData['image'] = Helper::fileUpload($request->file('image'), 'cms/home', $randomString);
            }

            $cms->update($validatedData);

            return redirect()->back()->with('t-success', 'CMS content updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('t-error', 'Error: ' . $e->getMessage());
        }
    }



    //edit why chose up content point
    public function edit($id): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $data = CMS::where('page', Page::HOME->value)
            ->where('section', Section::HOME_WHO_WE_ARE_ITEM->value)
            ->find($id);
        return view('backend.layout.cms.home.who_we_are.edit', compact('data'));
    }
    //update why chose up content point
   
    //delete why chose up content point
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        try {
            // Fetch the current CMS record (if it exists)
            $cms = CMS::where('id', $id)->first();
            if (!$cms) {
                return response()->json(['success' => false, 'message' => 'Data could not be retrieved']);
            }
            // Delete the CMS record from the database
            $cms->delete();
            return response()->json(['success' => true, 'message' => 'Deleted successfully.']);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function updateContent(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'content' => 'nullable',
            'sub_content' => 'nullable',
            'btn_text' => 'nullable'
        ]);

        try {
            $validatedData['page'] = Page::HOME->value;
            $validatedData['section'] = Section::HOME_WHO_WE_ARE->value;

            // Fetch the current CMS record (if it exists)
            $cms = CMS::where('page', $validatedData['page'])
                ->where('section', $validatedData['section'])
                ->first();
            // Handle the background image
            $file = 'image';
            if ($request->hasFile($file)) {
                // Delete the old file from the filesystem if it exists
                if ($cms && isset($cms->{$file}) && file_exists(public_path($cms->{$file}))) {
                    unlink(public_path($cms->{$file}));
                }
                // Upload the new file
                $randomString = Str::random(10);
                $validatedData[$file] = Helper::fileUpload($request->file($file), 'cms/home', $randomString);
            }
            // Create or update the CMS record
            CMS::updateOrCreate(
                ['page' => $validatedData['page'], 'section' => $validatedData['section']],
                $validatedData
            );
            return redirect()->route('admin.cms.home.who-we-are.index')->with('t-success', 'CMS updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', $e->getMessage());
        }
    }
}
