<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function product()
    {
        return view('product');
    }

    public function contact()
    {
        return view('contact');
    }

    public function detailProduct()
    {
        return view('detailProduct');
    }
}
