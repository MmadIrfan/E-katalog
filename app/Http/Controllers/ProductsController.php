<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::latest()->paginate(5);
        return view("admin.products.products", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.products.addproducts");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $thumbnail = $request->file('thumbnail');
        $thumbnailName = time() . '_thumbnail_' . $thumbnail->getClientOriginalName();
        $thumbnail->storeAs('public/products/thumbnail', $thumbnailName);

        // Upload foto-foto
        $fotoNames = [];
        if ($request->hasFile('foto')) {
            foreach($request->file('foto') as $foto) {
                $fotoName = time() . '_' . $foto->getClientOriginalName();
                $foto->storeAs('public/products', $fotoName);
                $fotoNames[] = $fotoName;
            }
        }

        $products = Products::create([
            'nama'       => $request->nama,
            'thumbnail'  => $thumbnailName,
            'foto'       => json_encode($fotoNames),
            'deskripsi'  => $request->deskripsi,
            'dimensi'    => $request->dimensi,
            'warna'      => $request->warna,
            'material'   => $request->material,
            'kategori'   => $request->kategori,
            'populer'    => $request->populer
        ]);

    
        if($products){
            //redirect dengan pesan sukses
            return redirect()->route('updateproducts.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updateproducts.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products, $id)
    {
        $products = Products::findOrFail($id);
        return view("admin.products.editproducts", compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products, $id)
    {
        $products = Products::find($id);

        // Update thumbnail jika ada
        if ($request->hasFile('thumbnail')) {
            Storage::delete('public/products/thumbnail/'.$products->thumbnail);
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . '_thumbnail_' . $thumbnail->getClientOriginalName();
            $thumbnail->storeAs('public/products/thumbnail/', $thumbnailName);
            $products->thumbnail = $thumbnailName;
        }

        // Update foto-foto jika ada
        if ($request->hasFile('foto')) {
            // Hapus foto-foto lama
            $oldFotos = json_decode($products->foto);
            foreach ($oldFotos as $oldFoto) {
                Storage::delete('public/products/'.$oldFoto);
            }

            // Upload foto-foto baru
            $fotoNames = [];
            foreach($request->file('foto') as $foto) {
                $fotoName = time() . '_' . $foto->getClientOriginalName();
                $foto->storeAs('public/products', $fotoName);
                $fotoNames[] = $fotoName;
            }
            $products->foto = json_encode($fotoNames);
        }

        $products->update([
            'nama'       => $request->nama,
            'deskripsi'  => $request->deskripsi,
            'dimensi'    => $request->dimensi,
            'warna'      => $request->warna,
            'material'   => $request->material,
            'kategori'   => $request->kategori,
            'populer'    => $request->populer
        ]);

        if($products){
            //redirect dengan pesan sukses
            return redirect()->route('updateproducts.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updateproducts.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products, $id)
    {
        $products = Products::find($id);

        // Hapus thumbnail
        Storage::delete('public/products/thumbnail/'.$products->thumbnail);

        // Hapus foto-foto
        $fotos = json_decode($products->foto);
        foreach ($fotos as $foto) {
            Storage::delete('public/products/'.$foto);
        }

        $products->delete();

        return redirect()->route('updateproducts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}