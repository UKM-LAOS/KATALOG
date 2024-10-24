<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Produk;

class AdminController extends Controller
{
    function index()
    {
        return view('admin');
    }

    public function adminProduct()
    {
        $produks = Produk::with('tokos')->get();
    
    // 
    return view('adminProduct', ['produks' => $produks]);
}


}
