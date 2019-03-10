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


Route::get('/','HomeController@checklogin');

Route::get('/login', 'Auth\LoginController@showloginform')->name('login');

Route::post('/userlogin', 'Auth\LoginController@userlogin');
// Clientes
Route::get('clientes/lista','CustomerController@index');
Route::get('cliente/nuevo','CustomerController@create');
Route::post('cliente/grabar','CustomerController@store');
Route::get('cliente/editar/{id}','CustomerController@edit');
Route::post('cliente/actualizar/{id}','CustomerController@update');
Route::get('cliente/borrar/{id}','CustomerController@destroy');
// Productos
Route::get('productos/lista','ProductController@index');
Route::get('producto/nuevo','ProductController@create');
Route::post('producto/grabar','ProductController@store');
Route::get('producto/editar/{id}','ProductController@edit');
Route::post('producto/actualizar/{id}','ProductController@update');
Route::get('producto/borrar/{id}','ProductController@destroy');
Route::get('/producto/importar','ProductController@import');
Route::post('/producto/importarProducto','ProductController@importProducts');
// Tiendas
Route::get('tiendas/lista','StoreController@index');
Route::get('tienda/nuevo','StoreController@create');
Route::post('tienda/grabar','StoreController@store');
Route::get('tienda/editar/{id}','StoreController@edit');
Route::post('tienda/actualizar/{id}','StoreController@update');
Route::get('tienda/borrar/{id}','StoreController@destroy');
// Transacciones
Route::get('transaccion/lista','TransactionController@index');
Route::get('transaccion/nueva','TransactionController@create');
Route::post('transaccion/grabar','TransactionController@store');
Route::get('transaccion/editar/{id}','TransactionController@edit');
Route::post('transaccion/actualizar/{id}','TransactionController@update');
Route::get('transaccion/borrar/{id}','TransactionController@destroy');
//Auth::routes();


Route::group(['middleware'=>['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/','HomeController@index');

});
