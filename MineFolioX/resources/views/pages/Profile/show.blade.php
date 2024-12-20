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

    @vite(['resources/scss/index.scss', 'resources/app/js'])
</head>

<body>
    @include('components.navbar')


    <section id="detail-profile">
        <div class="container">
            @auth
                <div class="txt-judul">
                    <h1>{{ $portofolio->name }}</h1>
                    <h2>{{ $portofolio->title }}</h2>
                    <div class="mt-4">
                        <img src="{{ asset('storage/' . $portofolio->image_path) }}" alt="Gambar Portofolio"
                            class="img-fluid  rounded-2xl ">
                    </div>
                    <p class="txt-p">{{ $portofolio->description }}</p>
                    <p class="category">Kategori: {{ $portofolio->category->name ?? 'Tidak ada kategori' }}</p>
                </div>
            @endauth
            @guest
                <div class="text-" style="margin: 300px">
                    <h1 class="text-center  text-red-700 "> <a href="{{ route('pages.login') }}"
                            class="text-decoration-none text-red-700 ">Sign-In</a> or
                        <a href="{{ route('pages.register') }}" class="text-decoration-none text-red-700 ">Sign-Up</a>
                        To see detail Portofolio <br>
                    </h1>
                </div>
            @endguest
        </div>
    </section>



    @include('components.footer')
</body>

</html>
