<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;

route::middleware('guest')->group(function () {
    Route::get('/', [PageController::class, 'homepage']);
    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'login']);
});

// route::get("/home", function(){
//     return redirect('admin');
// });



Route::middleware("auth")->group(function () {
    Route::get('/homepage', [PageController::class, 'homepage']);
    Route::get('/product', [PageController::class, 'product']);
    Route::get('/contact', [PageController::class, 'contact']);
    Route::get('/detail-product', [PageController::class, 'detailProduct']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/produkadmin', [AdminController::class, 'adminProduct']);
    Route::get('/tokoadmin', [AdminController::class, 'adminToko']);
    Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
});

Route::get('/detail-product', function () {
    return view('detailProduct');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/admin', function(){
//     return view('admin');
// });

// Route::get('/produkadmin', function(){
//     return view('adminProduct');
// });

// Route::get('/tokoadmin', function(){
//     return view('adminToko');
// });

Route::get('/profiladmin', function () {
    return view('adminProfil');
});
