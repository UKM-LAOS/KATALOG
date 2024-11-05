<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Validation\Rule;


class TokoController extends Controller
{
    public function dashboard()
    {
        return view('dashboardToko');
    }

    
    public function createProduct(Request $request)
{
    // Validasi input
    $request->validate([
        'namaproduk' => [
            'required',
            'string',
            'max:255',
            Rule::unique('produks')->where(function ($query) use ($request) {
                return $query->where('idtoko', $request->idtoko); //logic ini bwat ngecek produk unique di toko yang sama
            }),
        ],
        'hargaproduk' => 'required|numeric',
        'overviewproduk' => 'required|string',
        'deskripsiproduk' => 'required|string',
        'linkproduk' => 'required|url',
        'fotoproduk' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'idtoko' => 'required|exists:tokos,id',
    ]);

    
    $imageName = time() . '.' . $request->fotoproduk->extension(); 
    $request->fotoproduk->move(public_path('images/stores'), $imageName); //set direc

    
    Produk::create([
        'namaproduk' => $request->namaproduk,
        'hargaproduk' => $request->hargaproduk,
        'overviewproduk' => $request->overviewproduk,
        'deskripsiproduk' => $request->deskripsiproduk,
        'linkproduk' => $request->linkproduk,
        'fotoproduk' => 'img/' . $imageName, 
        'idtoko' => $request->idtoko,
        'tglposting' => now(),
    ]);

    return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
}

    public function profile()
    {
        return view('profilToko');
    }

    public function createProductview()
    {
        return view('/tambahProduct');
    }
}