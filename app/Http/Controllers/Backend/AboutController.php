<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Image;

class AboutController extends Controller
{
    public function create()
    {
        $aboutUs = About::find(1);
        return view('backend.about.view', compact('aboutUs'));
    } // end method

    public function update(Request $request, $id)
    {
        $aboutUs = About::find($id);
        $aboutUs->about = $request->description;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/about/' . $aboutUs->image));
            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(400, 200)->save('upload/about/' . $name_gen);
            $aboutUs['image'] = $name_gen;
        }

        $aboutUs->save();

        $notification = array(
            'message' => 'About Us Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
