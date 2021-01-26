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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['aeropuerto','avion','aerolinea','vuelo']);
//Auth::routes(['register'=>false,'reset'=>false])

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::resource('aeropuerto', 'aeropuertoController')->middleware('auth');
Route::resource('avion', 'avionController')->middleware('auth');
Route::resource('aerolinea', 'aerolineaController')->middleware('auth');
Route::resource('vuelo', 'vueloController')->middleware('auth');
