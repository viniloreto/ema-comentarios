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
    return view('logar');
});

Route::post('logarPost','LogarController@store');

Route::put('editarComentario','ComentarioController@update');

Route::post('editarUsuario','ConfigController@update');

Route::get('comentarios/editar-comentario/{id}', 'ComentarioController@edit');

Route::resource('registrar','RegistroController');

Route::get('comentarios/incluir-comentarios', 'ComentarioController@add');

Route::resource('comentarios','ComentarioController');

Route::resource('configurar','ConfigController');

Route::any('deslogar', 'LogarController@deslogar');

