<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProfilTokoRequest;
use App\Models\User;
// use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Validation\Rule;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Storage;

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

    public function profileEdit(ProfilTokoRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = FacadesHash::make($request->password);
        }
    
        // $user->save();

        $toko = $user->toko;
        $toko->namatoko = $request->namatoko;
        $toko->linktoko = $request->linktoko;
        $toko->deskripsitoko = $request->deskripsitoko;

        if ($request->hasFile('fototoko')) {
            if ($toko->fototoko) {
                Storage::delete('public/' . $toko->fototoko);
            }
    
            // Simpan foto toko baru
            $toko->fototoko = $request->file('fototoko')->store('toko', 'public');
            // if ($toko->fototoko) {
            //     $fotoLama = storage_path('app/public' . $toko->fototoko);
            //     if (file_exists($fotoLama)) {
            //         unlink($fotoLama);
            //     }
            // }

            // $tempatFoto = $request->file('fototoko')->store('FotoToko');
            // $tempatFoto = str_replace('public/', '', $tempatFoto);
            // $toko->fototoko= $tempatFoto;
        }
        // $toko->save();
        if ($user->isDirty() || $toko->isDirty()) {
            $user->save();
            $toko->save();
            return redirect()->route('profilToko')->with('success', 'Profil berhasil diperbarui');
        }
    
        return redirect()->route('profilToko');
        // return redirect()->route('profilToko')->with('success', 'Profil toko berhasil diperbarui.');

    }


    public function createProductview()
    {
        $kategoris = Kategori::all(); // Mengambil semua kategori
        return view('/tambahProduct', compact('kategoris')); // Ganti dengan path view Anda
    }
}