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
    return view('welcome');
});

Route::resource('/contato', 'ContatoController');

# Produto
Route::get('/', 'ProdutosController@index');
Route::resource('produtos', 'ProdutosController');
Route::post('produtos/buscar', 'ProdutosController@buscar');
Route::get('produtos/{id}/editar', 'ProdutosController@edit');
Route::get('produtos-adicionar', 'ProdutosController@create');
#Route::get('produtos/{id}/detalhes', 'ProdutosController@show');
#Route::get('extras-eloquent', 'ProdutosController@extras');
Route::post('contato/enviar', 'ContatoController@enviar');
Route::get('contato', 'ContatoController@index');
