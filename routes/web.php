<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/homepage', [Controllers\Pengguna\HomePageController::class, 'index'])->name('HomePage');

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/detail-product', function () {
    return view('detailProduct');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function(){
    return view('admin');
});

Route::get('/produkadmin', function(){
    return view('adminProduct');
});

Route::get('/tokoadmin', function(){
    return view('adminToko');
});

Route::get('/profiladmin', function(){
    return view('adminProfil');
});