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

	test branch usmant_uat
*/


Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/login', 'PagesController@input');

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/delete/{id}', 'MahasiswaController@delete');
Route::get('/edit/{id}', 'MahasiswaController@edit');
Route::post('/store', 'MahasiswaController@store');
Route::put('/update/{id}', 'MahasiswaController@update');

Route::group(['middleware' => ['auth']], function(){
	Route::get('/mahasiswa', 'MahasiswaController@index');
	Route::get('/input', 'PagesController@input');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
