<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MarketHub </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>


    @vite(['resources/scss/app.scss','resources/app/js'])

</head>

<body>

    {{-- Navbar --}}
    <nav class="p-3 bg-navbar">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="{{ url('images/MarketHub.png') }}" alt="">
                </a>

                <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mx-auto d-flex">
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 w-100 h-44" role="search">
                        <div class="position-relative">
                            <input type="search"
                                class="form-control form-control-dark text-bg-white ps-5  input-search "
                                placeholder="Search for another" aria-label="Search">
                            <img src="{{ url('images/search.png') }}" alt="Search Icon"
                                style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%); width: 20px;">
                        </div>
                    </form>
                </div>

                <div class="text-end d-flex  ">
                    <a class="font-medium  text-white  txt-signup  text-decoration-none " href="{{ url('register') }}">SignUp</a>
                    <a class="font-medium  text-white  txt-signup  text-decoration-none " href="{{ url('login') }}">Login</a>
                </div>
            </div>
        </div>
    </nav>





    {{-- Hero Section --}}

    <section class="container hero mt-219">
        <div class="row align-items-center h-100">
            <div class="col-12 col-lg-6">
                <h1 class="mb-20">Discover a World of Products at Your Fingertips</h1>
                <p class="mt-24">MarketHub is your trusted platform for finding the best products at unbeatable prices.
                    Explore our vast catalog of items across various categories, all from the comfort of your home.</p>
                <div class="d-flex justify-content-start gap-3 ">
                    <a href="#" class="btn btn-explore">Explore Now</a>
                    <a href="#" class="btn btn-explore">create account</a>
                </div>

            </div>

            <div class="col-12 col-lg-6 h-415 order-first order-lg-last mb-3 mb-lg-0">
                <img class="hero-image float-lg-end" src="{{ url('images/hero-img.png') }}" alt="">
            </div>
        </div>
    </section>



    {{-- Benefits --}}

    <section id="benefits"  data-aos="fade-up"data-aos-duration="3000" >
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-96">
                    <h1>Benefits of Shopping with Us</h1>
                    <p>Why Choose MarketHub?</p>
                </div>
                <div class="d-flex justify-content-center me-10">
                    <div class="row mt-5">
                        <div class="col-md-4 text-center">
                            <div class="card-layanan m-32 ">
                                <div class="circle-icon position-relative mx-auto">
                                    <img src="{{ url('images/img-1.png') }}" alt="">
                                </div>
                                <h3 class="mt-4  ">Wide Selection of Products</h3>
                                <p class="mt-3 text-white ">
                                    Explore a diverse range of products from
                                    electronics to fashion, all in one place
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-4 text-center">
                            <div class="card-layanan m-32 ">
                                <div class="circle-icon position-relative mx-auto">
                                    <img src="{{ url('images/img-2.png') }}" alt="">
                                </div>
                                <h3 class="mt-4  ">Secure Payment Options</h3>
                                <p class="mt-3 text-white ">
                                    Shop with confidence using our secure
                                    and encrypted payment methods.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-5">
                        <div class="col-md-4 text-center">
                            <div class="card-layanan m-32 ">
                                <div class="circle-icon position-relative mx-auto">
                                    <img src="{{ url('images/img-3.png') }}" alt="">
                                </div>
                                <h3 class="mt-4  ">Fast and Reliable Delivery</h3>
                                <p class="mt-3 text-white ">
                                    Enjoy quick and dependable delivery
                                    right to your doorstep
                                </p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>



    {{-- Latest produscts --}}

    <section id="Latest"   data-aos="fade-up"data-aos-duration="3000"     >
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-96 ">
                    <h1>Latest Products</h1>
                    <p>Check out the latest products added <br /> to our collection</p>
                </div>

                <div class="d-flex justify-content-center flex-wrap">
                    <!-- Card 1 -->
                    <div class="card-latest"  >
                        <img src="{{ url('images/img-4.png') }}" alt="Iphone 15 Pro Max" class="card-img">
                        <div class="card-content">
                            <h3>Iphone 15 Pro Max</h3>
                            <p class="text-white">Deskripsi: barang nya bagus banget enak di bawah ke mana mana</p>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary">
                                    <img src="{{ url('images/shopping.png') }}" alt="Shopping Icon" class="button-icon">
                                    Start Shopping Now
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="card-latest">
                        <img src="{{ url('images/img-5.png') }}" alt="Macbook" class="card-img">
                        <div class="card-content">
                            <h3>Macbook</h3>
                            <p class="text-white">Deskripsi: barang nya bagus banget enak di bawah ke mana mana</p>
                            <div class="d-flex btn-shop ">
                                <a href="#" class="btn btn-primary  ">
                                    <img src="{{ url('images/shopping.png') }}" alt="Shopping Icon" class="button-icon">
                                    Start Shopping Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="card-latest">
                        <img src="{{ url('images/img-6.png') }}" alt="Macbook" class="card-img">
                        <div class="card-content">
                            <h3>Macbook</h3>
                            <p class="text-white">Deskripsi: barang nya bagus banget enak di bawah ke mana mana</p>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary">
                                    <img src="{{ url('images/shopping.png') }}" alt="Shopping Icon" class="button-icon">
                                    Start Shopping Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Customer Testimonial --}}

    <section id="customer-testi"   data-aos="fade-up"data-aos-duration="3000"   >
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-96">
                    <h1>Customer Testimonials</h1>
                    <p class="text-black">What our customers say</p>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <!-- Testimonial Card -->
                <div class="testi-card">
                    <div class="testi-profile">
                        <img src="{{ url('images/img-7.png') }}" alt="Jayden" class="profile-img">
                        <h3>Jayden</h3>
                    </div>
                    <p>Untuk pelayanan di sini ramah dan fast respon selain itu di MarketHub menyediakan berbagai macam
                        Produk.</p>
                </div>
                <div class="testi-card">
                    <div class="testi-profile">
                        <img src="{{ url('images/img-7.png') }}" alt="Jayden" class="profile-img">
                        <h3>Jayden</h3>
                    </div>
                    <p>Untuk pelayanan di sini ramah dan fast respon selain itu di MarketHub menyediakan berbagai macam
                        Produk.</p>
                </div>
                <div class="testi-card">
                    <div class="testi-profile">
                        <img src="{{ url('images/img-7.png') }}" alt="Jayden" class="profile-img">
                        <h3>Jayden</h3>
                    </div>
                    <p>Untuk pelayanan di sini ramah dan fast respon selain itu di MarketHub menyediakan berbagai macam
                        Produk.</p>
                </div>
            </div>
        </div>
    </section>

  @include('components.footer')

</body>

<script>
    AOS.init();
  </script>
</html>
