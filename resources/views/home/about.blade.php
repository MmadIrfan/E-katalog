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
                    <p class="lead">23 YEARS IN THE RATTAN FURNITURE BUSINESS</p>
                    <p>For over two decades, our journey in the rattan furniture industry has been nothing short of
                        remarkable. From humble beginnings to becoming a leading force, we’ve woven together a legacy of
                        quality, artistry, and customer satisfaction that stands the test of time.</p>
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
                    <h2 class="mb-4">Introduce Rattan Industries</h2>
                    <p>Once a small, family-run business, the rattan furniture industry blossomed into an empire over the
                        years. Their artisans mastered the art of crafting exquisite pieces that blended elegance with
                        nature’s grace. As demand soared, the company embraced sustainability, ensuring rattan sourcing was
                        responsible and eco-friendly.</p>
                    <p>With 23 years of expertise, they became a beacon of craftsmanship and innovation, leading the way in
                        the furniture world. The story of their success was woven by the passion of dedicated artisans, the
                        loyalty of clients, and the enduring beauty of rattan.</p>
                    <a href="https://drive.google.com/file/d/1j1CEcYIx0pqV5zLfT-ojnvNDYxlT2o_F/view"
                        class="btn btn-primary">More About Our Company</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h1 class="section-title text-center mb-5">Our Gallery</h1>
                </div>
            </div>
            <div class="row gallery-row">
                @foreach ($about as $about)
                    <div class="col-md-4 mb-4">
                        <a data-fancybox data-src="{{ asset('storage/gallery/' . $about->foto) }}"
                            data-caption="{{ $about->keterangan }}">
                            <img src="{{ asset('storage/gallery/' . $about->foto) }}" alt=""
                                class="img-fluid rounded" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Blog Section -->
@endsection
