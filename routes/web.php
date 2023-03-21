<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('index');
});
Route::get('/list', function () {
    return view('list');
});
Route::get('/detail', function () {
    return view('detail');
});

Route::group(['prefix'=>'user'], function() {
    Route::get('/mybook', function () {
        return view('user.mybook');
    });
});

Route::group(['prefix'=>'admin'], function() {
    // Book management
    Route::get('/book', function () {
        return view('admin.book.index');
    });
    Route::get('/book/create', function () {
        return view('admin.book.create');
    });
    Route::get('/book/update', function () {
        return view('admin.book.update');
    });

    // User management
    Route::get('/user', function () {
        return view('admin.user.index');
    });
    Route::get('/user/create', function () {
        return view('admin.user.create');
    });
    Route::get('/user/update', function () {
        return view('admin.user.update');
    });
});