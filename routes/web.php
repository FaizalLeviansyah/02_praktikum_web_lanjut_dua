<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodsController;
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

//
Route::get('/', function () {
    return ('Type /goods to access CRUD database');
});



//koding di file lain untuk mengambil referensi controller dari goods supaya bisa di coding
Route::get('/goods',[GoodsController::class,'index']);
Route::get('/goods/create',[GoodsController::class,'create']);
Route::post('/goods/store',[GoodsController::class,'store']);
Route::get('/goods/{id_goods}/edit',[GoodsController::class,'edit']);
Route::put('/goods/{id_goods}',[GoodsController::class,'update']);
Route::delete('/goods/{id_goods}',[GoodsController::class,'destroy']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/goods/search', [GoodsController::class,'search']);
