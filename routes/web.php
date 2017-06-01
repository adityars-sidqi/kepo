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
    Route::get('/coba', 'SiteController@coba');
    Route::get('/support', 'SiteController@support');

    Route::get('/register', 'RegisterController@index');

    Route::get('/register/peserta', 'RegisterController@peserta');
    Route::post('/register/peserta', 'RegisterController@regpeserta');

    Route::get('/register/organisasi', 'RegisterController@organisasi');
    Route::post('/register/organisasi', 'RegisterController@regorganisasi');

    Route::get('/verification/{jenis}/{id}/{key}', 'RegisterController@verification');

    Route::get('/seminar', 'SeminarController@index');
    Route::get('/seminar/{slug}', 'SeminarController@show');
    Route::get('/seminar/category/{cat}', 'SeminarController@perkategori');
    Route::post('/login/{jenis}', 'LoginController@auth');
});

//Route untuk peserta
Route::group(['namespace' => 'Site', 'middleware' => 'peserta'], function () {
    Route::get('/logout/peserta', 'LoginController@logout');
    Route::get('/transaction/cart', 'Peserta\TransaksiController@cart');
    Route::get('/transaction/history', 'Peserta\TransaksiController@history');
    Route::get('/transaction/checkout', 'Peserta\TransaksiController@checkout');
    Route::get('/transaction/{id}/print', 'Peserta\TransaksiController@printTicket');
    Route::get('/transaction/{id}', 'Peserta\TransaksiController@single');
    Route::post('/transaction/{id_transaksi}/confirmation', 'Peserta\TransaksiController@confirmation');

    Route::post('/seminar/{slug}/buy', 'Peserta\TransaksiController@buy');
    Route::get('/seminar/{slug}/delete', 'Peserta\TransaksiController@delete');
});

//Route untuk organisasi
Route::group(['namespace' => 'Site', 'middleware' => 'organisasi'], function () {
    Route::resource('dashboard/seminar', 'Organisasi\SeminarController');
    Route::get('dashboard/laporan', 'Organisasi\LaporanPesertaController@index');
    Route::get('dashboard/laporan/{id}/print', 'Organisasi\LaporanPesertaController@printLaporan');
    Route::get('/logout/organisasi', 'LoginController@logout');
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
    Route::get('/konfirmasi/{id}', 'KonfirmasiController@show');
    Route::get('/konfirmasi/{id}/confirm', 'KonfirmasiController@confirm');
    Route::delete('/konfirmasi/{id}', 'KonfirmasiController@destroy');
});
