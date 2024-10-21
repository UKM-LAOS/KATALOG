<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view('admin');
    }

    public function adminProduct()
    {
        return view('adminProduct');
    }

    public function adminToko()
    {
        return view('adminToko');
    }
}
