<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blogs::latest()->paginate(5);
        return view('admin.blogs.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.addblogs');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'   => 'required',
            'foto'    => 'required|image|mimes:png,jpg,jpeg',
            'konten' => 'required',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/blogs', $foto->hashName());

        $blogs = Blogs::create([
            'judul'   => $request->judul,
            'foto'    => $foto->hashName(),
            'konten'  => $request->konten,
        ]);
        return redirect()->route('updateblogs.index')->with('success', 'Blogs created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blogs $blogs, $id)
    {
        $blogs = Blogs::findOrFail($id);
        return view('admin.blogs.showblogs', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blogs $blogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blogs $blogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blogs $blogs, $id)
    {
        $blogs = blogs::find($id);

        Storage::delete('public/blogs/'.$blogs->foto);

        $blogs->delete();

        return redirect()->route('updateblogs.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
