<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;
use Image;

class SlideController extends Controller
{
    public function create()
    {
        return view('backend.slide.add_slide');
    }

    public function store(Request $request)
    {
        $slide = new Slide();
        $slide->title = $request->title;
        $slide->description = $request->description;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/slide/' . $slide->image));
            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(1920, 1271)->save('upload/slide/' . $name_gen);
            $slide['image'] = $name_gen;
        }

        $slide->save();

        $notification = array(
            'message' => 'Slide Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('slide.show')->with($notification);
    }

    public function show()
    {
        $slide = Slide::all();
        return view('backend.slide.view_slide', compact('slide'));
    }

    public function edit($id)
    {
        $slide = Slide::find($id);
        return view('backend.slide.edit_slide', compact('slide'));
    }

    public function update(Request $request, $id)
    {
        $slide = Slide::find($id);
        $slide->title = $request->title;
        $slide->description = $request->description;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/slide/' . $slide->image));
            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(1920, 1271)->save('upload/slide/' . $name_gen);
            $slide['image'] = $name_gen;
        }

        $slide->save();

        $notification = array(
            'message' => 'Slide Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('slide.show')->with($notification);
    }

    public function destroy($id)
    {
        $slide = Slide::find($id);
        @unlink(public_path('upload/slide/' . $slide->image));
        $slide->delete();

        $notification = array(
            'message' => 'Slide Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('slide.show')->with($notification);
    }
}
