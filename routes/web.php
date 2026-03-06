<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| Each route is explained with comments below.
|
*/

// Root route: Shows the default welcome page
Route::get('/', function () {
    return view('welcome'); // Load the welcome Blade view
});

// Login page route: Shows the login form
Route::get("/login", [AuthController::class, 'login'])->name('login');

// Registration page route: Shows the registration form
Route::get("/registration", [AuthController::class, 'registration'])->name('register');

// Register form submission route: Handles new user registration
Route::post("/register", [AuthController::class, 'register'])->name('user.register');

// Login form submission route: Handles user login authentication
Route::post("/user-login", [AuthController::class, 'user_login'])->name('user.login');

// Dashboard route: Shows the user dashboard after login
Route::get("/dashboard", [AuthController::class, 'dashboard'])->name('dashboard');

// Logout route: Logs out the user and clears session/cookie
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');