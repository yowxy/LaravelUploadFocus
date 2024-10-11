<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        Log::info('login');
        $credentials = $request->validated();
        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        }

        return redirect()->back()->withInput()
            ->withErrors(['credentials' => 'the email or password is wrong' ]);
    }

    public function logout(Request $request) {
        Log::info('logout');
        Auth::logout();
        return redirect()->route('home');
    }

}
