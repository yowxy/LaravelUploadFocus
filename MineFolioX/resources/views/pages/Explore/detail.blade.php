<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/scss/index.scss', 'resources/app/js'])
    <title>Document</title>
</head>

<body>
    @include('components.navbar')

    <section id="txt-showPorto">
        <div class="container">
            <h1>Show Your Portofolio</h1>

            <div class="d-flex  flex-col" id="button-link">
                @guest
                <div class="btn-loginCreate  me-4">
                    <a href="{{ url('login') }}" class="text-decoration-none text-white">Login To CreatePortofolio</a>
                </div>
                @endguest


                <div class="btn-category me-2">
                    <a href="{{ route('search.index', ['category' => 'UI/UX Design']) }}" class="btn-category  text-decoration-none ">
                        <p class="mt-2">UIUX Design</p>
                    </a>
                </div>
                <div class="btn-category me-2">
                    <a href="{{ route('search.index', ['category' => 'Graphic Design']) }}" class="btn-category text-decoration-none ">
                        <p class="mt-2">Graphic Design</p>
                    </a>
                </div>
                <div class="btn-category" style="width: 242px">
                    <a href="{{ route('search.index', ['category' => 'Website Development']) }}" class="btn-category text-decoration-none">
                        <p class="mt-2">Website Development</p>
                    </a>
                </div>

            </div>
                                                                                                                   

            @foreach ($portofolios as $portofolio)
                {{-- yang bisa di tekan ke href cuman 1 aja hehehe --}}
                <a class="card-detail  row text-decoration-none" href="{{ route('pages.profile.show', $portofolio->id) }}">
                    <div class="col-10">
                        <h1>{{ $portofolio->title }}</h1>
                        <p>
                            {{ $portofolio->description }}
                        </p>

                        <p class="category">Kategori: {{ $portofolio->category->name ?? 'Tidak ada kategori' }}</p>

                    </div>
                    <div class="col-1 d-flex justify-content-end align-items-end">
                        <img src="{{ filter_var($portofolio->user->picture, FILTER_VALIDATE_URL) ? $portofolio->user->picture : Storage::url($portofolio->user->picture) }}"
                        alt="{{ $portofolio->user->name }}" class="avatar rounded-circle">

                        <div class="m-0 txt-profile">
                            <h1 class="mb-0 mr-10">{{ $portofolio->name }}</h1>
                            <p class="mt-0 mr-10">{{ $portofolio->created_at->diffForHumans() }}</p>
                        </div>
                    </div>

                </a>
            @endforeach




            </div>
            <div class="pagination justify-content-center mt-4 ">
                {{ $portofolios->links() }}
            </div>

    </section>


    @include('components.footer')

</body>

</html>
