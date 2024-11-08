<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonials::all();
        return view("admin.dashboard", ['testimonials' => $testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimoni.addtestimoni');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required',
            'foto'      => 'required|image|mimes:png,jpg,jpeg',
            'pekerjaan' => 'required',
            'testi'     => 'required',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/profile', $foto->hashName());

        $testimonials = Testimonials::create([
            'nama'      => $request->nama,
            'foto'      => $foto->hashName(),
            'pekerjaan' => $request->pekerjaan,
            'testi'     => $request->testi,
        ]);
        return redirect()->route('dashboard')->with('success', 'testimonials created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonials $testimonials, $id)
    {
        $testimonials = Testimonials::findOrFail($id);
        return view('admin.testimoni.showtestimoni', compact('testimonials'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonials $testimonials, $id)
    {
        $testimonials = Testimonials::findOrFail($id);
        return view('admin.testimoni.edittestimoni', compact('testimonials'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonials $testimonials, $id)
    {
        $testimonials = Testimonials::find($id);
        $request->validate([
            'nama'      => 'required',
            'foto'      => 'nullable|image|mimes:png,jpg,jpeg',
            'pekerjaan' => 'required',
            'testi'     => 'required',
        ]);

        if ($request->hasFile('foto')) {
            // Delete old image
            Storage::delete('public/profile/'.$testimonials->foto);

            // Upload new image
            $foto = $request->file('foto');
            $foto->storeAs('public/profile', $foto->hashName());

            // Update with new image
            $testimonials->update([
                'nama'      => $request->nama,
                'foto'      => $foto->hashName(),
                'pekerjaan' => $request->pekerjaan,
                'testi'     => $request->testi,
            ]);
        } else {
            // Update without changing the image
            $testimonials->update([
                'nama'      => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'testi'     => $request->testi,
            ]);
        }

        return redirect()->route('dashboard')->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonials $testimonials, $id)
    {
        $testimonials = Testimonials::find($id);

        Storage::delete('public/profile/'.$testimonials->foto);

        $testimonials->delete();

        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
