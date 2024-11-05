<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Models\Toko;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'email' => 'required|email|unique:users,email',
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
            'iduser' => $user->id,
            "tglgabung" => now()
        ]);

        return redirect('/tokoadmin')->with('success', 'Toko berhasil ditambahkan');
    }

    public function adminToko()
    {
        $tokos = Toko::withCount('produks')->get();
        return view('adminToko', compact('tokos'));
    }

    public function hapusProduct($id)
    {
        Produk::where('id', $id)->delete();
        return redirect('/produkadmin')->with('success', 'Produk berhasil dihapus');
    }
    public function changeDisplay($id){
        try {
            $product = Produk::findOrFail($id);
            $product->statusdisplay = $product->statusdisplay == 1 ? 2 : 1;
            $product->save();
            
            return redirect()->back()->with('status', 'Status display berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Maaf, status display tidak berhasil diubah.');
        }
    }

    public function resetPassword($id)
    {
        $user = User::findOrFail($id);

        $newPassword = Str::random(8);
        $user->password = Hash::make($newPassword);
        $user->save();

        Mail::raw("Hello, here is your new password: $newPassword", function ($message) use ($user) {
            $message->to($user->email)
                ->from(config('mail.from.address'), config('mail.from.name'))
                ->subject('Your New Password');
        });

        return back()->with('success', 'Password has been reset and emailed to the store.');
    }
}
