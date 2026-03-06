<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    /**
     * Show the login page.
     */
    public function login()
    {
        return view("auth.login"); // Return the login Blade view
    }

    /**
     * Show the registration page.
     */
    public function registration()
    {
        return view("auth.register"); // Return the register Blade view
    }

    /**
     * Handle user registration form submission.
     * Validate input, save user to database, and redirect to login with success message.
     */
    public function register(Request $request)
    {
        // Validate user input
        $validData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'phone' => 'nullable|unique:users',
            'dob' => 'nullable|date',
            'password' => 'required|confirmed|min:6',
        ]);

        // Create a new user instance
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->dob = $request->dob;
        $user->password = Hash::make($request->password); // Hash the password before saving
        $user->save(); // Save user to database

        // Redirect to login page with a success message
        return redirect("login")->with('success', 'Registration successful');
    }

    /**
     * Handle user login form submission.
     * Validate input, check credentials, set cookie, and show dashboard.
     */
    public function user_login(Request $request)
    {
        // Validate login input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        // Check if user exists and password matches
        if ($user && Hash::check($request->password, $user->password)) {
            // Create the cookie instance
            $cookie = cookie('user_id', $user->id, 60 * 24);


            // return response(view('dashboard', compact('user')))->cookie($cookie);
            return redirect('/dashboard')->cookie($cookie);
        }

        // If login fails, redirect back with error message
        return redirect()->back()->with('error', 'Invalid email or password');
    }

    /**
     * Show the dashboard page.
     */
    public function dashboard(Request $request)
    {
        // Retrieve the user_id from the cookie
        $userId = $request->cookie('user_id');

        // Find the user or redirect to login if the cookie is missing
        $user = User::find($userId);

        if (!$user) {
            return redirect('/login')->with('error', 'Please login first.');
        }

        return view('dashboard', compact('user'));
    }

    /**
     * Log the user out.
     * Remove the user_id cookie and redirect to login page with a success message.
     */
    public function logout(Request $request)
    {
        // Forget the 'user_id' cookie
        $cookie = Cookie::forget('user_id');

        // Redirect to login page with a success message and delete the cookie
        return redirect('/login')
            ->with('success', 'Logged out successfully')
            ->cookie($cookie);
    }
}
