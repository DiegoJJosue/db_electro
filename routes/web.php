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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios','UsuariosController@index')->name('usuarios');
Route::get('/usuarios/create','UsuariosController@create')->name('usuarios.create');
Route::post('/usuarios/store','UsuariosController@store')->name('usuarios.store');
Route::get('/usuarios/edit/{use_id}','UsuariosController@edit')->name('usuarios.edit');
Route::post('/usuarios/update/{use_id}','UsuariosController@update')->name('usuarios.update');
Route::post('/usuarios/destroy/{use_id}','UsuariosController@destroy')->name('usuarios.destroy');

Route::get('/productos','ProductosController@index')->name('productos');
Route::post('/productos/store','ProductosController@store')->name('productos.store');
Route::get('/productos/create','ProductosController@create')->name('productos.create');
Route::get('/productos/edit/{pro_id}','ProductosController@edit')->name('productos.edit');
Route::post('/productos/update/{pro_id}','ProductosController@update')->name('productos.update');
Route::post('/productos/destroy/{pro_id}','ProductosController@destroy')->name('productos.destroy');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inventario','InventarioController@index')->name('inventario');
Route::get('/inventario/create','InventarioController@create')->name('inventario.create');
Route::post('/inventario/store','InventarioController@store')->name('inventario.store');

Route::get('/bodegas','BodegasController@index')->name('bodegas');
Route::post('/bodegas/store','BodegasController@store')->name('bodegas.store');
Route::get('/bodegas/create','BodegasController@create')->name('bodegas.create');
Route::get('/bodegas/edit/{bod_id}','BodegasController@edit')->name('bodegas.edit');
Route::post('/bodegas/update/{bod_id}','BodegasController@update')->name('bodegas.update');
Route::post('/bodegas/destroy/{bod_id}','BodegasController@destroy')->name('bodegas.destroy');


