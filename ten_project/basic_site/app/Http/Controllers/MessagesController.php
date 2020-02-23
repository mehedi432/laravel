<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);

        // Create new messages
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        // Save Message
        $message->save();

        // Redirect user
        return redirect('/')->with('status', "Message sent");
    }

    public function show()
    {
        # code...
        $messages = Message::all();
        return view('messages')->with('messages', $messages);
    }
}
