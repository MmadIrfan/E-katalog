<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Products;
use App\Models\Blogs;
use App\Models\Contact;
use App\Models\About;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::orderBy('created_at', 'desc')->get();
        $testimonials = Testimonials::orderBy('created_at', 'desc')->get();
        $blogs = Blogs::all();
        return view("home.home", ['products' => $products, 'blogs' => $blogs, 'testimonials'=>$testimonials]);
    }

    public function produk(Request $request)
    {
        $products = Products::when($request->kategori, function ($query, $kategori) {
            return $query->where('kategori', $kategori);
        })->orderBy('created_at', 'desc')->get();

        if ($request->ajax()) {
            $html = view("home.productspage_partial", compact('products'))->render();
            return response()->json(['html' => $html]);
        }
        
        $blogs = Blogs::all();
        return view("home.productspage", ['products' => $products, 'blogs' => $blogs]);
    }

    public function blog()
    {
        $products = Products::all();
        $blogs = Blogs::all();
        return view("home.blogs", ['products' => $products, 'blogs' => $blogs]);
    }

    public function contact()
    {
        $products = Products::all();
        $contact = Contact::first();
        return view("home.contact", ['products' => $products, 'contact' => $contact]);
    }
    public function about()
    {
        $products = Products::all();
        $about = About::all();
        return view("home.about", ['products' => $products, 'about' => $about]);
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
    public function show(Home $home, $id)
    {
        // $products = Cache::remember('product_'.$id, 3600, function () use ($id) {
        //     return Products::findOrFail($id);
        // });
        $products = Products::findOrFail($id);
        return view('home.detailproduct', compact('products'));
    }
    public function showblog(Home $home, $id)
    {
        $products = Products::all();
        $blogs = Blogs::findOrFail($id);
        return view('home.detailblog', ['blogs' => $blogs, 'products' => $products]);
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
