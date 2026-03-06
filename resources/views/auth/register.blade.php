<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">

    <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

    {{-- Global Errors --}}
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('user.register') }}">
        @csrf

        {{-- Name --}}
        <div class="mb-3">
            <input type="text"
                name="name"
                placeholder="Full Name"
                value="{{ old('name') }}"
                class="w-full border p-2 rounded @error('name') border-red-500 @enderror"
                required>

            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <input type="email"
                name="email"
                placeholder="Email"
                value="{{ old('email') }}"
                class="w-full border p-2 rounded @error('email') border-red-500 @enderror"
                required>

            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Phone --}}
        <div class="mb-3">
            <input type="text"
                name="phone"
                placeholder="Phone (optional)"
                value="{{ old('phone') }}"
                class="w-full border p-2 rounded @error('phone') border-red-500 @enderror">

            @error('phone')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Date of Birth --}}
        <div class="mb-3">
            <input type="date"
                name="dob"
                value="{{ old('dob') }}"
                class="w-full border p-2 rounded @error('dob') border-red-500 @enderror">

            @error('dob')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Password --}}
        <div class="mb-3">
            <input type="password"
                name="password"
                placeholder="Password"
                class="w-full border p-2 rounded @error('password') border-red-500 @enderror"
                required>

            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Confirm Password --}}
        <div class="mb-4">
            <input type="password"
                name="password_confirmation"
                placeholder="Confirm Password"
                class="w-full border p-2 rounded"
                required>
        </div>

        {{-- Submit --}}
        <button
            class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700 transition">
            Register
        </button>

        <p class="text-center mt-4 text-sm">
            Already have an account?
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
                Login
            </a>
        </p>

    </form>
</div>

</body>
</html>