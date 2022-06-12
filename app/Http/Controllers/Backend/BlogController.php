<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Image;

class BlogController extends Controller
{
    public function create()
    {
        return view('backend.blog.add');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/blog/' . $blog->image));
            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(800, 600)->save('upload/blog/' . $name_gen);
            $blog['image'] = $name_gen;
        }

        $blog->save();

        $notification = array(
            'message' => 'Blog Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('blog.show')->with($notification);
    }

    public function show()
    {
        $blog = Blog::all();
        return view('backend.blog.view', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('backend.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/blog/' . $blog->image));
            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(800, 600)->save('upload/blog/' . $name_gen);
            $blog['image'] = $name_gen;
        }

        $blog->save();

        $notification = array(
            'message' => 'Blog Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('blog.show')->with($notification);
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        @unlink(public_path('upload/blog/' . $blog->image));
        $blog->delete();

        $notification = array(
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('blog.show')->with($notification);
    }
}
