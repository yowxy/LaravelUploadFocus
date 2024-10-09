<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        return view ('pages.register');
    }


    public function  signUp(SignUpRequest $request){
        $validated = $request->$validated();
        $validated['password'] = bcrypt($validated['password']);
        $validated['picture'] = config('app.avatar_generator_ur').$validated['username'];

        $create = User::create($validated);

          if($create) {
            Auth::login($create);
            return redirect()->route('home');
          }

          return abort(500);
    }
}
