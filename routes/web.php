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

Route::get('/', 'FrontController@index');
Route::get('/list', 'FrontController@list');
Route::post('buy/{id}', 'FrontController@buy');
Route::get('logout', 'FrontController@logout');

Route::get('/detail', function () {
    return view('detail');
});

Route::group(['prefix'=>'user', 'middleware' => ['auth', 'role:member']], function() {
    Route::get('/mybook', 'FrontController@mybook');
});

Route::group(['prefix'=>'admin'], function() {
    Route::get('/',function() {
        return view('admin.index');
    });
    Route::get('logout','UserController@logout');
    
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
    Route::group(['prefix'=>'transaction'], function() {
        Route::get('/', 'TransactionController@index');
        Route::get('create', 'TransactionController@create');
        Route::post('/', 'TransactionController@store');
        Route::get('{id}/edit', 'TransactionController@edit');
        Route::post('{id}/update', 'TransactionController@update');
        Route::delete('{id}', 'TransactionController@destroy');
    });
});