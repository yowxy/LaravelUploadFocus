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
    <nav id="MineFolioX">
        <a class="navbar-brand" href="{{ url('/') }}">MineFolioX</a>
    </nav>

    <div class="MineFolioX-input">
        <img src="{{ url('images/work11.png') }}" alt="" class="img-work">
        <div class="MineFolioX-input-bawah">

            <form action="{{ route('pages.register') }}" method="POST">
                @csrf
                <div style="width: 463px; height: 118px; left: 0px; top: 131px; position: absolute">
                    <p class="register-name-email">Email</p>
                    <input type="email" name="email" class="register-input-email" placeholder="Pastikan email telah di inputkan">
                </div>

                <div style="width: 463px; height: 118px; left: 0px; top: 0px; position: absolute">
                    <p class="register-name">Name</p>
                    <input type="text" name="name" class="register-input-name" placeholder="Pastikan nama nya telah di isi">
                </div>

                <div style="width: 463px; height: 128px; left: 0px; top: 262px; position: absolute">
                    <p class="register-password">Password</p>
                    <input type="password" name="password" class="register-input-password" placeholder="Pastikan password nya telah di isi">
                </div>

                <div style="width: 463px; height: 128px; left: 0px; top: 403px; position: absolute">
                    <p class="register-confirm-password">Confirm Password</p>
                    <input type="password" name="password_confirmation" class="register-input-pw" placeholder="Pastikan password yang di input sama">
                </div>

                <div style="width: 463px; height: 73px; left: 0px; top: 590px; position: absolute">
                    <button class="btn-register">Register</button>
                </div>

            </form>

        </div>
        <div style="width: 329px; height: 122px; left: 798px; top: 0px; position: absolute">
            <h1 class="txt-MineFolioX">MineFolioX</h1>
            <p class="txt-paragraf">The best Platfrom can you share <br />your portofolio or any design </p>
        </div>
    </div>

</body>

</html>
