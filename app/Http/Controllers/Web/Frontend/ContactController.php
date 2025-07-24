<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactPageStore(Request $request)
    {
        $validated = $request->validate([
            'fname'         => 'required|string|max:255',
            'lname'         => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'phone'         => 'nullable|string|max:20',
            'company_name'  => 'required|string|max:255',
            'subject'       => 'required|string',
            'message'       => 'required|string',
        ]);

        try {
            Contact::create($validated);

            if ($request->ajax()) {
                return response()->json(['success' => true, 'message' => 'Thank you for your message!']);
            }

            return back()->with('success', 'Thank you for your message!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json(['success' => false, 'message' => 'There was an error. Please try again.']);
            }

            return back()->with('error', 'There was an error. Please try again.');
        }
    }
}
