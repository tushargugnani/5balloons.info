<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('frontend.login');
    }

    public function login(LoginRequest $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        }

        return redirect()->back()->with('error', 'Invalid credentials provided!');
    }
}
