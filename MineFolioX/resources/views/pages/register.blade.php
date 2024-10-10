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

            <form action="{{ route('pages.registerr') }}" method="POST">
                @csrf
                <div style="width: 463px; height: 118px; left: 0px; top: 131px; position: absolute">
                    <label class="">Email</label>
                    <input type="email" name="email" class="register-input-email  @error('email') is-invalid  @enderror  " placeholder="Pastikan email telah di inputkan" 
                    autocomplete="off"  value="{{ old('email') }}" >

                    @error('email')
                        <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror

                </div>

                <div style="width: 463px; height: 118px; left: 0px; top: 0px; position: absolute">
                    <label class="">Name</label>
                    <input type="text" name="name" class="register-input-name     @error('name') is-invalid  @enderror      " placeholder="Pastikan nama nya telah di isi"  
                    autocomplete="off"  value="{{ old('name') }}" >

                    @error('name')
                    <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror


                </div>

                <div style="width: 463px; height: 128px; left: 0px; top: 262px; position: absolute">
                    <label class="">Password</label>
                    <input type="password" name="password" class="register-input-password      @error('password') is-invalid  @enderror        " placeholder="Pastikan password nya telah di isi" 
                    autocomplete="off" >

                    @error('password')
                        <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror


                </div>

                <div style="width: 463px; height: 128px; left: 0px; top: 403px; position: absolute">
                    <label class="">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="register-input-pw     @error('password_confirmation') is-invalid  @enderror   "placeholder="Pastikan password yang di input sama" 
                    autocomplete="off">

                    @error('password_confirmation')
                        <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror


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
