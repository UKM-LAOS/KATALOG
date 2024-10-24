<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('adminProfil', compact('user'));
    }

    public function update(UsersRequest $request, User $profiladmin)
    {
        $profiladmin->email = $request->email;
        $profiladmin->password = $request->password;
        if ($request->filled('password')) {
            $profiladmin->password = bcrypt($request->input('password'));
        }

        $profiladmin->save();

        return redirect()->route('profiladmin.index')->with('success', 'Profil berhasil diperbarui');
    }

}
