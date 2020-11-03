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

Route::get('/editarLugar/{id}', 'LugarController@MuestraEdicion');
Route::post('/editarLugar/guardaEdicion', 'LugarController@guardaEdicion');

Route::get('/lugares','LugarController@index');
Route::get('/agregaLugar','LugarController@agrega');
Route::post('/addLugar', 'LugarController@store');
Route::get('/borrar/{id}', 'RecicladorController@destroy');
Route::get('/borrarLugar/{id}', 'LugarController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
