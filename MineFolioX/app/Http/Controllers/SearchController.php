<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // Validasi input pencarian
        $request->validate([
            'search' => 'nullable|string|max:255', // 'search' sekarang opsional
            'category' => 'nullable|string|max:255' // tambahkan validasi untuk 'category'
        ]);

        $searchQuery = $request->input('search');
        $categoryQuery = $request->input('category');

        // Query untuk mencari portofolio berdasarkan Title, Description, Name, dan Category
        $results = Portofolio::where(function ($query) use ($searchQuery, $categoryQuery) {
                if ($searchQuery) {
                    $query->where('title', 'like', "%{$searchQuery}%")
                          ->orWhere('description', 'like', "%{$searchQuery}%")
                          ->orWhereHas('user', function ($q) use ($searchQuery) {
                              $q->where('name', 'like', "%{$searchQuery}%");
                          });
                }

                // Filter berdasarkan kategori jika ada
                if ($categoryQuery) {
                    $query->whereHas('category', function ($q) use ($categoryQuery) {
                        $q->where('name', $categoryQuery);
                    });
                }
            })
            ->simplePaginate(10);

        // Kembalikan hasil pencarian ke view pages.Explore.detail
        return view('pages.Explore.detail', ['portofolios' => $results]);
    }
}
