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

    if ($request->filled('password')) {
        $profiladmin->password = bcrypt($request->input('password'));
    }else {
            unset($profiladmin->password);
        }

    if ($profiladmin->isDirty()) {
        $profiladmin->save();
        return redirect()->route('profiladmin.index')->with('success', 'Profil berhasil diperbarui');
    }

    return redirect()->route('profiladmin.index');
    }

}
