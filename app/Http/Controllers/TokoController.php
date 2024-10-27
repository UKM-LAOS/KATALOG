<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function dashboard()
    {
        return view('dashboardToko');
    }

    
    public function createProduct()
    {
        return view('tambahProduct');
    }


    public function profile()
    {
        return view('profilToko');
    }
}
