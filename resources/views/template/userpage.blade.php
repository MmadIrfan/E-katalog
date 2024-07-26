<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('home/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link href="{{ asset('home/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/Logo.png') }}" />
    <title>@yield('title') | Aesthetic Rattan</title>
    @livewireStyles
</head>

<body>
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="/">Aesthetic Rattan<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item {{ Request::is('products*') ? 'active' : '' }}"><a class="nav-link"
                            href="/products">Products</a></li>
                    <li class="nav-item {{ Request::is('about') ? 'active' : '' }}"><a class="nav-link"
                            href="/about">About us</a></li>
                    <li class="nav-item {{ Request::is('blogs*') ? 'active' : '' }}"><a class="nav-link"
                            href="/blogs">Blog</a></li>
                    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a class="nav-link"
                            href="/contact">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link"
                            href="mailto:marketing@aestheticrattan.com?subject=Inquiry%20about%20Rattan%20Furniture&body=Hello,%0D%0AI%20am%20interested%20in%20learning%20more%20about%20your%20rattan%20furniture.%0D%0AThank%20you!"><i
                                class="far fa-brands fa-envelope fa-xl"></i></a></li>
                    <li><a class="nav-link mx-2" href="https://www.instagram.com/aesthetic_rattan/"><i
                                class="fa-brands fa-instagram fa-xl"></i></a></li>
                    <li><a class="nav-link" href="https://wa.me/6282319677113"><i
                                class="fa-brands fa-whatsapp fa-xl"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>
                            @yield('judul')
                        </h1>
                        <p class="mb-4">
                            @yield('sub')
                        </p>
                        <p>
                            <a href="mailto:marketing@aestheticrattan.com?subject=Inquiry%20about%20Rattan%20Furniture&body=Hello,%0D%0AI%20am%20interested%20in%20learning%20more%20about%20your%20rattan%20furniture.%0D%0AThank%20you!"
                                class="btn btn-secondary me-2">Shop Now</a>
                            <a href="#product-section" class="btn btn-white-outline">Explore</a>
                        </p>
                    </div>
                </div>
                @section('hero-image')
                    <div class="col-lg-7">
                        <div class="hero-img-wrap">
                            <img src="{{ asset('images/OWL_0301-811.png') }}" class="img-fluid" />
                        </div>
                    </div>
                @show
            </div>
        </div>
    </div>
    <!-- End Hero Section -->
    <div>
        @yield('content')
    </div>
    @livewire('chat')
    {{-- <button id="contact-toggle" class="btn btn-secondary me-2"><i class="fa-solid fa-headset"></i> Contact Us</button>
    <div id="contact-box">
        <header>Contact Us</header>
        <div class="form">
            <div class="input-box">
                <input type="text" id="name" placeholder="Your Name" class="form-control">
            </div>
            <div class="input-box">
                <input type="email" id="email" placeholder="Your Email" class="form-control">
            </div>
            <div class="input-box">
                <textarea id="message" rows="5" placeholder="Your Message" class="form-control"></textarea>
            </div>
            <div class="submit-box">
                <button id="send-button" class="btn btn-primary">Send</button>
            </div>
        </div>
    </div> --}}
    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container relative">

            <div class="sofa-img">
                <img src="{{ asset('images/_OWL2821.png') }}" alt="Image" class="img-fluid">
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="subscription-form">
                        <h3 class="d-flex align-items-center"><span class="me-1"><img
                                    src="{{ asset('home/images/envelope-outline.svg') }}" alt="Image"
                                    class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

                        {{-- <form action="{{ url('/send-email') }}" method="POST" class="row g-3">
                            @csrf
                            <div class="col-auto">
                                <input type="text" name="name" class="form-control" placeholder="Enter your name"
                                    required>
                            </div>
                            <div class="col-auto">
                                <input type="email" name="email" class="form-control"
                                    placeholder="Enter your email" required>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-paper-plane"></span>
                                </button>
                            </div>
                        </form> --}}
                        <form id="inquiryForm" onsubmit="return previewEmail(event)" class="row g-3">
                            @csrf
                            <div class="col-auto">
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Enter your name" required>
                            </div>
                            <div class="col-auto">
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Enter your email" required>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-paper-plane"></span>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Aesthetic
                            Rattan<span>.</span></a>
                    </div>
                    <p class="mb-4">For over two decades, our journey in the rattan furniture industry has been
                        nothing short of remarkable. From humble beginnings to becoming a leading force, we’ve woven
                        together a legacy of quality, artistry, and customer satisfaction that stands the test of time.
                    </p>

                    <ul class="list-unstyled custom-social">
                        <li><a
                                href="mailto:marketing@aestheticrattan.com?subject=Inquiry%20about%20Rattan%20Furniture&body=Hello,%0D%0AI%20am%20interested%20in%20learning%20more%20about%20your%20rattan%20furniture.%0D%0AThank%20you!"><span
                                    class="far fa-brands fa-envelope"></span></a></li>
                        <li><a href="https://wa.me/6282319677113 "><span class="fa fa-brands fa-whatsapp"></span></a>
                        </li>
                        <li><a href="https://www.instagram.com/aesthetic_rattan/"><span
                                    class="fa fa-brands fa-instagram"></span></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="about">About us</a></li>
                                <li><a href="blogs">Blog</a></li>
                                <li><a href="contact">Contact us</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                @foreach ($products->take(4) as $product)
                                    @if ($product->populer == 'Iya')
                                        <li><a href="{{ route('home.show', $product->id) }}">{{ $product->nama }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                @foreach ($products->take(3) as $product)
                                    <li><a href="{{ route('home.show', $product->id) }}">{{ $product->nama }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <img src="{{ asset('images/Logo.png') }}" width="200" alt="" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Designed with love by <a>Muhammad
                                Irfan</a>
                        </p>
                    </div>

                    {{-- <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div> --}}

                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer Section -->
    @livewireScripts
</body>

<script src="{{ asset('home/js/email-preview.js') }}"></script>
<script src="{{ asset('home/js/buy-email.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="{{ asset('home/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('home/js/tiny-slider.js') }}"></script>
<script src="{{ asset('home/js/custom.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactToggle = document.getElementById('contact-toggle');
        const contactBox = document.getElementById('contact-box');
        const sendButton = document.getElementById('send-button');

        contactToggle.addEventListener('click', () => {
            const isVisible = contactBox.style.display === 'block';
            contactBox.style.display = isVisible ? 'none' : 'block';
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        Fancybox.bind("[data-fancybox]", {
            // Opsi Fancybox di sini
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mainImage = document.getElementById('main-image');
        const galleryItems = document.querySelectorAll('.gallery-item img');

        if (mainImage && galleryItems.length > 0) {
            // Function to update transparency
            function updateTransparency(selectedImageSrc) {
                galleryItems.forEach(item => {
                    if (item.dataset.src === selectedImageSrc) {
                        item.classList.remove('inactive-photo');
                    } else {
                        item.classList.add('inactive-photo');
                    }
                });
            }

            galleryItems.forEach(item => {
                item.addEventListener('click', function() {
                    mainImage.src = this.dataset.src;
                    updateTransparency(this.dataset.src);
                });
            });

            // Set initial transparency
            if (mainImage.src) {
                updateTransparency(mainImage.src);
            }

            // Zoom effect following mouse
            const mainPhoto = document.querySelector('.main-photo');
            if (mainPhoto) {
                mainPhoto.addEventListener('mousemove', function(e) {
                    const rect = mainPhoto.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const percentX = x / rect.width * 100;
                    const percentY = y / rect.height * 100;

                    mainImage.style.transformOrigin = `${percentX}% ${percentY}%`;
                    mainImage.style.transform = `scale(5)`;
                });

                mainPhoto.addEventListener('mouseleave', function() {
                    mainImage.style.transform = `scale(1)`;
                });
            }
        }

        // Kode untuk filter kategori
        const categorySelect = document.querySelector('select[name="kategori"]');
        const productContainer = document.querySelector('#products-container');

        if (categorySelect && productContainer) {
            categorySelect.addEventListener('change', function() {
                const selectedCategory = this.value;

                fetch(`{{ route('home.produk') }}?kategori=${selectedCategory}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        productContainer.innerHTML = data.html;
                    })
                    .catch(error => console.error('Error:', error));
            });
        }
    });
</script>
