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

Route::get('/hasil', 'BidanController@view');

// Route::get('/hasil', function () {
//     return view('hasil');
// });
