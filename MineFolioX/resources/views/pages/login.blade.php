<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MineFolioX</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/scss/index.scss','resources/app/js'])

</head>

<body>

    <nav id="MineFolioX">
        <a class="navbar-brand" href="{{ url('/') }}"  >MineFolioX</a>
    </nav>

    <div class="MineFolioX-input">
        <img src="{{ url('images/orang kantoran.png') }}" alt="" class="img-work" >
        <div class="MineFolioX-input-bawah">
            <div style="width: 463px; height: 118px; left: 0px; top: 0px; position: absolute">
                <p class="name-email">Email</p>
                <input class="input-email text-white " type="email"  placeholder="Pastikan telah menginputkan sebuah email"></input>
            </div>
            <div style="width: 463px; height: 128px; left: 0px; top: 130px; position: absolute">
                <p class="name-password">Password</p>
                <input class="input-password text-white " type="password" placeholder="Pastikan telah menginputkan password" ></input>
            </div>
            <div style="width: 463px; height: 73px; left: 0px; top: 312px; position: absolute">
                <button type="submit" class="btn-submit fs-40 fw-semibold ">Login</button>
            </div>
        </div>
        <div style="width: 329px; height: 122px; left: 798px; top: 0px; position: absolute">
            <h1 class="txt-MineFolioX">MineFolioX</h1>
            <p class="txt-paragraf">The best Platfrom can you share <br />your portofolio or any design </p>
        </div>
    </div>




</body>

</html>
