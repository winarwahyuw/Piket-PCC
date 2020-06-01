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

//coba input
Route::get('index', 'PiketController@tampilData');

//menyimpan mulai piket
Route::post('store', 'PiketController@store');
//menampilkan daftar piket
Route::get('tampilkan_piket', 'PiketController@tampilkan');

//edit
Route::get('edit/{id}/editData', 'PiketController@editData');
Route::put('update/{id}', 'PiketController@updateData');

