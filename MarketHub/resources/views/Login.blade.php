<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="login-input">
        <div class="username-input">
            <p class="text-white">Email</p>
            <input type="email" class="input-text" name="email" required>
        </div>
        <div class="password-input">
            <p class="text-white">Password</p>
            <input type="password" class="input-text" name="password" required>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <button class="btn-login" type="submit">Login</button>
    </div>
</form>
