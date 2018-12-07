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
Route::get('/', 'TestController@welcome');  //pagina de inicio

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products', 'ProductController@index'); //listado
Route::post('/admin/products', 'ProductController@store');//guardar
Route::get('/admin/products/create', 'ProductController@create'); //crear
Route::get('/admin/products/{id}/edit', 'ProductController@edit'); //editar
Route::post('/admin/products/{id}/edit', 'ProductController@update');//actualizar
Route::delete('/admin/products/{id}/', 'ProductController@destroy');//actualizar