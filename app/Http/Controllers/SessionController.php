<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index()
    {
        return view('login');
    }

    function auth(Request $request)
    {

        $infoLogin = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $login = Auth::attempt($infoLogin);

        if (!$login) {
            return redirect('/login')->with('error', 'Username atau Password Salah');
        }

        return redirect('/admin');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}