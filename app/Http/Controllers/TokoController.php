<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Validation\Rule;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;


class TokoController extends Controller
{
    public function dashboard()
    {
        return view('dashboardToko');
    }

    
    public function createProduct(Request $request)
{
    // Validasi input
    $user = Auth::user();
    $tokoId = $user->toko ? $user->toko->id : null;
    // dd($request->all());

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
        'idkategori' => 'required|exists:kategoris,id',
        'statusdisplay' => 'required|in:1,0',
    ],  [
        
        'namaproduk.unique' => 'Nama produk sudah ada, jangan mendua!'
        
    ]);
    

    
    $imageName = time() . '.' . $request->fotoproduk->extension(); 
    $request->fotoproduk->move(public_path('images/stores'), $imageName);//set direc

    
    Produk::create([
        'namaproduk' => $request->namaproduk,
        'hargaproduk' => $request->hargaproduk,
        'overviewproduk' => $request->overviewproduk,
        'deskripsiproduk' => $request->deskripsiproduk,
        'linkproduk' => $request->linkproduk,
        'fotoproduk' => 'img/' . $imageName, 
        'idtoko' => $tokoId,
        'idkategori' => $request->idkategori,
        'tglposting' => now(),
        'statusdisplay' => $request->statusdisplay,
    ]);



    return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
}

    public function profile()
    {
        $user = Auth::user()->load('toko');
        return view('profilToko', compact('user'));
    }

    public function createProductview()
    {
        $kategoris = Kategori::all(); // Mengambil semua kategori
        return view('/tambahProduct', compact('kategoris')); // Ganti dengan path view Anda
    }
}