<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'HomeController@index');
Route::post('/', 'TamuController@store');



//daftar baru
Route::get('/daftar', 'DaftarController@create');
//simpan pendaftar
Route::post('/daftar', 'DaftarController@store');

//admin
Route::get('/admin', 'DaftarController@admin');
Route::get('/peserta', 'DaftarController@index');
// Route::get('/peserta/{slug}', 'DaftarController@show');
Route::get('/peserta/{id}', 'DaftarController@edit')->name('peserta.edit');
Route::post('/peserta/{id}', 'DaftarController@update');

Route::get('/tambahuser', 'UserController@create');
Route::post('/tambahuser', 'UserController@store');
Route::get('/listuser', 'UserController@index');
Route::get('/hapususer/{id}','UserController@destroy');

Route::get('/bukutamu','TamuController@index');

Route::get('/list-berita','BeritaController@index');
Route::get('/tambah-berita','BeritaController@create');
Route::post('/tambah-berita','BeritaController@store');

Route::get('/berita/{slug}','BeritaController@show');
Route::get('/berita/{slug}/edit','BeritaController@edit')->name('berita.edit');
Route::post('/berita/{slug}/edit','BeritaController@update');
Route::get('/berita/hapus/{id}','BeritaController@destroy');



// Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
