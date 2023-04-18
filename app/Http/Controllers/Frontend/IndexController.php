<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Matrimonial;
use App\Models\Slide;
use Illuminate\Support\Facades\Storage;
// use PDF;
use \Mpdf\Mpdf as PDF;

class IndexController extends Controller
{
    public function index()
    {
        $slide = Slide::get();
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
        $shareMatrimonial = \Share::page(
            'https://yadavmatrimonial.princeyadav.in/',
            'Your share text comes here',
        )
            ->whatsapp()
            ->facebook()
            ->telegram();
        return view('frontend.matrimonial.matrimonial_details', compact('matrimonial', 'shareMatrimonial'));
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
            'https://yadavmatrimonial.princeyadav.in/',
            'Your share text comes here',
        )
            ->whatsapp()
            ->facebook()
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
        // $pdf = PDF::loadView('frontend.matrimonial.download', compact('matrimonial'))->setOptions([
        //     'tempDir' => storage_path(),
        //     'chroot' => storage_path(),
        // ]);
        // return $pdf->download($matrimonial->name.'.pdf');

        // Create the mPDF document
        $document = new PDF([
            'mode' => 'utf-8',
            'format' => 'A4',
        ]);

        $document->autoScriptToLang = true;
        $document->autoLangToFont = true;
        // Setup a filename
        $documentFileName = "$matrimonial->name.pdf";

        // Set some header informations for output
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $documentFileName . '"'
        ];

        $document->WriteHTML(view('frontend.matrimonial.download', compact('matrimonial')));
        // Save PDF on your public storage
        Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));

        // Get file back from storage with the give header informations
        return Storage::disk('public')->download($documentFileName, 'Request', $header); //
    }
}
