<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password harus diisi ya sayang',
        ]);

        $credentials = $request->only('email', 'password');
        

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = User::find(Auth::user()->id);


            if ($user->hasRole('Admin')) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->hasRole('Toko')) {
                return redirect()->route('dashboardToko');
            } else {
                return redirect('/login')->withErrors('pesan', 'Role tidak dikenali');
            }
        } else {
            return redirect('login')->withErrors('pesan', 'Email atau Password salah')->withInput();
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
