<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function index(){
        return view('pages.auth.login');
    }
    public function custom_login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credential = $request->only('email', 'password');
        if(Auth::attempt($credential)){
            return redirect()->intended('dashboard')->withSuccess('Login');
        }
        return redirect()->route('login')->with('error', 'Login details are not valid');
    }
    public function registration(){
        return view('pages.auth.register');
    }
    public function custom_registration(Request $request){
        $request->validate([
            'name'=>'required|unique:users',
            'email'=>'required|email|unique:users',
            'password'=> 'required|min:6'
        ]);
        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type'=> 'Admin'
        ]);

        return redirect()->route('login')->with('success', 'Registration completed, admin will approve your account later!');
    }
    public function forgot_password()
    {
       return view('pages.auth.forgot_password');
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('pages.dashboard');
        }
        return redirect()->route('login');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
