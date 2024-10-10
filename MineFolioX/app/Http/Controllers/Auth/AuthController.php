<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('pages.login');
    }

    public function login (LoginRequest $request){
        $credentials = $request->validated();
        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        }

        return redirect()->back()->withInput()
            ->withErrors(['credentials' => 'the email or password is wrong' ]);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }

}
