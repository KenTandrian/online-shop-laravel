<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
 
Route::get('/', [FrontController::class, 'index']);
Route::get('/list', [FrontController::class, 'list']);
Route::post('buy/{id}', [FrontController::class, 'buy']);
Route::get('logout', [FrontController::class, 'logout']);

Route::get('/detail', function () {
    return view('detail');
});

Route::group(['prefix'=>'user', 'middleware' => ['auth', 'role:member']], function() {
    Route::get('/mybook', [FrontController::class, 'mybook']);
});

Route::group(['prefix'=>'admin'], function() {
    Route::get('/',function() {
        return view('admin.index');
    });
    Route::get('logout', [UserController::class, 'logout']);
    
    // Book management
    Route::group(['prefix'=>'book'], function() {
        Route::get('/', [BookController::class, 'index']);
        Route::get('create', [BookController::class, 'create']);
        Route::post('/', [BookController::class, 'store']);
        Route::get('{id}/edit', [BookController::class, 'edit']);
        Route::post('{id}/update', [BookController::class, 'update']);
        Route::delete('{id}', [BookController::class, 'destroy']);
    });

    // User management
    Route::group(['prefix'=>'user'], function() {
        Route::get('/', [UserController::class, 'index']);
        Route::get('create', [UserController::class, 'create']);
        Route::post('/', [UserController::class, 'store']);
        Route::get('{id}/edit', [UserController::class, 'edit']);
        Route::post('{id}/update', [UserController::class, 'update']);
        Route::delete('{id}', [UserController::class, 'destroy']);
    });

    // Transaction management
    Route::group(['prefix'=>'transaction'], function() {
        Route::get('/', [TransactionController::class, 'index']);
        Route::get('create', [TransactionController::class, 'create']);
        Route::post('/', [TransactionController::class, 'store']);
        Route::get('{id}/edit', [TransactionController::class, 'edit']);
        Route::post('{id}/update', [TransactionController::class, 'update']);
        Route::delete('{id}', [TransactionController::class, 'destroy']);
    });
});