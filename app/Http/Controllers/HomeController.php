<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Products;
use App\Models\Blogs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view("home.home", ['products' => $products]);
    }

    public function produk()
    {
        $products = Products::all();
        return view("home.productspage", ['products' => $products]);
    }

    public function blog()
    {
        return view("home.blogs");
    }

    public function contact()
    {
        return view("home.contact");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
