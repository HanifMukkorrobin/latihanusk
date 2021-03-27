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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@index');
Route::post('/postLogin', 'LoginController@cekLogin');
Route::get('/logout', 'LoginController@logout');

Route::middleware('cekLogin')->group(function(){
    Route::get('/beranda', 'BerandaController@index');
    Route::resource('/transaksi', 'TransaksiController');
});