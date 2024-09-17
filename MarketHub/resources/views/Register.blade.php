<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Register</title>
    @vite(['resources/scss/app.scss','resources/app/js'])
</head>

<body>

    @include('components.navbar')

    <div class="login-section d-flex d-inline-flex">
        <div class="text-section">
            <h1>Welcome to <br> MarketHub</h1>
            <p>Your Gateway to the Best Deals and Reviews</p>
        </div>
        <div class="card-login">
            <h1 class="text-center text-white">Register To <br>MarketHub</h1>

            <!-- Register Form -->
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="login-input">
                    <div class="username-input">
                        <p class="text-white">Username</p>
                        <div class="position-relative input-profile">
                            <img src="{{ url('images/profile.png') }}" alt="login-pp" class="position-absolute">
                            <input type="text" class="input-text" name="name" required>
                        </div>
                    </div>
                    <div class="password-input">
                        <p class="text-white">Password</p>
                        <div class="position-relative input-profile">
                            <img src="{{ url('images/password.png') }}" alt="login-pp" class="position-absolute">
                            <input type="password" class="input-text" name="password" required>
                        </div>
                    </div>

                    <!-- Password confirmation -->
                    <div class="password-input">
                        <p class="text-white">Confirm Password</p>
                        <div class="position-relative input-profile">
                            <img src="{{ url('images/password.png') }}" alt="login-pp" class="position-absolute">
                            <input type="password" class="input-text" name="password_confirmation" required>
                        </div>
                    </div>

                    <!-- Show validation errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button class="btn-login" type="submit">Register</button>
                    <p class="text-white font-normal">Already have an account?
                        <a href="{{ url('login') }}" class="text-decoration-none text-white">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    @include('components.footer')

</body>
</html>
