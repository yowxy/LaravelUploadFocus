<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortofolioRequest;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioUpload extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil 5 portofolio per halaman tanpa nomor halaman, hanya Previous dan Next
        $portfolios = Portofolio::where('user_id', auth()->id())->simplePaginate(5);

        // Pastikan kamu sudah mengirimkan data portfolios ke view
        return view('pages.Profile.index', compact('portfolios'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.Profile.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PortofolioRequest $request)
    {
        $validatedData = $request->validated();

        $imagePath = $request->file('image_path')->store('images/portofolios', 'public');

        Portofolio::create([
            'title' => $validatedData['title'],
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'image_path' => $imagePath,
            'category_id' => $request->category_id,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('profile')->with('success', 'Portofolio berhasil ditambahkan!');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $portofolio = Portofolio::findOrFail($id); // Ganti nama variabel menjadi $portofolio

        return view('pages.Profile.show', compact('portofolio')); // Kirim variabel 'portofolio'
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $portofolio = Portofolio::findOrFail($id); // Mendapatkan data portofolio berdasarkan id
        return view('pages.portofolio.edit', compact('portofolio')); // Mengirim data ke view
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $portofolio = Portofolio::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika ada gambar baru diunggah
        if ($request->hasFile('image_path')) {
            // Hapus gambar lama jika ada
            if ($portofolio->image_path && file_exists(storage_path('app/public/' . $portofolio->image_path))) {
                unlink(storage_path('app/public/' . $portofolio->image_path));
            }

            // Simpan gambar baru
            $imagePath = $request->file('image_path')->store('images/portofolios', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        $portofolio->update($validatedData);

        return redirect()->route('profile')->with('success', 'Portofolio berhasil diperbarui!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portofolio = Portofolio::findOrFail($id);

        // Hapus gambar dari penyimpanan jika ada
        if ($portofolio->image_path && file_exists(storage_path('app/public/' . $portofolio->image_path))) {
            unlink(storage_path('app/public/' . $portofolio->image_path));
        }

        // Hapus portofolio dari database
        $portofolio->delete();

        return redirect()->route('profile')->with('success', 'Portofolio berhasil dihapus!');
    }
}
