<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/homepage', function () {
    return view('homepage');
});

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