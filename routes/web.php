<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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
