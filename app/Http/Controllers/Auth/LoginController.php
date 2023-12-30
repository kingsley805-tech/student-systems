<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function showLoginForm()
    {
        return view('login',['title' => 'Welcome to rapid school', 'data'=>'Ben']); // Replace 'auth.login' with the correct path to your login view
    }


    public function login(Request $request)
    {
        $credentials = $request->only('userName', 'password'); // Adjust based on your form fields

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/home'); // Redirect to a dashboard or any other page after successful login
        }

        // Authentication failed
        return redirect()->back()->withInput()->withErrors(['userName' => 'Invalid credentials']); // Redirect back with errors
    }


    public function username()
    {
        return 'userName'; // Replace 'username' with the field in your custom users table used for login
    }
}
