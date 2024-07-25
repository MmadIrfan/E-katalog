@extends('template.userpage')
@section('title', 'Home')
@section('judul', 'BEST QUALITY RATTAN FURNITURE FROM INDONESIA')
@section('sub',
    'We commit to delivering only The Best Rattan Furniture to you. Our products are made from Natural and
    high-quality raw materials.')
@section('content')
    <!-- Start Product Section -->
    <div id="product-section" class="product-section">
        <div class="container">
            <div class="row">
                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">
                        Crafted with excellent material.
                    </h2>
                    <p class="mb-4">
                        We are committed to crafting functional and aesthetically pleasing furniture pieces that inspire
                        comfort, creativity, and joy in everyday living.
                    </p>
                    <p><a href="/products" class="btn">Explore</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                @foreach ($products->take(3) as $product)
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="{{ route('home.show', $product->id) }}">
                            <img src="{{ asset('storage/products/thumbnail/' . $product->thumbnail) }}"
                                class="img-fluid product-thumbnail" />
                            <h3 class="product-title">{{ $product->nama }}</h3>
                            {{-- <strong class="product-price">$566</strong> --}}
                            <span class="icon-cross">
                                <img src="home/images/arrow-narrow-right.svg" class="img-fluid" />
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">Why Choose Us</h2>
                    <p>
                        At our company, we are dedicated to providing top-notch services and ensuring customer satisfaction.
                        Our commitment to excellence sets us apart in the industry.
                    </p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="home/images/truck.svg" alt="Image" class="imf-fluid" />
                                </div>
                                <h3>Responsibility</h3>
                                <p>
                                    We take our responsibilities seriously, ensuring every project is completed with
                                    meticulous care and attention to detail.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="home/images/bag.svg" alt="Image" class="imf-fluid" />
                                </div>
                                <h3>Professional</h3>
                                <p>
                                    Our team of professionals is well-trained and experienced, bringing extensive knowledge
                                    and expertise to every project.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="home/images/support.svg" alt="Image" class="imf-fluid" />
                                </div>
                                <h3>Commitment</h3>
                                <p>
                                    We are committed to delivering superior services and solutions tailored to our clients'
                                    unique needs.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="home/images/return.svg" alt="Image" class="imf-fluid" />
                                </div>
                                <h3>Experienced</h3>
                                <p>
                                    With many years in the industry, our team possesses the skills and expertise to tackle
                                    any challenge.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="images/OWL_0094.JPG" alt="Image" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1">
                            <img src="images/_OWL2673.JPG" alt="Aesthetic Rattan" />
                        </div>
                        <div class="grid grid-2">
                            <img src="images/_OWL2953.JPG" alt="Aesthetic Rattan" />
                        </div>
                        <div class="grid grid-3">
                            <img src="images/_OWL2839.JPG" alt="Aesthetic Rattan" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">
                        We Help You Make Modern Furniture Design
                    </h2>
                    <p>
                        We specialize in bringing your dreams to life with unique and personalized furniture designs. From
                        concept to realization, we're committed to delivering every detail you envision. Trust us to create
                        furniture that not only functions flawlessly but also reflects your style and needs perfectly
                    </p>

                    <ul class="list-unstyled custom-list my-4">
                        <li>
                            We listen attentively to understand your vision and preferences.
                        </li>
                        <li>
                            We offer tailored designs that complement your space and lifestyle.
                        </li>
                        <li>
                            Each piece is crafted with high-quality materials and meticulous attention to detail.
                        </li>
                        <li>
                            Every creation is distinctive, reflecting your personality and aesthetic taste.
                        </li>
                    </ul>
                    <p><a href="/about" class="btn">Explore</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End We Help Section -->

    <!-- Start Popular Product -->
    <div class="popular-product">
        <div class="container">
            <div class="row">
                @foreach ($products->take(4) as $product)
                    @if ($product->populer == 'Iya')
                        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="product-item-sm d-flex">
                                <div class="thumbnail">
                                    <img src="{{ asset('storage/products/thumbnail/' . $product->thumbnail) }}"
                                        alt="Image" class="img-fluid" />
                                </div>
                                <div class="pt-3">
                                    <h3>{{ $product->nama }}</h3>
                                    <p>
                                        {{ substr($product->deskripsi, 0, 50) . '...' }}
                                    </p>
                                    <p><a href="{{ route('home.show', $product->id) }}">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Popular Product -->

    <!-- Start Testimonial Slider -->
    <div class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-title">Testimonials</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider-wrap text-center">
                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                            <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                        </div>

                        <div class="testimonial-slider">
                            @foreach ($testimonials as $testimonial)
                                <div class="item">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 mx-auto">
                                            <div class="testimonial-block text-center">
                                                <blockquote class="mb-5">
                                                    <p>
                                                        &ldquo;{{ $testimonial->testi }}&rdquo;
                                                    </p>
                                                </blockquote>

                                                <div class="author-info">
                                                    <div class="author-pic">
                                                        <img src="{{ asset('storage/profile/' . $testimonial->foto) }}"
                                                            alt="{{ $testimonial->nama }}" class="img-fluid" />
                                                    </div>
                                                    <h3 class="font-weight-bold">
                                                        {{ $testimonial->nama }}
                                                    </h3>
                                                    <span
                                                        class="position d-block mb-3">{{ $testimonial->pekerjaan }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- END item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Slider -->

    <!-- Start Blog Section -->
    <div class="blog-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="section-title">Recent Blog</h2>
                </div>
                <div class="col-md-6 text-start text-md-end">
                    <a href="/blogs" class="more">View All Posts</a>
                </div>
            </div>

            <div class="row">
                @foreach ($blogs->take(3) as $blog)
                    <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                        <div class="post-entry">
                            <a href="{{ route('home.showblog', $blog->id) }}" class="post-thumbnail"><img
                                    src="{{ asset('storage/blogs/' . $blog->foto) }}" alt="Image"
                                    class="img-fluid" /></a>
                            <div class="post-content-entry">
                                <h3>
                                    <a href="{{ route('home.showblog', $blog->id) }}">{{ $blog->judul }}</a>
                                </h3>
                                <div class="meta">
                                    <span>by <a href="{{ route('home.showblog', $blog->id) }}">Admin</a></span>
                                    <span>on <a
                                            href="{{ route('home.showblog', $blog->id) }}">{{ $blog->created_at->setTimezone('Asia/Jakarta')->format('M d, Y') }}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
