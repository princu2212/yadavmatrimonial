<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matrimonial;
use Image;

class MatrimonialController extends Controller
{

    public function create()
    {
        return view('backend.matrimonial.add');
    }

    public function store(Request $request)
    {
        $matrimonial = new Matrimonial();
        $matrimonial->name = $request->name;
        $matrimonial->age = $request->age;
        $matrimonial->gender = $request->gender;
        $matrimonial->height = $request->height;
        $matrimonial->education = $request->education;
        $matrimonial->marital_status = $request->marital_status;
        $matrimonial->work = $request->work;
        $matrimonial->phone = $request->phone;
        $matrimonial->gotra = $request->gotra;
        $matrimonial->date_of_birth = $request->dob;
        $matrimonial->rashi = $request->rashi;
        $matrimonial->village = $request->village;
        $matrimonial->district = $request->district;
        $matrimonial->address = $request->address;
        $matrimonial->fathers_name = $request->fathers_name;
        $matrimonial->mothers_name = $request->mothers_name;
        $matrimonial->total_members = $request->total_member;
        $matrimonial->no_of_brothers = $request->no_of_brothers;
        $matrimonial->no_of_sisters = $request->no_of_sisters;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/matrimonial/' . $matrimonial->image));
            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(463, 465)->save('upload/matrimonial/' . $name_gen);
            $matrimonial['image'] = $name_gen;
        }

        $matrimonial->save();

        $notification = array(
            'message' => 'Matrimonial Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function show()
    {
        $matrimonial = Matrimonial::latest()->get();
        return view('backend.matrimonial.view', compact('matrimonial'));
    }

    public function edit($id)
    {
        $matrimonial = Matrimonial::find($id);
        return view('backend.matrimonial.edit', compact('matrimonial'));
    }

    public function update(Request $request, $id)
    {
        $matrimonial = Matrimonial::find($id);
        $matrimonial->name = $request->name;
        $matrimonial->age = $request->age;
        $matrimonial->gender = $request->gender;
        $matrimonial->height = $request->height;
        $matrimonial->education = $request->education;
        $matrimonial->marital_status = $request->marital_status;
        $matrimonial->work = $request->work;
        $matrimonial->phone = $request->phone;
        $matrimonial->gotra = $request->gotra;
        $matrimonial->date_of_birth = $request->dob;
        $matrimonial->rashi = $request->rashi;
        $matrimonial->village = $request->village;
        $matrimonial->district = $request->district;
        $matrimonial->address = $request->address;
        $matrimonial->fathers_name = $request->fathers_name;
        $matrimonial->mothers_name = $request->mothers_name;
        $matrimonial->total_members = $request->total_member;
        $matrimonial->no_of_brothers = $request->no_of_brothers;
        $matrimonial->no_of_sisters = $request->no_of_sisters;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/matrimonial/' . $matrimonial->image));
            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(463, 465)->save('upload/matrimonial/' . $name_gen);
            $matrimonial['image'] = $name_gen;
        }

        $matrimonial->save();

        $notification = array(
            'message' => 'Matrimonial Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('matrimonial.show')->with($notification);
    }

    public function destroy($id)
    {
        $matrimonial = Matrimonial::find($id);
        @unlink(public_path('upload/matrimonial/' . $matrimonial->image));
        $matrimonial->delete();

        $notification = array(
            'message' => 'Matrimonial Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('matrimonial.show')->with($notification);
    }
}
