<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/scss/index.scss','resources/app/js'])
    <title>Document</title>
</head>
<body>
    @include('components.navbar')

    <section id="index-detailUser" >
        <div class="container" >
            <div class="d-flex detail-Profile" >
                <img src="{{ url('images/profile-2.png') }}" alt="Detail Profile" class="img-detailUser" >
                <h1 class="mx-4 txt-h1User" >Alexander</h1>
            </div>
            <p class="mt-4" >The best Platfrom can you share <br>
                your portofolio or any design <br>
            </p>

            <div class="d-flex" >
                <div id="card-detail" class="me-3">
                    <h1>How To Create Website in 1 Hour</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting <br>
                        industry. Lorem Ipsum has been the industry's standard dummy text <br>
                        ever since the 1500s, when an unknown printer took a galley of type <br>
                        and scrambled it to make a type specimen book. <br>
                    </p>
                    <a href="" class="btn-seeDetail " >See detail</a>
                </div>


                <div id="card-detail" class="me-5" >
                    <h1>How To Create Website in 1 Hour</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting <br>
                        industry. Lorem Ipsum has been the industry's standard dummy text <br>
                        ever since the 1500s, when an unknown printer took a galley of type <br>
                        and scrambled it to make a type specimen book. <br>
                    </p>
                    <a href="" class="btn-seeDetail " >See detail</a>
                </div>
            </div>

            <div id="txt-login" class="text-center " >
                <p>Please To <a href="{{ url('login') }}" class="txt-sign-In" >sign-in </a> To create  <span class="txt-sign-In" >Portofolio</span></p>
            </div>


        </div>
    </section>

    @include('components.footer')
</body>
</html>
