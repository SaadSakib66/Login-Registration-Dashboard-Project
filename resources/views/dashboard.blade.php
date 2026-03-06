<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md text-center">
        <!-- Success message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Optional: Login error -->
        @if(session('error'))
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <h1 class="text-2xl font-bold mb-4">Welcome, {{ $user->name ?? 'User' }}!</h1>
        <p class="mb-6">You have successfully logged in.</p>

        <a href="/logout" class="bg-blue-600 text-white p-2 rounded hover:bg-blue-700">
            Logout
        </a>
    </div>

</body>
</html>