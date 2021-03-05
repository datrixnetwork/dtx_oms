<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/sellers', function () {
    return view('sellers');
});

Route::get('/userprofile', function () {
    return view('userprofile');
});

Route::get('/orderlist', ['uses'=>'App\Http\Controllers\getlist@index', 'as'=>'orderlist.index']);
Route::get('/sellerlist', ['uses'=>'App\Http\Controllers\getlist@index', 'as'=>'sellerlist.index']);
Route::get('/productlist', ['uses'=>'App\Http\Controllers\getlist@index', 'as'=>'productlist.index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');