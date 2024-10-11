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
    @include('components.profile')

    

    <section id="profile">
        <div class="container">
            <div class="d-flex">
                <img src="{{ url('images/profile-4.png') }}" alt="Profile-4" class="img-profile">
                <div class="card-profile">
                    <h1>Alexander Jayjo</h1>
                    <p class="m-0">Software Engginer</p>
                    <p class="txt-description mb-7 ">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. <br>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an <br>
                        unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                    </p>
                </div>
            </div>
            <div class="d-flex">
                <div id="edit-profile" class="text-center pt-1 fw-medium justify-content-center me-3">
                    Edit Profile
                </div>
                <a id="edit-profile1" class="text-center pt-1 fw-medium justify-content-center"  href="{{ route('profile.upload') }}">
                    Upload Portofolio
                </a>
            </div>

            <div id="My-Portofolio">

                <h1 class="text-center">My Portofolio</h1>

                <div class="d-flex">
                    <div class="card-Detail me-4">
                        <h1>How To Create Website in 1 Hour</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting <br>
                            industry. Lorem Ipsum has been the industry's standard dummy text <br>
                            ever since the 1500s, when an unknown printer took a galley of type <br>
                            and scrambled it to make a type specimen book. <br>
                        </p>
                        <a href="{{   route('profile.detail') }}" class="btn-seedetail">See detail</a>
                        <a href="{{   route('profile.detail') }}" class="card-edit">Edit</a>
                    </div>

                    <div class="card-Detail">
                        <h1>How To Create Website in 1 Hour</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting <br>
                            industry. Lorem Ipsum has been the industry's standard dummy text <br>
                            ever since the 1500s, when an unknown printer took a galley of type <br>
                            and scrambled it to make a type specimen book. <br>
                        </p>
                        <a href="{{   route('profile.detail') }}" class="btn-seedetail">See detail</a>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="card-Detail me-4">
                        <h1>How To Create Website in 1 Hour</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting <br>
                            industry. Lorem Ipsum has been the industry's standard dummy text <br>
                            ever since the 1500s, when an unknown printer took a galley of type <br>
                            and scrambled it to make a type specimen book. <br>
                        </p>
                        <a href="{{ route('profile.detail') }}" class="btn-seedetail">See detail</a>
                    </div>

                    <div class="card-Detail">
                        <h1>How To Create Website in 1 Hour</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting <br>
                            industry. Lorem Ipsum has been the industry's standard dummy text <br>
                            ever since the 1500s, when an unknown printer took a galley of type <br>
                            and scrambled it to make a type specimen book. <br>
                        </p>
                        <a href="{{ route('profile.detail') }}" class="btn-seedetail">See detail</a>
                    </div>

                </div>

                <div>
                    <h1 class="txt-akhir text-center" >Thank you For Visit My account</h1>
                </div>

            </div>
    </section>

    @include('components.footer')
</body>

</html>
