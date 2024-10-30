<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/scss/index.scss','resources/app/js'])
</head>

<body>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Profile Section -->
    <section id="profile">
        <div class="container">
            <div class="d-flex align-items-center mb-4">
                <img src="{{ filter_var(auth()->user()->picture, FILTER_VALIDATE_URL) ? auth()->user()->picture : Storage::url(auth()->user()->picture) }}"
                alt="{{ auth()->user()->name }}" class="avatar rounded-circle">

                <div class="card-profile ms-3">
                    <h1>{{ auth()->user()->name }}</h1>
                    <p class="m-0">Software Engineer</p>
                    <p class="txt-description mb-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
            </div>

            <!-- Edit and Upload Actions -->
            <div class="d-flex mb-5">
                <div id="edit-profile" class="text-center pt-1 fw-medium me-3">
                    Edit Profile
                </div>
                <a id="edit-profile1" class="text-center pt-1 fw-medium" href="{{ route('profile.upload') }}">
                    Upload Portfolio
                </a>
            </div>

            <!-- Portfolio Section -->
            <div id="My-Portofolio">
                <h1 class="text-center mb-4">My Portfolio</h1>
                <div class="d-flex flex-wrap justify-content-center">
                    @foreach ($portfolios as $portfolio)
                        <div class="card-Detail me-4 mb-4">
                            <h1>{{ $portfolio->title }}</h1>
                            <p>{{ $portfolio->description }}</p>
                            <p class="category">Kategori: {{ $portfolio->category->name ?? 'Tidak ada kategori' }}</p>
                            <a href="{{ route('pages.profile.show', $portfolio->id) }}" class="btn-seedetail">See detail</a>
                            <a href="{{ route('pages.portofolio.edit', $portfolio->id) }}" class="card-edit">Edit</a>
                              <!-- Form untuk menghapus portofolio -->

                            <form action="{{ route('portofolio.destroy', $portfolio->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="card-delete">Delete</button>
                            </form>

                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="pagination justify-content-center">
                    {{ $portfolios->links() }}
                </div>
                    <h1 class="txt-akhir text-center">Thank you for visiting my account</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')
</body>

</html>
