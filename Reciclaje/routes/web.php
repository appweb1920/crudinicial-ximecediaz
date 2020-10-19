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

Route::get('/', function () {return view('welcome');});

Route::get('/reciclador','RecicladorController@index');
Route::get('/agrega','RecicladorController@agrega');
Route::post('/add', 'RecicladorController@store');
Route::get('/editar/{id}', 'RecicladorController@MuestraEdicion');
Route::post('/editar/guardaEdicion', 'RecicladorController@guardaEdicion');

Route::get('/borrar/{id}', 'RecicladorController@destroy');

