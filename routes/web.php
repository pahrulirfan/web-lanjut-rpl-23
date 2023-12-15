<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;



//route login dan logout

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login-post', [LoginController::class, 'authenticate'])->name('login.post');

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// route products
Route::resource('products', ProductController::class)->middleware('auth');


// Route untuk latihan
Route::get("/latihan", [LatihanController::class, "index"])->name("l.index")->middleware('auth');


Route::get('/category', [CategoryController::class, 'tampil'])->name('category-index')->middleware('auth');

Route::get('/category/create', [CategoryController::class, 'tambah'])->name('category-create');

Route::post('/category/store', [CategoryController::class, 'simpan'])->name('category-store');

Route::delete('/category/{id}/delete', [CategoryController::class, 'delete'])->name('category-delete');

Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category-edit');

Route::patch('/category/{id}/update', [CategoryController::class, 'update'])->name('category-update');


Route::resource('/supplier', SupplierController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');


// route utama
Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa/{fakultas}', function ($fakultas) {

    $array = ['Risa', 'Ari'];

    return view('universitas.mahasiswas')
        ->with([
            'mhs' => $array,
            'fk' => $fakultas
        ]);

});


