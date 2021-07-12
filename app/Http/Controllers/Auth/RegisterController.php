<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Student;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        Redirect::setIntendedUrl(url()->previous());
        return view('auth.register');
    }

    public function showtudentRegisterForm()
    {
        Redirect::setIntendedUrl(url()->previous());
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
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function create(Request $request)
    {
        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
       
    }


    public function createStudent(Request $request){
        // $request->validate([
        //     'name' => 'required|max:191',
        //     'email' => 'required|max:191',
        //     'phone' => 'required|max:191',
        //     'password' => 'required|max:191',
        //     'address' => 'required|max:191',
        //     'profession_occupation' => 'required|max:191',
        //     'date' => 'required',
        //     'state' => 'required|max:191',
        // ]);

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
        // if(Student::create($request)== true){
        //     return redirect()->intended(RouteServiceProvider::HOME);
        // }
    }
}
