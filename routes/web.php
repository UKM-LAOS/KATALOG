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

