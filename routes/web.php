<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo/{id}', function ($id) {
    return "Hello World {$id}";
});

// Route untuk akses view latihan1.php
Route::get('/latihan1/{nama}', function($nama) {
    return view('latihan1', ['nama' => $nama]);
});

// Route untuk akses view latihan2.php
Route::get('/latihan2/{nama}', function($nama) {
    return view('latihan2', ['nama' => $nama]);
});

Route::resource('siswa', 'SiswaController');