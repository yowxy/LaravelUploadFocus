<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

}
