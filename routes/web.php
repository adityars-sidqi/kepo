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

  Route::get('/', 'HomeController@index');

});
