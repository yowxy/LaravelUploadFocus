<?php

namespace App\Http\Controllers\Auth; // Ubah namespace di sini

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
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
        return view('pages.register');
    }

    public function signUp(RegisterRequest $request)
    {
        // Validate and retrieve the validated data
        $validated = $request->validated();

        // Hash the password before saving
        $validated['password'] = bcrypt($validated['password']);

        // Optionally generate a picture or avatar based on the name
        $validated['picture'] = config('app.avatar_generator_url') . $validated['name'];

        // Create the new user
        $user = User::create($validated);

        // If user creation is successful, log in the user
        if ($user) {
            Auth::login($user);
            return redirect()->route('home'); // Redirect to home after successful registration
        }

        // If something goes wrong, abort with a 500 error
        return abort(500);
    }
}
