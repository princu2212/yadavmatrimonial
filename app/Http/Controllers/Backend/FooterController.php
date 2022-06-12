<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function create()
    {
        $footer = Footer::find(1);
        return view('backend.footer.view', compact('footer'));
    } // end method

    public function update(Request $request, $id)
    {
        $footer = Footer::find($id);
        $footer->address = $request->address;
        $footer->phone = $request->phone;
        $footer->email = $request->email;
        $footer->whatsapp = $request->whatsapp;
        $footer->facebook = $request->facebook;
        $footer->twitter = $request->twitter;
        $footer->instagram = $request->instagram;
        $footer->save();

        $notification = array(
            'message' => 'Footer Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method
}
