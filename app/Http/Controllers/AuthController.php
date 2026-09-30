<?php

namespace App\Http\Controllers;

use App\Models\Product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Render the login blade view
    public function showLogin()
    {
        return view('auth.login');
    }

    // Authenticate the user credentials
    public function login(Request $request)
    {
        // 1. Validate inputs
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Evaluate credentials against DB registry
        $remember = $request->has('remember');
        
        if (Auth::attempt($credentials, $remember)) {
            // Regenerate session token to mitigate fixation vulnerabilities
            $request->session()->regenerate();

            return redirect()->intended('product');
        }

        // 3. Fallback state for failed records
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
