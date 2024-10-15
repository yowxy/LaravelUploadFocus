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
        $portfolios = Portofolio::where('user_id', auth()->id())->get();

        return view('pages.Profile.index', compact('portfolios')); // pastikan variabel 'portfolios'
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
        $portofolio = Portofolio::findOrFail($id);

        return view('pages.portofolio.edit', compact('portofolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PortofolioRequest $request, string $id)
    {
        $portofolio = Portofolio::findOrFail($id);

        $validatedData = $request->validated();

        if($request->hasFile('image_path')){
            $imagePath = $request->file('image_path')->store('images/portofoliod', 'public');
            $validatedData['image_path'] = $imagePath;
        } else {
            $validatedData ['image_path'] = $portofolio->image_path;
        }

        $portofolio->update([
            'title' => $validatedData['title'],
            'name' => $validatedData['name'],
            'description' => $validatedData['image_path'],
        ]);


        return redirect()->route('profile')->with('success','portofolio berhasil di perbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
