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
            'company_name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->fname = $request->fname;
        $contact->lname = $request->lname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->company_name = $request->company_name;
        $contact->message = $request->message;
        $contact->save();

        return response()->json(['success' => true]);
    }
    public function ContactContactPage(Request $request)
    {

        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'company_name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->fname = $request->fname;
        $contact->lname = $request->lname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->company_name = $request->company_name;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

       return response()->json(['success' => true]);
    }

}
