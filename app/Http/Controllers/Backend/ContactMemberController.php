<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactMember;
use Illuminate\Http\Request;
use Image;

class ContactMemberController extends Controller
{
    public function create()
    {
        return view('backend.contact.add');
    }

    public function store(Request $request)
    {
        $contact = new ContactMember();
        $contact->name = $request->name;
        $contact->position = $request->position;
        $contact->about = $request->about;
        $contact->phone = $request->phone;
        $contact->email = $request->email;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/contact_members/' . $contact->image));
            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(400, 400)->save('upload/contact_members/' . $name_gen);
            $contact['image'] = $name_gen;
        }

        $contact->save();

        $notification = array(
            'message' => 'Member Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('contact.show')->with($notification);
    }

    public function show()
    {
        $contact = ContactMember::latest()->get();
        return view('backend.contact.view', compact('contact'));
    }

    public function edit($id)
    {
        $contact = ContactMember::find($id);
        return view('backend.contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = ContactMember::find($id);
        $contact->name = $request->name;
        $contact->position = $request->position;
        $contact->about = $request->about;
        $contact->phone = $request->phone;
        $contact->email = $request->email;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/contact_members/' . $contact->image));
            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(400, 400)->save('upload/contact_members/' . $name_gen);
            $contact['image'] = $name_gen;
        }

        $contact->save();

        $notification = array(
            'message' => 'Member Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('contact.show')->with($notification);
    }

    public function destroy($id)
    {
        $contact = ContactMember::find($id);
        @unlink(public_path('upload/contact_members/' . $contact->image));
        $contact->delete();

        $notification = array(
            'message' => 'Member Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('contact.show')->with($notification);
    }
}
