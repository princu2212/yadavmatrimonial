<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        $contact = Contact::all();
        return view('backend.contact.message', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        $notification = array(
            'message' => 'Your Message has been sent',
            'alert-type' => 'success'
        );

        return redirect()->route('index')->with($notification);
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('backend.contact.show', compact('contact'));
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        $notification = array(
            'message' => 'Message Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
