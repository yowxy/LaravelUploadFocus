 {{-- Navbar --}}


 @vite(['resources/scss/index.scss','resources/app/js'])

 <nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container mx-auto">
        <a class="txt-a">MineFolioX</a>
        <div class="d-flex w-100 justify-content-center">
            <form class="d-flex justify-content-center align-items-center" role="search">
                <div class="search-container d-flex align-items-center position-relative">
                    <img src="{{ url('images/search.png') }}" alt="Search Icon" class="search-icon">
                    <input class="input-search mx-2" type="search" placeholder="Search Your Portofolio"
                        aria-label="Search">
                </div>
                <div class="d-flex">
                    <a class="btn-sign-in mx-2 px-2 text-decoration-none text-center justify-content-center" href="{{ url('register') }} ">Sign-Up</a>
                    <a class="btn-sign-in mx-2 px-2 text-decoration-none text-center justify-content-center" href="{{ url('login') }} ">Sign-In</a>
                </div>
            </form>

        </div>
    </div>
</nav>
