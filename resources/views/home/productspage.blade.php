@extends('template.userpage')
@section('title', 'Products')
@section('judul', 'Shop')
@section('sub',
    'We commit to delivering only The Best Rattan Furniture to you. Our products are made from Natural and
    high-quality raw materials.')
@section('content')
    <div id="product-section" class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                @foreach ($products as $product)
                    <div class="col-12 col-md-4 col-lg-3 mb-5">
                        <a class="product-item" href="{{ route('home.show', $product->id) }}">
                            <img src="{{ asset('storage/products/thumbnail/' . $product->thumbnail) }}"
                                class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $product->nama }}</h3>
                            {{-- <strong class="product-price">$566</strong> --}}
                            <span class="icon-cross">
                                <img src="home/images/arrow-narrow-right.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                @endforeach
                <!-- End Column 1 -->
            </div>
        </div>
    </div>
@endsection
