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



    public function filterByCategory($categoryId)
    {
        // Mengambil kategori berdasarkan ID
        $category = Category::findOrFail($categoryId);

        // Mengambil portofolio yang terkait dengan kategori tersebut
        $portfolios = $category->portfolios; // Mengambil semua portofolio terkait kategori

        // Mengambil semua kategori untuk ditampilkan di view
        $categories = Category::all();

        return view('pages.Explore.detail', compact('portfolios', 'categories')); // Pastikan view ini sesuai
    }

}
