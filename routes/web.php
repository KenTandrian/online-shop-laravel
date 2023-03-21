<?php

use App\Http\Controllers\UserController;
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
    Route::group(['prefix'=>'book'], function() {
        Route::get('/', 'BookController@index');
        Route::get('create', 'BookController@create');
        Route::post('/', 'BookController@store');
        Route::get('{id}/edit', 'BookController@edit');
        Route::post('{id}/update', 'BookController@update');
        Route::delete('{id}', 'BookController@destroy');
    });

    // User management
    Route::group(['prefix'=>'user'], function() {
        Route::get('/', 'UserController@index');
        Route::get('create', 'UserController@create');
        Route::post('/', 'UserController@store');
        Route::get('{id}/edit', 'UserController@edit');
        Route::post('{id}/update', 'UserController@update');
        Route::delete('{id}', 'UserController@destroy');
    });

    // Transaction management
    Route::get('/transaction', function () {
        return view('admin.transaction.index');
    });
    Route::get('/transaction/create', function () {
        return view('admin.transaction.create');
    });
    Route::get('/transaction/update', function () {
        return view('admin.transaction.update');
    });
});