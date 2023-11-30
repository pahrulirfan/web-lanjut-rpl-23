<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

// Route untuk latihan
Route::get("/latihan", [LatihanController::class, "index"])->name("l.index");





Route::get('/category', [CategoryController::class, 'tampil'])->name('category-index');

Route::get('/category/create', [CategoryController::class, 'tambah'])->name('category-create');

Route::post('/category/store', [CategoryController::class, 'simpan'])->name('category-store');

Route::delete('/category/{id}/delete', [CategoryController::class, 'delete'])->name('category-delete');

Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category-edit');

Route::patch('/category/{id}/update', [CategoryController::class, 'update'])->name('category-update');

Route::resource('/supplier', SupplierController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


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


