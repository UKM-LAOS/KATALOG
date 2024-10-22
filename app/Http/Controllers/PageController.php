<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $Terpopuler = Produk::with('kategori')
        ->where('statusdisplay', 1)
        ->orderByDesc('totalklik')
        ->limit(3)
        ->get();
        return view('homepage', compact('Terpopuler'));
    }

    public function product()
    {
        $produks = Produk::with('kategori')->get();
        return view('product', compact('produks'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function detailProduct($id)
    {
        $produk = Produk::with('kategori')->findOrFail($id);
        return view('detailProduct', compact('produk'));
    }
}
