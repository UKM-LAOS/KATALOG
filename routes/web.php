<?php

use App\Http\Controllers\Admin\ProfilAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TokoController;

route::middleware('guest')->group(function () {
    Route::get('/', [PageController::class, 'homepage']);
    Route::get('/homeguest', [PageController::class, 'homepage']);
    Route::get('/productguest', [PageController::class, 'product']);
    Route::get('/contactguest', [PageController::class, 'contact']);
    Route::get('/detail-product-guest/{id}', [PageController::class, 'detailProduct'])->name('detail-product');
    Route::get('/searchProduct', [PageController::class, 'searchProduct']);
    Route::get('/filterProducts', [PageController::class, 'filterProduct'])->name('filter.products');
    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'login']);
});


Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/produkadmin', [AdminController::class, 'adminProduct']);
    Route::get('/tokoadmin', [AdminController::class, 'adminToko']);
    Route::post('/admin/toko/reset-password/{id}', [AdminController::class, 'resetPassword'])->name('admin.toko.reset-password');
    Route::post('/tokoadmin/store', [AdminController::class, 'storeToko'])->name('adminToko.store');
    Route::resource('/profiladmin', ProfilAdminController::class)->only(['index', 'update']);
    Route::get('/kunjungitoko', function () {
        return view('profiltoko');
    });
    Route::delete('/product/{id}', [AdminController::class, 'hapusProduct'])->name('product.delete');
    Route::post('/produk/{id}/change-display', [AdminController::class, 'changeDisplay'])->name('produk.changeDisplay');
});


Route::middleware(['auth', 'role:Toko'])->group(function () {
    Route::get('/dashboardtoko', [TokoController::class, 'dashboard'])->name('dashboardToko');
    Route::get('/profiltoko', [TokoController::class, 'profile'])->name('profilToko');
    Route::put('/profiltoko/{id}', [TokoController::class, 'profileEdit'])->name('profilTokoEdit');
    Route::get('/tambahproduk', [TokoController::class, 'createProductView']);
    Route::post('/tambahproduk', [TokoController::class, 'createProduct'])->name('tambahProduct');
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

// Route::get('/profiladmin', function(){
//     return view('adminToko');
// });


Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
