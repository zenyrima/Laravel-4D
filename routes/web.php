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



Route::get('/', function () {
    return view('welcome');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//mahasiswa
Route::get('mahasiswa', 'MahasiswaController@index');
Route::get('mahasiswa-create', 'MahasiswaController@create');
Route::get('tambah_data', 'Tambah_dataController@index');

//makul
Route::get('makul', 'MakulController@index')->name('makul');
Route::get('tambah-makul', 'MakulController@create')->name('tambah.makul');
Route::post('simpan-makul', 'MakulController@store')->name('simpan.makul');

Route::get('edit-makul/{id}', 'MakulController@edit')->name('edit.makul');
Route::post('update-makul/{id}', 'MakulController@update')->name('update.makul');
Route::get('hapus-makul/{id}', 'MakulController@destroy')->name('hapus.makul');

