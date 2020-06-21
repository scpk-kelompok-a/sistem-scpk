<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('kms', 'KMSController');

Route::resource('bidan', 'BidanController');

// Route::get('/hasil', 'BidanController@hasil');

Route::get('/kader', function () {
    return view('index');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/datalansia', function () {
    return view('datalansia');
});

Route::get('/detdatalansia', function () {
    return view('detdatalansia');
});

Route::get('/hasil', 'BidanController@hasil');

// Route::get('/hasil', function () {
//     return view('hasil');
// });

Route::group(['prefix' => 'kriteria'], function () {
	Route::get('/', 'KriteriaController@index');
	Route::post('/tambah', 'KriteriaController@insert');
	Route::get('/edit/{id}', 'KriteriaController@edit');
	Route::post('/update', 'KriteriaController@update');
	Route::get('/hapus/{id}', 'KriteriaController@delete');
});

Route::group(['prefix' => 'alternatif'], function () {
	Route::get('/', 'AlternatifController@index');
	Route::get('/penilaian/{alternatif}', 'AlternatifController@value');
	Route::post('/nilai_simpan', 'AlternatifController@store');
	Route::get('/detail/{id}', 'AlternatifController@show');
	Route::post('/tambah', 'AlternatifController@insert');
	Route::get('/edit/{id}', 'AlternatifController@edit');
	Route::post('/update', 'AlternatifController@update');
	Route::get('/hapus/{id}', 'AlternatifController@delete');
});

// Route::get('hasil', 'HasilController@index');