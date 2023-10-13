<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/category', [CategoryController::class, 'tampil'])->name('category-index');

Route::get('/category/create', [CategoryController::class, 'tambah'])->name('category-create');

Route::post('/category/store', [CategoryController::class, 'simpan'])->name('category-store');


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


