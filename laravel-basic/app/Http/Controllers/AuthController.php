<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth.login'); // Ensure the view exists at resources/views/auth/login.blade.php
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect('posts');
        }else{
            return redirect('login')->with('error_message','Failed To Login please check email or password');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

    public function register_form(){
        return view('auth.register');
    }

    public function register (Request $request){
        $request->validate([
            'name' =>  'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:255|confirmed',
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect ('login');

    }

}
