<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class EmailController extends Controller
{
    public $admin_email;


    public function create()
    {
        return view('emailForm');
    }

    public function thank()
    {
        return view('thankyou');
    }

    public function Pay(){
        return view('payment');
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
            'phone_number' => $request->phone_number,
            'state' => $request->state,
            'profession_occupation' => $request->profession_occupation,
            'ref_num' => 'SE004'
        ];





        $admin_email = ['safe.envirouk@gmail.com'];

        Mail::send('email-template', [$data], function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['ref_num']);
        });

        Mail::send('admin-email-template', [], function ($message) use ($admin_email) {
            $message->to($admin_email)->subject('Account Created');
        });

        
    }
}
