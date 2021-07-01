<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;

class AddRegisterController extends Controller
{
    public function createUserForm(Request $request){
        return view('');
    }

    public function userForm(Request $request){
        $this->validate($request, [

            'name' => 'required',
           'email' => 'required | email',
           'Profession_Occupation' => 'required',
           'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
           'state' => 'required',               
       ]);

       Enquiry::create($request->all());
       return back()->with('success', 'Your form has been submitted.');
    }
    
}
