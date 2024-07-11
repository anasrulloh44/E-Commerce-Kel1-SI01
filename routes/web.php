<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\KategoriTokohController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TestimoniController;


#ini buat hubungin landing page
Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    route::get('/admin', [AdminController::class, 'index']);
    route::get('/admin/jenisproduk', [JenisProdukController::class, 'index']);
    route::get('/admin/kategoritokoh', [KategoriTokohController::class, 'index']);


    // Jenis Produk
    route::get('/admin/jenisproduk', [JenisProdukController::class, 'index']);
    route::get('/admin/jenisproduk/create', [JenisProdukController::class, 'create'])->middleware('admin');
    route::post('/admin/jenisproduk/store', [JenisProdukController::class, 'store']);
    route::get('/admin/jenisproduk/show/{id}', [JenisProdukController::class, 'show']);
    route::get('/admin/jenisproduk/edit/{id}', [JenisProdukController::class, 'edit'])->middleware('admin');
    route::put('/admin/jenisproduk/update/{id}', [JenisProdukController::class, 'update']);
    route::delete('/admin/jenisproduk/destroy/{id}', [JenisProdukController::class, 'destroy'])->middleware('admin');

    // Jenis Kategori Tokoh
    route::get('/admin/kategoritokoh', [KategoriTokohController::class, 'index']);
    route::get('/admin/kategoritokoh/create', [KategoriTokohController::class, 'create'])->middleware('admin'); 
    route::post('/admin/kategoritokoh/store', [KategoriTokohController::class, 'store']);
    route::get('/admin/kategoritokoh/show/{id}', [KategoriTokohController::class, 'show']);
    route::get('/admin/kategoritokoh/edit/{id}', [KategoriTokohController::class, 'edit'])->middleware('admin');
    route::put('/admin/kategoritokoh/update/{id}', [KategoriTokohController::class, 'update']);
    route::delete('/admin/kategoritokoh/destroy/{id}', [KategoriTokohController::class, 'destroy'])->middleware('admin');

    // Jenis Produk
    route::get('/admin/produk', [ProdukController::class, 'index']);
    route::get('/admin/produk/create', [ProdukController::class, 'create'])->middleware('admin');
    route::post('/admin/produk/store', [ProdukController::class, 'store']);
    route::get('/admin/produk/show/{id}', [ProdukController::class, 'show']);
    route::get('/admin/produk/edit/{id}', [ProdukController::class, 'edit'])->middleware('admin');
    route::put('/admin/produk/update/{id}', [ProdukController::class, 'update']);
    route::delete('/admin/produk/destroy/{id}', [ProdukController::class, 'destroy'])->middleware('admin');

    // Testimoni
    route::get('/admin/testimoni', [TestimoniController::class, 'index']);
    route::get('/admin/testimoni/create', [TestimoniController::class, 'create'])->middleware('admin');
    route::post('/admin/testimoni/store', [TestimoniController::class, 'store']);
    route::get('/admin/testimoni/show/{id}', [TestimoniController::class, 'show']);
    route::get('/admin/testimoni/edit/{id}', [TestimoniController::class, 'edit'])->middleware('admin');
    route::put('/admin/testimoni/update/{id}', [TestimoniController::class, 'update']);
    route::delete('/admin/testimoni/destroy/{id}', [TestimoniController::class, 'destroy'])->middleware('admin');
});

require __DIR__.'/auth.php';
