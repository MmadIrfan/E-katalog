<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $data = [
            'name' => $request->name,
        ];

        Mail::send('emails.inquiry', $data, function($message) use ($request) {
            $message->to('marketing@aestheticrattan.com')
                    ->subject('New Inquiry about Rattan Furniture')
                    ->from($request->email, $request->name);
        });

        return back()->with('success', 'Thank you for your inquiry. We will get back to you soon!');
    }
}