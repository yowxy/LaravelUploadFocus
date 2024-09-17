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
