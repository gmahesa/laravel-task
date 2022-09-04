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


Route::get('/', 'PostController@welcome');
Route::get('/detail/{id}', 'PostController@view');
Route::get('/coba', 'PostController@news');
Route::get('/news', 'PostController@create');
Route::get('/newskat', 'PostController@create2');
Route::get('/newstag', 'PostController@create3');
// Multi Halaman
Route::get('/post', 'PostController@index');
Route::get('/post/kategori', 'PostController@kategori');
Route::get('/post/tag', 'PostController@tag');

// Hapus Data
Route::get('/post/{id}','PostController@hapusPos') ;
Route::get('/post/hapusKat/{id}','PostController@hapusKat');
Route::get('/post/hapusTag/{id}','PostController@hapusTag');

Route::get('/edit/{id}', 'PostController@edit');
Route::put('/update/{id}', 'PostController@update');
Route::post('/update', 'PostController@update');


// Tambah Data
Route::post('/store',  'PostController@store');
Route::post('/storekat',  'PostController@storeKat');
Route::post('/storetag',  'PostController@storeTag');

Route::resource('post', 'PostController');

Route::auth();
Route::group(['middleware'=>['web']],function() {
    Route::get('login', [ 'as' => 'login', 'uses' =>'Auth\LoginController@showLoginForm']);
    Route::post('login', [ 'as' => 'login', 'uses' =>'Auth\LoginController@login']);
    Route::post('logout', [ 'as' => 'logout', 'uses' =>'Auth\LoginController@logout']);
    Route::get('register',function(){
            return redirect('/');
        });
    Route::get('/home', 'HomeController@index')->name('home'); 
    Route::resource('post', 'PostController'); 
    Route::resource('kategori', 'kategoriController');
    Route::resource('tag', 'tagController');  
    Route::resource('user', 'UserController'); 
})

?>
