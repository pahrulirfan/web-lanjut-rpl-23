<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('dashboard');
});
