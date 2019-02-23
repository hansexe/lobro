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

Route::get('/', function () {
    return view('/Login/index');
});

Route::resource('perfil','ProfileController');

Route::POST('articulo/registro',['as' => 'RegistrarArticulo', 'uses' => 'ArticuloController@RegistrarArticulo']);
Route::GET('articulo/{id}/Visualizar','ArticuloController@VisualizarArticulo');
Route::GET('articulo/listall','ArticuloController@ListarArticulo');
Route::PUT('articulo/actualizar/{id}','ArticuloController@ActualizarArticulo');
Route::DELETE('articulo/eliminar/{id}','ArticuloController@DeleteArticulo');
Route::resource('articulo','ArticuloController');