@extends('template.userpage')
@section('title', 'Contact Us')
@section('judul', 'Contact Us')
@section('sub',
    'We commit to delivering only The Best Rattan Furniture to you. Our products are made from Natural and
    high-quality raw materials.')
@section('content')
    <!-- Start Contact Form -->
    <div id="product-section" class="untree_co-section">
        <div class="container">
            <div class="block">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8 pb-4">
                        <div class="row mb-5">
                            <div class="col-lg-4">
                                <div class="service no-shadow align-items-center link horizontal d-flex active"
                                    data-aos="fade-left" data-aos-delay="0">
                                    <div class="service-icon color-1 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                        </svg>
                                    </div> <!-- /.icon -->
                                    <div class="service-contents">
                                        <p>Jl. Raya Tegalwangi Km. 10, Weru, Cirebon, Jawa Barat 45154</p>
                                    </div> <!-- /.service-contents-->
                                </div> <!-- /.service -->
                            </div>

                            <div class="col-lg-4">
                                <div class="service no-shadow align-items-center link horizontal d-flex active"
                                    data-aos="fade-left" data-aos-delay="0">
                                    <div class="service-icon color-1 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                                        </svg>
                                    </div> <!-- /.icon -->
                                    <div class="service-contents">
                                        <p>info@aestheticrattan.com</p>
                                    </div> <!-- /.service-contents-->
                                </div> <!-- /.service -->
                            </div>

                            <div class="col-lg-4">
                                <div class="service no-shadow align-items-center link horizontal d-flex active"
                                    data-aos="fade-left" data-aos-delay="0">
                                    <div class="service-icon color-1 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                    </div> <!-- /.icon -->
                                    <div class="service-contents">
                                        <p>+62 823-1967-7113</p>
                                    </div> <!-- /.service-contents-->
                                </div> <!-- /.service -->
                            </div>
                        </div>

                        <!-- Embed Google Maps -->
                        <div class="row mb-5">
                            <div class="col-lg-12">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.576875563623!2d108.48731666538586!3d-6.701087938425434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ee1bae5e68a99%3A0xc70b86b2bfe9548!2sJl.%20Raya%20Tegalwangi%20No.Km.%2010%2C%20Tegalwangi%2C%20Kec.%20Weru%2C%20Kabupaten%20Cirebon%2C%20Jawa%20Barat%2045154!5e1!3m2!1sid!2sid!4v1721040594392!5m2!1sid!2sid"
                                    width="100%" height="350"
                                    style="border: 5px #3b5d50; border-radius: 15px; overflow: hidden; " allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Contact Form -->
@endsection
