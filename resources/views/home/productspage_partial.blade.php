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
