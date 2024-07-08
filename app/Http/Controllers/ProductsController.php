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
        $this->validate($request, [
            'nama'       => 'required',
            'foto'       => 'required|image|mimes:png,jpg,jpeg',
            'deskripsi'  => 'required',
            'dimensi'    => 'required',
            'warna'      => 'required',
            'material'   => 'required',
            'kategori'   => 'required'
        ]);
    
        //upload image
        $foto = $request->file('foto');
        $foto->storeAs('public/products', $foto->hashName());
    
        $products = Products::create([
            'nama'       => $request->nama,
            'foto'       => $foto->hashName(),
            'deskripsi'  => $request->deskripsi,
            'dimensi'    => $request->dimensi,
            'warna'      => $request->warna,
            'material'   => $request->material,
            'kategori'   => $request->kategori
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
        $this->validate($request, [
            'nama'       => 'required',
            'foto'       => 'image|mimes:png,jpg,jpeg',
            'deskripsi'  => 'required',
            'dimensi'    => 'required',
            'warna'      => 'required',
            'material'   => 'required',
            'kategori'   => 'required'
        ]);
        $products = Products::find($id);

        if ($request->hasFile('foto')) {
        //upload image
        $foto = $request->file('foto');
        $foto->storeAs('public/products', $foto->hashName());
        Storage::delete('public/products/'.$products->foto);
    
        $products -> update([
            'nama'       => $request->nama,
            'foto'       => $foto->hashName(),
            'deskripsi'  => $request->deskripsi,
            'dimensi'    => $request->dimensi,
            'warna'      => $request->warna,
            'material'   => $request->material,
            'kategori'   => $request->kategori
        ]);
    } else {
        $products -> update([
            'nama'       => $request->nama,
            'deskripsi'  => $request->deskripsi,
            'dimensi'    => $request->dimensi,
            'warna'      => $request->warna,
            'material'   => $request->material,
            'kategori'   => $request->kategori
        ]);
    }
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

        Storage::delete('public/products/'.$products->foto);

        $products->delete();

        return redirect()->route('updateproducts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
