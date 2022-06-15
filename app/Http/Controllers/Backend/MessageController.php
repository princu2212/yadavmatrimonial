<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create()
    {
        $message = Message::all();
        return view('backend.message.message', compact('message'));
    }

    public function store(Request $request)
    {
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        $notification = array(
            'message' => 'Your Message has been sent',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function show($id)
    {
        $message = Message::find($id);
        return view('backend.message.show', compact('message'));
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();

        $notification = array(
            'message' => 'Message Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
