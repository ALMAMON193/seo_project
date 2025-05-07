<?php

namespace App\Http\Controllers\Web\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'subject' => 'required|in:seo_optimization,data_integration,analytics_success,general_inquiry',
            'message' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->fname = $request->fname;
        $contact->lname = $request->lname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('t-success', 'Thank you for contacting us!');
    }
    public function ContactContactPage(Request $request)
    {

        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'subject' => 'required|in:seo_optimization,data_integration,analytics_success,general_inquiry',
            'message' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->fname = $request->fname;
        $contact->lname = $request->lname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('t-success', 'Thank you for contacting us!');
    }

}
