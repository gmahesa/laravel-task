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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/create', function () {
//     return view('create');
// });

// Route::get('/edit', function () {
//     return view('edit');
// });

// Route::get('/index', function () {
//     return view('index');
// });

// Route::resource('passports','PassportController');

Route::get('/index', 'PassportController@index');
Route::get('/edit/{id}', 'PassportController@edit');
Route::put('/update/{id}', 'PassportController@update');
Route::delete('/delete/{id}', 'PassportController@destroy');
Route::get('/create', 'PassportController@create');
Route::post('/store', 'PassportController@store');

// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);