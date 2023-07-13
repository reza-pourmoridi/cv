<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class LoginAdminController extends Controller
{
    // Display the login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle the login form submission
    public function login(Request $request)
    {
        // Perform authentication logic here
        // Example: check credentials and log in the user

        if (1 == 1) {
            // User authenticated successfully
            return redirect('/admin/dashboard');
        } else {
            // Authentication failed
            return redirect()->back()->withInput()->withErrors(['login' => 'Invalid credentials']);
        }
    }
}
