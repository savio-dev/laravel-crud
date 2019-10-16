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

Route::get('hello', function () {
  		  return 'Hello World';
	});
Route::get('usuario/{id}', function ($id){
	return $id;
});


Route::get('cadastro', function(){
  return view('cadastro_usuario');
});
Route::get('teste', function(){
	return view('teste');
});

Route::get('salvar', 'UsuarioController@salvar');

Route::prefix('imagens')->group(function () {
Route::get('/', 'ImagensController@index');
Route::get('salvar', 'UsuarioController@salvar');
Route::get('index', 'ImagensController@index');
Route::get('cadastro', 'ImagensController@cadastro');
Route::get('teste','ImagensController@teste');
});



Route::resource('Projeto', 'ProjetoController');

/*Route::prefix('Projeto')->group(function(){
Route::get('/','ProjetoController@index');
Route::get('/create','ProjetoController@create');
Route::post('/','ProjetoController@store');
Route::get('/{id}','ProjetoController@show');
Route::get('/{id}/edit','ProjetoController@edit');
Route::put('/{id}','ProjetoController@update');
Route::delete('/{id}','ProjetoController@destroy');
}); */