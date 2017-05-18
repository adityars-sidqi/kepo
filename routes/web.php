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

//ROUTE UNTUK SITE PUBLIK
Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'SiteController@index');
    Route::post('/login', 'SiteController@auth');
    Route::get('/support', 'SiteController@support');

    Route::get('/register', 'RegisterController@index');

    Route::get('/register/peserta', 'RegisterController@peserta');
    Route::post('/register/peserta', 'RegisterController@regpeserta');

    Route::get('/register/organisasi', 'RegisterController@organisasi');
    Route::post('/register/organisasi', 'RegisterController@regorganisasi');

    Route::get('/verification/{jenis}/{id}/{key}', 'RegisterController@verification');

    Route::get('/seminar', 'SeminarController@index');
    Route::get('/seminar/{id}', 'SeminarController@show');
});

//ROUTE UNTUK ADMIN
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/login', 'AdminController@login');
    Route::post('/login', 'AdminController@autentikasi');
});

Route::group(['namespace' => 'Admin', 'middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/logout', 'AdminController@logout');
    Route::get('/', 'AdminController@index');

    Route::resource('kategori', 'KategoriController');
    Route::resource('seminar', 'SeminarController');
    Route::resource('peserta', 'PesertaController');
    Route::resource('organisasi', 'OrganisasiController');

    Route::get('/konfirmasi', 'KonfirmasiController@index');
});
