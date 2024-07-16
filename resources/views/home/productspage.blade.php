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
                        <a class="product-item" href="#">
                            <img src="{{ asset('storage/products/' . $product->foto) }}" class="img-fluid product-thumbnail"
                                style="object-fit: cover; width: 100%; height: 200px;">
                            <h3 class="product-title">{{ $product->nama }}</h3>
                            <strong class="product-price">PRODUCT DETAILS</strong>

                            <span class="icon-cross">
                                <img src="home/images/cross.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                @endforeach
                <!-- End Column 1 -->
            </div>
        </div>
    </div>
@endsection
