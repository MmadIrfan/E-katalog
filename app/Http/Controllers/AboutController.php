<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::latest()->paginate(5);
        return view("admin.about.aboutus", ['about' => $about]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.addabout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto'      => 'required|image|mimes:png,jpg,jpeg',
            'keterangan' => 'required',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/gallery', $foto->hashName());

        $about = About::create([
            'foto'       => $foto->hashName(),
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('updateabout.index')->with('success', 'Abouts created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about, $id)
    {
        $about = About::find($id);

        Storage::delete('public/gallery/'.$about->foto);

        $about->delete();

        return redirect()->route('updateabout.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
