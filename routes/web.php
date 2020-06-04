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

/*	Route::get('/', function () {
	    return view('index');
	});

	Route::get('/about', function () {

	    $nama = "wahyu usman";
	    return view('about', ['nama' => $nama]);
	});

	Route::get('/mahasiswa', function () {
	    return view('mahasiswa');
	});
*/


Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/input', 'PagesController@input');

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/delete/{id}', 'MahasiswaController@delete');
Route::get('/edit/{id}', 'MahasiswaController@edit');
Route::post('/store', 'MahasiswaController@store');
Route::put('/update/{id}', 'MahasiswaController@update');
