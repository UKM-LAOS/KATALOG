<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi ya sayang',
            'password.required' => 'Password harus diisi ya sayang',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return redirect('admin');
        } else {
            return redirect('login')->withErrors('pesan', 'Email atau Password salah')->withInput();
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('homepage');
    }
}
