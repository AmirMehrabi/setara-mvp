<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Stylist;
use Illuminate\Support\Facades\Hash;

class StylistAuthController extends Controller
{

    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
        // $this->middleware('guest:stylist')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.stylists.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('stylist')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/stylist/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegistrationForm()
    {
        return view('auth.stylists.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:stylists',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $stylist = Stylist::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('stylist')->login($stylist);

        return redirect()->intended('/stylist/dashboard');
    }

    public function logout()
    {
        Auth::guard('stylist')->logout();
        return redirect('/');
    }
}
