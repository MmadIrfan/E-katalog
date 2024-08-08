@extends('template.userpage')
@section('title', 'Products')
@section('judul', 'Explore Our Exclusive Range of Rattan Furniture')
@section('sub', "Discover our diverse collection of rattan furniture, each piece meticulously crafted to bring elegance
    and durability to your space. Whether you're looking for classic designs or contemporary styles, our products are
    designed to meet your needs.")
@section('content')
    <div id="product-section" class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="container mb-5">
                <form id="category-filter">
                    <div class="row justify-content-start">
                        <div class="col-md-4">
                            <select name="kategori" id="kategori-select" class="form-select">
                                <option value="">All Categories</option>
                                <option value="Chair" {{ request('kategori') == 'Chair' ? 'selected' : '' }}>Chair</option>
                                <option value="Soffa" {{ request('kategori') == 'Soffa' ? 'selected' : '' }}>Soffa</option>
                                <option value="Storage" {{ request('kategori') == 'Storage' ? 'selected' : '' }}>Storage
                                </option>
                                <option value="Others" {{ request('kategori') == 'Others' ? 'selected' : '' }}>Others
                                </option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div id="products-container" class="row">
            @section('product-list')
                @foreach ($products as $product)
                    <div class="col-12 col-md-4 col-lg-3 mb-5">
                        <a class="product-item" href="{{ route('home.show', $product->id) }}">
                            <img src="{{ asset('storage/products/thumbnail/' . $product->thumbnail) }}"
                                class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $product->nama }}</h3>
                            <span class="icon-cross">
                                <img src="home/images/arrow-narrow-right.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                @endforeach
            @show
        </div>
    </div>
</div>
@endsection
