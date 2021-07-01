<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use validator;



class EmailController extends Controller
{
    public $admin_email;

    public function create()
    {
        return view('emailForm');
    }

    public function sendEmail(Request $request)
    {

//        $request->validate([
//            'email' => 'required|email',
//            'subject' => 'required|subject',
//            'name' => 'required|name',
//            // 'phone_number' => 'required',
//            // 'state' => 'required',
//            // 'profession_occupation' => 'required',
//
//        ]);

        $data = [
            'email' => $request->email,
            'subject' => $request->subject,
            'name' => $request->name,
            // 'phone_number' => $request->phone_number,
            // 'state' => $request->state,
            // 'profession_occupation' => $request->profession_occupation

        ];


        
        $admin_email = ['safe.envirouk@gmail.com'];

        Mail::send('email-template', $data, function ($message) use ($data) {
            $message->to($data['email'])->subject('Account Created');            
        });

        Mail::send('email-template', [], function ($message) use ($admin_email) {
            $message->to($admin_email)->subject('Account Created');
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}
