@vite(['resources/scss/index.scss', 'resources/app/js'])

{{-- Navbar Profile Section --}}

<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container mx-auto">
        <a class="txt-a" href="{{ url('/') }}">MineFolioX</a>
        <div class="d-flex w-100 justify-content-center">
            <form class="d-flex justify-content-center align-items-center" role="search">
                <div class="search-container d-flex align-items-center position-relative">
                    <img src="{{ url('images/search.png') }}" alt="Search Icon" class="search-icon">
                    <input class="input-search mx-2" type="search" placeholder="Search Your Portofolio"
                        aria-label="Search">
                </div>
                <div class="d-flex align-items-center profile-sec">
                    <img src="{{ url('images/profile-3.png') }}" alt="Profile Image" width="40px">
                    <div class="ms-2">
                        <p class="mb-0 fw-bold">Alexander</p>
                        <a href="#" class="text-muted small text-decoration-none">Lihat Profile</a>
                    </div>
                </div>

            </form>

        </div>
    </div>
</nav>
