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

Route::get('/', 'index@index');
Route::post('/barang/save', 'index@tambah_barang');
Route::get('/claim/{id}', 'index@claim');
Route::post('/claim/{id}/save', 'index@tambah_claim');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
