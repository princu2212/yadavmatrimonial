<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Matrimonial;
use App\Models\Slide;
use PDF;

class IndexController extends Controller
{
    public function index()
    {
        $slide = Slide::latest()->get();
        $matrimonial = Matrimonial::latest()->limit(8)->get();
        $blog = Blog::latest()->limit(3)->get();
        $aboutUs = About::find(1);
        return view('frontend.index', compact('slide', 'matrimonial', 'blog', 'aboutUs'));
    }

    public function allMatrimonial()
    {
        $matrimonial = Matrimonial::latest()->paginate(8);
        return view('frontend.matrimonial.matrimonial', compact('matrimonial'));
    }

    public function addMatrimonial()
    {
        return view('frontend.matrimonial.matrimonial_add');
    }

    public function matrimonialDetails($language, $id = null)
    {

        $matrimonial = Matrimonial::find($id);
        return view('frontend.matrimonial.matrimonial_details', compact('matrimonial'));
    }

    public function allBlog()
    {
        $blog = Blog::latest()->paginate(3);
        return view('frontend.blog.blog', compact('blog'));
    }

    public function blogDetails($language, $id = null)
    {
        $blog = Blog::find($id);
        $shareBlog = \Share::page(
            'https://princeyadav.net/yadavfamily/member/',
            'Your share text comes here',
        )
            ->whatsapp()
            ->facebook()
            ->twitter()
            ->telegram();
        $posts = Blog::get();
        return view('frontend.blog.blog_details', compact('blog', 'shareBlog', 'posts'));
    }

    public function aboutUs()
    {
        return view('frontend.about.about');
    }

    public function contactUs()
    {
        return view('frontend.contact.contact');
    }

    public function download($language, $id = null)
    {
        $matrimonial = Matrimonial::find($id);
        $pdf = PDF::loadView('frontend.matrimonial.download', compact('matrimonial'))->setPaper('a4')->setOptions([
            'tempDir' => public_path(),
            'chroot' => public_path(),
        ]);
        return $pdf->download('matrimonial.pdf');
    }
}
