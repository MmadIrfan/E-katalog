@extends('template.userpage')
@section('title', 'About Us')
@section('judul', 'About Us')
@section('sub',
    'We commit to delivering only The Best Rattan Furniture to you. Our products are made from Natural and
    high-quality raw materials.')
@section('content')
    <!-- Start About Us Section -->
    <section id="product-section" class="untree_co-section about-us-section before-footer-section">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="img-wrap col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('images/bgar.jpg') }}" alt="About Aesthetic Rattan" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">About Aesthetic Rattan</h2>
                    <p class="lead">For over two decades, we've been weaving dreams into reality, crafting exquisite
                        rattan
                        furniture that brings nature's beauty into your homes.</p>
                    <p>From humble beginnings to becoming a leading force in the rattan furniture industry, our journey has
                        been nothing short of remarkable. We've dedicated ourselves to preserving traditional craftsmanship
                        while embracing modern design sensibilities.</p>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="feature text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('home/images/quality.svg') }}" alt="Quality" width="50">
                        </div>
                        <h3>Uncompromising Quality</h3>
                        <p>We use only the finest rattan materials, ensuring durability and longevity in every piece we
                            create.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="feature text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('home/images/artistry.svg') }}" alt="Artistry" width="50">
                        </div>
                        <h3>Artisanal Craftsmanship</h3>
                        <p>Our skilled artisans blend traditional techniques with contemporary design for unique pieces.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('home/images/sustainability.svg') }}" alt="Sustainability" width="50">
                        </div>
                        <h3>Sustainability Focus</h3>
                        <p>We're committed to eco-friendly practices, ensuring our products are as kind to the environment
                            as they are beautiful.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                    <img src="{{ asset('images/bgar2.jpg') }}" alt="Our Workshop" style="border-radius: 20px"
                        class="img-fluid">
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h3 class="mb-4">Our Commitment to Excellence</h3>
                    <p>At Aesthetic Rattan, we believe that furniture is more than just functional – it's an expression of
                        style and a connection to nature. Our commitment to excellence drives us to:</p>
                    <ul class="custom-list mb-4">
                        <li>Source the highest quality rattan</li>
                        <li>Employ skilled local artisans</li>
                        <li>Innovate in design and functionality</li>
                        <li>Prioritize customer satisfaction</li>
                    </ul>
                    <a href="/products" class="btn btn-primary">Explore Our Collection</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="section-title text-center mb-5">Our Gallery</h2>
                </div>
            </div>
            <div class="row gallery-row">
                <div class="col-md-4 mb-4">
                    <a data-fancybox data-src="{{ asset('images/OWL_0094.JPG') }}" data-caption="Gallery Image">
                        <img src="{{ asset('images/OWL_0094.JPG') }}" alt="" class="img-fluid rounded" />
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a data-fancybox data-src="{{ asset('images/OWL_0094.JPG') }}" data-caption="Gallery Image">
                        <img src="{{ asset('images/OWL_0094.JPG') }}" alt="" class="img-fluid rounded" />
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a data-fancybox data-src="{{ asset('images/OWL_0094.JPG') }}" data-caption="Gallery Image">
                        <img src="{{ asset('images/OWL_0094.JPG') }}" alt="" class="img-fluid rounded" />
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a data-fancybox data-src="{{ asset('images/OWL_0094.JPG') }}" data-caption="Gallery Image">
                        <img src="{{ asset('images/OWL_0094.JPG') }}" alt="" class="img-fluid rounded" />
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a data-fancybox data-src="{{ asset('images/OWL_0094.JPG') }}" data-caption="Gallery Image">
                        <img src="{{ asset('images/OWL_0094.JPG') }}" alt="" class="img-fluid rounded" />
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a data-fancybox data-src="{{ asset('images/OWL_0094.JPG') }}" data-caption="Gallery Image">
                        <img src="{{ asset('images/OWL_0094.JPG') }}" alt="" class="img-fluid rounded" />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->
@endsection
