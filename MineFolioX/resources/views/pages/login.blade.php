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


    <form action="{{ route('pages.login.post') }}" method="POST" >
        @csrf
        <div class="MineFolioX-input">
            <img src="{{ url('images/orang kantoran.png') }}" alt="" class="img-work" >
            <div class="MineFolioX-input-bawah">
                <div style="width: 463px; height: 118px; left: 0px; top: 0px; position: absolute">
                    <label for="email" >Email</label>
                    <input class="input-email text-white  @error('email') is-invalid @enderror   @error('credentials') is-invalid @enderror   " type="email" id="email" name="email"  placeholder="Pastikan telah menginputkan sebuah email"
                    value="{{ old('email') }}" autocomplete="off"  autofocus ></input>
                    @error('email')
                        <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                    @error('credentials')
                        <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                </div>
                <div style="width: 463px; height: 128px; left: 0px; top: 130px; position: absolute">
                    <label  for="password" >Password</label>
                    <input class="input-password text-white  @error('password') is-invalid  @enderror " type="password" name="password" id="password" placeholder="Pastikan telah menginputkan password" ></input>
                    @error('password')
                        <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
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
    </form>




</body>

</html>
