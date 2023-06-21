<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('superadmin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('nip', 'password');

        if (Auth::attempt($credentials)) {
            // Login berhasil
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'nip' => 'nip atau password salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/superLogin');
    }
}
