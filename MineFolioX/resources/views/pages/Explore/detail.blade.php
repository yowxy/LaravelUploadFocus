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
            <div class="btn-loginCreate">
                <a href="{{ url('login') }}" class="text-decoration-none text-white">Login To CreatePortofolio</a>
            </div>
            {{-- yang bisa di tekan ke href cuman 1 aja hehehe --}}
            <a class="card-detail  row text-decoration-none" href="{{ url('detail/show') }}">
                <div class="col-10">
                    <h1>How To Cook Noodle</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br>
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer <br>
                        took a galley of type and scrambled it to make a type specimen book. <br>
                    </p>
                </div>
                <div class="col-1  d-flex justify-content-end align-items-end ">
                    <img src="{{ url('images/profile-1.png') }}" alt="profile-detail" class="img-profile ">
                    <div class="m-0 txt-profile ">
                        <h1 class="mb-0 mr-10 ">Jayden</h1>
                        <p class="mt-0 mr-10">5 Hours Ago</p>
                    </div>
                </div>
            </a>


            <div class="card-detail  row">
                <div class="col-10">
                    <h1>How To Cook Noodle</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br>
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer <br>
                        took a galley of type and scrambled it to make a type specimen book. <br>
                    </p>
                </div>
                <div class="col-1  d-flex justify-content-end align-items-end ">
                    <img src="{{ url('images/profile-1.png') }}" alt="profile-detail" class="img-profile ">
                    <div class="m-0 txt-profile ">
                        <h1 class="mb-0 mr-10 ">Jayden</h1>
                        <p class="mt-0 mr-10">5 Hours Ago</p>
                    </div>
                </div>
            </div>
            <div class="card-detail  row">
                <div class="col-10">
                    <h1>How To Cook Noodle</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br>
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer <br>
                        took a galley of type and scrambled it to make a type specimen book. <br>
                    </p>
                </div>
                <div class="col-1  d-flex justify-content-end align-items-end ">
                    <img src="{{ url('images/profile-1.png') }}" alt="profile-detail" class="img-profile ">
                    <div class="m-0 txt-profile ">
                        <h1 class="mb-0 mr-10 ">Jayden</h1>
                        <p class="mt-0 mr-10">5 Hours Ago</p>
                    </div>
                </div>
            </div>
            <div class="card-detail  row">
                <div class="col-10">
                    <h1>How To Cook Noodle</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br>
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer <br>
                        took a galley of type and scrambled it to make a type specimen book. <br>
                    </p>
                </div>
                <div class="col-1  d-flex justify-content-end align-items-end ">
                    <img src="{{ url('images/profile-1.png') }}" alt="profile-detail" class="img-profile ">
                    <div class="m-0 txt-profile ">
                        <h1 class="mb-0 mr-10 ">Jayden</h1>
                        <p class="mt-0 mr-10">5 Hours Ago</p>
                    </div>
                </div>
            </div>
            <div class="card-detail  row">
                <div class="col-10">
                    <h1>How To Cook Noodle</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br>
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer <br>
                        took a galley of type and scrambled it to make a type specimen book. <br>
                    </p>
                </div>
                <div class="col-1  d-flex justify-content-end align-items-end ">
                    <img src="{{ url('images/profile-1.png') }}" alt="profile-detail" class="img-profile ">
                    <div class="m-0 txt-profile ">
                        <h1 class="mb-0 mr-10 ">Jayden</h1>
                        <p class="mt-0 mr-10">5 Hours Ago</p>
                    </div>
                </div>
            </div>
            <div class="card-detail  row">
                <div class="col-10">
                    <h1>How To Cook Noodle</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br>
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer <br>
                        took a galley of type and scrambled it to make a type specimen book. <br>
                    </p>
                </div>
                <div class="col-1  d-flex justify-content-end align-items-end ">
                    <img src="{{ url('images/profile-1.png') }}" alt="profile-detail" class="img-profile ">
                    <div class="m-0 txt-profile ">
                        <h1 class="mb-0 mr-10 ">Jayden</h1>
                        <p class="mt-0 mr-10">5 Hours Ago</p>
                    </div>
                </div>
            </div>
            <div class="card-detail  row">
                <div class="col-10">
                    <h1>How To Cook Noodle</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br>
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer <br>
                        took a galley of type and scrambled it to make a type specimen book. <br>
                    </p>
                </div>
                <div class="col-1  d-flex justify-content-end align-items-end ">
                    <img src="{{ url('images/profile-1.png') }}" alt="profile-detail" class="img-profile ">
                    <div class="m-0 txt-profile ">
                        <h1 class="mb-0 mr-10 ">Jayden</h1>
                        <p class="mt-0 mr-10">5 Hours Ago</p>
                    </div>
                </div>
            </div>
            <div class="card-detail  row">
                <div class="col-10">
                    <h1>How To Cook Noodle</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br>
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer <br>
                        took a galley of type and scrambled it to make a type specimen book. <br>
                    </p>
                </div>
                <div class="col-1  d-flex justify-content-end align-items-end ">
                    <img src="{{ url('images/profile-1.png') }}" alt="profile-detail" class="img-profile ">
                    <div class="m-0 txt-profile ">
                        <h1 class="mb-0 mr-10 ">Jayden</h1>
                        <p class="mt-0 mr-10">5 Hours Ago</p>
                    </div>
                </div>
            </div>

        </div>

    </section>


    @include('components.footer')

</body>

</html>
