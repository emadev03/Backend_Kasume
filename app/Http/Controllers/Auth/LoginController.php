<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login', []);
    }

    public function login(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['nip' => $request->nip, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return redirect('/login')->withErrors([
            'password' => 'NIP atau kata sandi salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
