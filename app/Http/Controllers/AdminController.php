<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Models\Toko;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    function index()
    {
        $monthlyProductData = Produk::selectRaw('EXTRACT(MONTH FROM created_at) as month, COUNT(*) as count')
        ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $monthlyProductCounts = array_fill(1, 12, 0);
        foreach ($monthlyProductData as $month => $count) {
            $monthlyProductCounts[$month] = $count;
        }
        $monthlyProductData = array_values($monthlyProductCounts);

        $monthlyStoreData = Toko::selectRaw('EXTRACT(MONTH FROM created_at) as month, COUNT(*) as count')
        ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $monthlyStoreCounts = array_fill(1, 12, 0);
        foreach ($monthlyStoreData as $month => $count) {
            $monthlyStoreCounts[$month] = $count;
        }
        $monthlyStoreData = array_values($monthlyStoreCounts);
        
        return view(
            'admin',
            [
                'monthlyProductData' => $monthlyProductData,
                'monthlyStoreData' => $monthlyStoreData,
            ]
        );
    }

    public function adminProduct()
    {
        $produks = Produk::with('tokos')->get();
        return view('adminProduct', ['produks' => $produks]);
    }
    public function storeToko(Request $request)
    {
        
        $request->validate([
            'storeName' => 'required|string|max:255',
            'storeLink' => 'required|url',
            'storeDescription' => 'required|string',
            'storeImage' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'iduser' => 'required|exists:users,id', 
        ]);
    
        $user = User::create([
            'name' => $request->storeName,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'toko'
        ]);


        $imageName = time() . '.' . $request->storeImage->extension();
        $request->storeImage->move(public_path('images/stores'), $imageName);
    
       
        Toko::create([
            'namatoko' => $request->storeName,
            'linktoko' => $request->storeLink,
            'deskripsitoko' => $request->storeDescription,
            'fototoko' => 'images/stores/' . $imageName,
            'iduser' => $request->iduser, 
            "tglgabung" => now()
        ]);

        
    
        return redirect()->view('adminToko')->with('success', 'Toko berhasil ditambahkan');
    }

    public function adminToko() {
        $tokos = Toko::withCount('produks')->get(); 
        return view('adminToko', compact('tokos'));
    }

    public function hapusProduct($id) {
        Produk::where('id', $id)->delete();
        return redirect()->route('adminProduct')->with('success', 'Produk berhasil dihapus');
    }

}