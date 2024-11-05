<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
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
        $categories = Kategori::get(); 
        return view('product', compact('produks', 'categories'));
    }

    public function searchProduct(Request $request)
    {
        $inputan = $request->input('inputan');
        $produks = Produk::where('namaproduk', 'ilike', '%' . $inputan . '%')->get();
        return view('product', compact('produks'));
    }

    public function filterProduct(Request $request) {

        $query = Produk::query();
        if ($request->has('sort')) {
            if ($request->sort == 'harga-desc') {
                $query->orderBy('hargaproduk', 'desc');
            } elseif ($request->sort == 'harga-asc') {
                $query->orderBy('hargaproduk', 'asc');
            }
        }
    
        if ($request->has('kategori_id')) {
            $query->where('idkategori', $request->kategori_id);
        }
    
        $produks = $query->get();
        $categories = Kategori::all();
    
        return view('product', compact('produks', 'categories'));

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
