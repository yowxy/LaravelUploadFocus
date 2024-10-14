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
        //
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
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('profile')->with('success', 'Portofolio berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
