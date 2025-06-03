<?php

namespace App\Http\Controllers\Web\Backend;

use Exception;
use Carbon\Carbon;
use App\Models\User;
use App\Helpers\Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SystemSetting;
use App\Models\UserMembership;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use App\Mail\MembershipExpirationNotification;

class SystemSettingController extends Controller
{

    public function index(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $setting = SystemSetting::latest('id')->first();
        return view('backend.layout.system_setting.index', compact('setting'));
    }

    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'favicon' => 'nullable|mimes:jpeg,png,jpg,gif,svg,ico',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'office_address' => 'nullable|string|max:255',
            'copyright' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $setting = SystemSetting::firstOrNew();

            // Upload files if present
            foreach (['favicon', 'logo'] as $fileType) {
                if ($request->hasFile($fileType)) {
                    $randomString = Str::random(10);
                    $setting->$fileType = Helper::fileUpload($request->file($fileType), 'system_setting', $randomString);
                }
            }
            // Update other fields
            $setting->phone = $request->phone;
            $setting->email = $request->email;
            $setting->office_address = $request->office_address;
            $setting->copyright = $request->copyright;
            $setting->youtube = $request->youtube;
            $setting->facebook = $request->facebook;
            $setting->instagram = $request->instagram;

            $setting->save();
            return back()->with('t-success', 'Updated successfully');
        } catch (Exception $e) {
            return back()->with('t-error', 'Failed to update');
        }
    }


    public function mailSetting(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('backend.layout.system_setting.mailsetting');
    }

    public function mailSettingUpdate(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'mail_mailer' => 'required|string',
            'mail_host' => 'required|string',
            'mail_port' => 'required|string',
            'mail_username' => 'nullable|string',
            'mail_password' => 'nullable|string',
            'mail_encryption' => 'nullable|string',
            'mail_from_address' => 'required|string',
        ]);
        try {
            $envContent = File::get(base_path('.env'));
            $lineBreak = "\n";
            $envContent = preg_replace([
                '/MAIL_MAILER=(.*)\s/',
                '/MAIL_HOST=(.*)\s/',
                '/MAIL_PORT=(.*)\s/',
                '/MAIL_USERNAME=(.*)\s/',
                '/MAIL_PASSWORD=(.*)\s/',
                '/MAIL_ENCRYPTION=(.*)\s/',
                '/MAIL_FROM_ADDRESS=(.*)\s/',
            ], [
                'MAIL_MAILER=' . $request->mail_mailer . $lineBreak,
                'MAIL_HOST=' . $request->mail_host . $lineBreak,
                'MAIL_PORT=' . $request->mail_port . $lineBreak,
                'MAIL_USERNAME=' . $request->mail_username . $lineBreak,
                'MAIL_PASSWORD=' . $request->mail_password . $lineBreak,
                'MAIL_ENCRYPTION=' . $request->mail_encryption . $lineBreak,
                'MAIL_FROM_ADDRESS=' . '"' . $request->mail_from_address . '"' . $lineBreak,
            ], $envContent);

            if ($envContent !== null) {
                File::put(base_path('.env'), $envContent);
            }
            return back()->with('t-success', 'Updated successfully');
        } catch (Exception $e) {
            return back()->with('t-error', 'Failed to update');
        }
    }

    public function profileIndex(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {

        return view('backend.layout.system_setting.profile_setting');
    }

    public function profileUpdate(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('t-success', 'Profile Update Successfully!');
    }


    public function passwordUpdate(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => [
                'required',
                'confirmed'
            ],
        ]);

        // Update the user's password
        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('t-success', 'Password updated successfully!');
    }



}
