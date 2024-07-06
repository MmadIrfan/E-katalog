<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="home/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="home/css/tiny-slider.css" rel="stylesheet">
    <link href="home/css/style.css" rel="stylesheet">
    <title>Aesthetic Rattan</title>
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
                    <li class="nav-item {{ Request::is('Products') ? 'active' : '' }}"><a class="nav-link"
                            href="/Products">Products</a></li>
                    <li class="nav-item {{ Request::is('AboutUs') ? 'active' : '' }}"><a class="nav-link"
                            href="about.html">About us</a></li>
                    <li class="nav-item {{ Request::is('') ? 'active' : '' }}"><a class="nav-link"
                            href="blog.html">Blog</a></li>
                    <li class="nav-item {{ Request::is('') ? 'active' : '' }}"><a class="nav-link"
                            href="contact.html">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="#"><i class="fa-brands fa-facebook fa-xl"></i></a></li>
                    <li><a class="nav-link mx-2" href="#"><i class="fa-brands fa-instagram fa-xl"></i></a></li>
                    <li><a class="nav-link" href="#"><i class="fa-brands fa-whatsapp fa-xl"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
