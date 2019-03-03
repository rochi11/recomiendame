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

Route::get('clientes/lista','CustomerController@index');
Route::get('cliente/nuevo','CustomerController@create');
Route::post('cliente/grabar','CustomerController@store');
//Auth::routes();


Route::group(['middleware'=>['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/','HomeController@index');

});
