<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

       

        Mail::send('guest.email', ['data' => $data], function($message) use ($data) {
            $message->to('pphbesari@gmail.com') // Ganti dengan email penerima
                    ->subject($data['subject']);
            $message->from($data['email'], $data['name']);
        });


        return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
    }
}
