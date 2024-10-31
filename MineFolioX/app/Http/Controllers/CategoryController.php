<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Mengambil semua kategori
        return view('pages.Profile.form', compact('categories')); // Pastikan view ini sesuai
    }


    public function filterByCategory($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $portfolios = $category->portfolios;
        $categoriesss = Category::all(); // Ubah di sini

        return view('pages.Explore.detail', compact('portfolios', 'categoriesss')); // Ubah di sini
    }


}
