<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Student;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Session;
// use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    public $redirectTo = RouteServiceProvider::HOME;


    // protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    // public function __construct()
    // {
    //     $this->middleware('guest');
    //     $this->middleware('guest:user');
    //     $this->middleware('guest:student');
    // }

    public function showAdminRegisterForm()
    {
        // Redirect::setIntendedUrl(url()->previous());
        return view('auth.register');
    }

    public function showtudentRegisterForm()
    {
        // Redirect::setIntendedUrl(url()->previous());
        return view('auth.stdregister');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(Request $request)
    {
        return Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'phone' => ['required', 'string', 'max:255'],
            // 'address' => ['required', 'string', 'max:255'],
            // 'profession_occupation' => ['required', 'string', 'max:255'],
            // 'date' => ['required', 'string', 'max:255'],
            // 'state' => ['required', 'string', 'max:255'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    public function createAdmin(Request $request)
    {
        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            // 'phone' => $data['phone'], 
            // 'address' => $data['address'],
            // 'profession_occupation' => $data['profession_occupation'], 
            // 'date' => $data['date'],
            // 'state' => $data['state']      

        ]);
        // return redirect()->intended(RouteServiceProvider::HOME);

        // Mail::send('email-template', $data, function ($message) use ($data) {
        //     $message->to($data['email'])
        //         ->subject($data['subject']);
        // });
    }



    


    public function createStudent(Request $request){
        $request->validate([
            'name' => 'required|max:191',
            'email' => 'required|max:191',
            'phone' => 'required|max:191',
            'password' => 'required|max:191',
            'address' => 'required|max:191',
            'profession_occupation' => 'required|max:191',
            'date' => 'required',
            'state' => 'required|max:191',
        ]);

        return Student::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => Hash::make($request['password']),
            'address' => $request['address'],
            'profession_occupation' => $request['profession_occupation'],
            'date' => $request['date'],
            'state' => $request['state'],           
        ]);
        // return redirect()->intended(RouteServiceProvider::HOME);
    }



   
}
