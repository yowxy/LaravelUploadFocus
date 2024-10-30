<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortofolioRequest extends FormRequest
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
            'title' => 'required|string|min:4|max:255',
            'name' => 'required|string|min:5|max:255|unique:portofolios,name',
            'description' => 'required|string|min:5|max:255',
            'image_path' => 'required|image|mimes:png,jpg,jpeg|max:10048',
            'category_id' => 'required|exists:categories,id', 
        ];
    }
}
