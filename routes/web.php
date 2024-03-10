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

//relasi 1 - one to one
Route::get('relasi-1', function () {
    #temukan mahasiswa dengan nim D112111014
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=', 'D112111014')->first();

    #tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;
});
