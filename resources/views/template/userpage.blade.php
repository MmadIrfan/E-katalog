<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="home/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="home/css/tiny-slider.css" rel="stylesheet">
    <link href="home/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/Logo.png" />
    <title>@yield('title') | Aesthetic Rattan</title>
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
                    <li class="nav-item {{ Request::is('products') ? 'active' : '' }}"><a class="nav-link"
                            href="/products">Products</a></li>
                    <li class="nav-item {{ Request::is('AboutUs') ? 'active' : '' }}"><a class="nav-link"
                            href="about.html">About us</a></li>
                    <li class="nav-item {{ Request::is('blogs') ? 'active' : '' }}"><a class="nav-link"
                            href="/blogs">Blog</a></li>
                    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a class="nav-link"
                            href="/contact">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="#"><i class="fa-brands fa-facebook fa-xl"></i></a></li>
                    <li><a class="nav-link mx-2" href="#"><i class="fa-brands fa-instagram fa-xl"></i></a></li>
                    <li><a class="nav-link" href="#"><i class="fa-brands fa-whatsapp fa-xl"></i></a></li>
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
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="images/OWL_0301-811.png" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->
    <div>
        @yield('content')
    </div>
    <button id="contact-toggle" class="btn btn-secondary me-2"><i class="fa-solid fa-headset"></i> Contact Us</button>
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
    </div>
    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container relative">

            <div class="sofa-img">
                <img src="images/_OWL2821.png" alt="Image" class="img-fluid">
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="subscription-form">
                        <h3 class="d-flex align-items-center"><span class="me-1"><img
                                    src="home/images/envelope-outline.svg" alt="Image"
                                    class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

                        <form action="#" class="row g-3">
                            <div class="col-auto">
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="col-auto">
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary">
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
                    <p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus
                        malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.
                        Pellentesque habitant</p>

                    <ul class="list-unstyled custom-social">
                        <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Knowledge base</a></li>
                                <li><a href="#">Live chat</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Our team</a></li>
                                <li><a href="#">Leadership</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Nordic Chair</a></li>
                                <li><a href="#">Kruzo Aero</a></li>
                                <li><a href="#">Ergonomic Chair</a></li>
                            </ul>
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

                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer Section -->
</body>

<script src="home/js/bootstrap.bundle.min.js"></script>
<script src="home/js/tiny-slider.js"></script>
<script src="home/js/custom.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactToggle = document.getElementById('contact-toggle');
        const contactBox = document.getElementById('contact-box');
        const sendButton = document.getElementById('send-button');

        contactToggle.addEventListener('click', () => {
            const isVisible = contactBox.style.display === 'block';
            contactBox.style.display = isVisible ? 'none' : 'block';
        });

        sendButton.addEventListener('click', () => {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            if (name && email && message) {
                fetch('{{ route('updateproducts.store') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            name,
                            email,
                            message
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        alert(data.success);
                        contactBox.style.display = 'none';
                        document.getElementById('name').value = '';
                        document.getElementById('email').value = '';
                        document.getElementById('message').value = '';
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                        alert('Error sending message.');
                    });
            } else {
                alert('Please fill in all fields.');
            }
        });
    });
</script>
