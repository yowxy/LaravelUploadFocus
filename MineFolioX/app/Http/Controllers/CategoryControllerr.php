<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryControllerr extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Mengambil semua kategori
        return view('pages.Profile.form', compact('categories')); // Pastikan view ini sesuai
    }
}
