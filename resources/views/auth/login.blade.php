<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow p-4" style="width:400px;">
        <h3 class="text-center mb-4">Login</h3>
       @if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif
        <form method="POST" action="{{ route('user.login') }}">
            @csrf

            <!-- Email or Phone -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="emal"
                       name="email"
                       class="form-control @error('email') is-invalid @enderror"
                       placeholder="Enter email"
                       required>

                @error('login')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       required>
            </div>

            <!-- Remember -->
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember">
                <label class="form-check-label">Remember Me</label>
            </div>

            <button class="btn btn-primary w-100">
                Login
            </button>
        </form>

        <div class="text-center mt-3">
            <a href="{{ route('register') }}">Create Account</a>
        </div>
    </div>

</div>

</body>
</html>