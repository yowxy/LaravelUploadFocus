<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique|:App\Models\User,name|min:4|max:255',
            'email' => 'required|email|unique:App\Models\User,email|min:4|max:255',
            'password' => ['required', Password::min(8)->numbers()->symbols()],
            'confirm_password' => 'required|same:password', 
        ];
    }
}
