<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $Terpopuler = Produk::with('kategori')
        ->where('statusdisplay', 1)
        ->orderByDesc('totalklik')
        ->limit(3)
        ->get();
        return view('homepage', compact('Terpopuler'));
    }
    
}
