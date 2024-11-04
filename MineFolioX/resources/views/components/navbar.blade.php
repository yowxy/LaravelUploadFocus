{{-- Navbar --}}
<!-- Add Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

@vite(['resources/scss/index.scss', 'resources/app/js'])

<nav class="navbar navbar-expand-lg bg-transparent" id="navbar-mineFolioX">
    <div class="container mx-auto">
        <a class="txt-a" href="{{ url('/') }}">MineFolioX</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <!-- Centered Search Form -->
            <div class="d-flex w-100 justify-content-center my-2 my-lg-0">
                <form class="d-flex justify-content-center align-items-center" role="search" method="POST" action="{{ route('search') }}">
                    @csrf
                    <div class="search-container d-flex align-items-center position-relative">
                        <img src="{{ url('images/search.png') }}" alt="Search Icon" class="search-icon">
                        <input class="input-search mx-2" type="search" name="search" placeholder="Search Your Portfolio" aria-label="Search" required>
                    </div>
                </form>
            </div>

            {{-- If user is authenticated --}}
            @auth
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item dropdown my-auto" style="list-style: none;">
                    <a class="nav-link p-0 d-flex align-items-center" href="javascript:;" id="dropdownMenuButton" data-bs-toggle="dropdown">
                        <div class="me-2">
                            <img src="{{ filter_var(auth()->user()->picture, FILTER_VALIDATE_URL) ? auth()->user()->picture : Storage::url(auth()->user()->picture) }}"
                                 alt="{{ auth()->user()->name }}" class="avatar rounded-circle">
                        </div>

                        <div class="text-left">
                            <span class="fw-bold">{{ auth()->user()->name }}</span>
                            <br>
                            <div class="d-flex">
                                <span class="me-1">Lihat</span>
                                <span>Profile</span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu mt-2">
                        <li>
                            <a class="dropdown-item" href="{{ route('profile') }}">My Profile</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Log out</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            @endauth

            {{-- If user is not authenticated (guest) --}}
            @guest
            <div class="d-flex ms-auto my-2">
                <a class="btn-sign-in mx-2 px-2 text-decoration-none text-center" href="{{ url('register') }}">Sign-Up</a>
                <a class="btn-sign-in mx-2 px-2 text-decoration-none text-center" href="{{ url('login') }}">Sign-In</a>
            </div>
            @endguest
        </div>
    </div>
</nav>
