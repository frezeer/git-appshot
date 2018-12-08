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
Route::middleware(['auth','admin'])->prefix('admin')->group(function () 
{
	//rutas para productos
	Route::get('/products', 'ProductController@index'); //listado
	Route::post('/products', 'ProductController@store');//guardar
	Route::get('/products/create', 'ProductController@create'); //crear
	Route::get('/products/{id}/edit', 'ProductController@edit'); //editar
	Route::post('/products/{id}/edit', 'ProductController@update');//actualizar
	Route::delete('/products/{id}/', 'ProductController@destroy');//actualizar
	//rutas de imagenes 
	Route::get('/products/{id}/images',  'ImageController@index');//actualizar
	Route::post('/products/{id}/images', 'ImageController@store');//guardar
	Route::delete('/products/{id}/images','ImageController@destroy');//actualizar	
});

