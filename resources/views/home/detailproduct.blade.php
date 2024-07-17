@extends('template.userpage')
@section('title', 'Products')
@section('judul', $products->nama)
@section('sub', substr($products->deskripsi, 0, 100) . '...')
@section('hero-image')
    <div class="col-lg-4">
        <div class="hero-img-wrap">
            <img src="{{ asset('storage/products/' . $products->foto) }}" class="img-fluid" />
        </div>
    </div>
@endsection
@section('content')
    <div id="product-section" class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-5">
                    <img src="{{ asset('storage/products/' . $products->foto) }}" alt="{{ $products->nama }}"
                        class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2>{{ $products->nama }}</h2>
                    <p class="text-muted">{{ $products->deskripsi }}</p>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Dimension</th>
                                <td>{{ $products->dimensi }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Color</th>
                                <td>{{ $products->warna }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Material</th>
                                <td>{{ $products->material }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Category</th>
                                <td>{{ $products->kategori }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        <a href="mailto:marketing@aestheticrattan.com?subject=Inquiry%20about%20Rattan%20Furniture&body=Hello,%0D%0AI%20am%20interested%20in%20learning%20more%20about%20*{{ urlencode($products->nama) }}*.%0D%0AThank%20you!"
                            class="btn btn-primary"><span class="me-1"><img
                                    src="{{ asset('home/images/envelope-outline.svg') }}" alt="Image"
                                    class="img-fluid"></span><span>Buy via email</span></a>
                        <a href="/products" class="btn btn-secondary"><span>Back to Products</span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
