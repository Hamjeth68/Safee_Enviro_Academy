<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
 use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Session;


class LoginController extends Controller
{
 
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    //     $this->middleware('guest:students')->except('logout');
    //     $this->middleware('guest:users')->except('logout');
    // }

    public function index()
    {
        return view('auth.login');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withErrors('Login details are not valid');
    }


    public function dashboard()
    {
        if (Auth::check()) {
            return view('admin');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut()
    {
        Session::Flash();
        Auth::logout();
        return Redirect('login');
    }



    public function LoginForm()
    {
        return view('auth.stdlogin', ['url' => 'student']);
    }

    public function StudentLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        // if (Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

        //     return redirect()->intended('/home2');
        // }
        return back()->withInput($request->only('email', 'remember'));
    }
}
