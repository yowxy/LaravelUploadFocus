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
            'search' => 'required|string|max:255',
        ]);

        // Ambil user yang sedang login (ini bisa kamu gunakan untuk keperluan lain, jika diperlukan)
        $user = auth()->user();

        // Query untuk mencari berdasarkan Title, Description, dan Name dari semua portofolio
        $searchQuery = $request->input('search');

        $results = Portofolio::where(function ($query) use ($searchQuery) {
                $query->where('title', 'like', "%{$searchQuery}%")
                      ->orWhere('description', 'like', "%{$searchQuery}%")
                      ->orWhereHas('user', function ($q) use ($searchQuery) {
                          $q->where('name', 'like', "%{$searchQuery}%");
                      });
            })
            ->simplePaginate(10); // Ganti get() dengan paginate()

        // Kembalikan hasil pencarian ke view pages.Explore.detail
        return view('pages.Explore.detail', ['portofolios' => $results]);
    }



}
