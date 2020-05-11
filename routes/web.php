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

Route::get("/","RetonarNumeroClientes@retorna");

Route::get("Clientes",'ClienteController@index');

Route::get('Cadastrar', 'ClienteController@create');

Route::post('NovoRegistro','ClienteController@store');

Route::get('Editar','ClienteController@update');

Route::get('Excluir_ID={d}','ClienteController@destroy');

Route::post("Atualizar_ID={d}",'ClienteController@update');

Route::get('Atualiza_ID={d}','ClienteController@edit');

