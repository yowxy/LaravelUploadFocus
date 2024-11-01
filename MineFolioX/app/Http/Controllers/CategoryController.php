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

    public function filterByCategory($id)
    {
        $category = Category::findOrFail($id); // Ambil kategori berdasarkan ID
        $portfolios = $category->portfolios()->simplePaginate(5); // Ambil portofolio berdasarkan kategori dengan paginasi
        $categories = Category::all(); // Ambil semua kategori

        return view('pages.Explore.detail', compact('portfolios', 'categories')); // Kembalikan ke tampilan dengan data yang diperlukan
    }

}
