<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pagina.inicio');
});

Route::get('/poo', [
  'uses'=> 'paginaController@viewPoo',
  'as' => 'poo'
])->middleware('guest');

Route::get('/inicio', [
  'uses'=> 'paginaController@viewPagina',
  'as' => 'inicio'
])->middleware('guest');

Route::get('/modelonegocio', [
  'uses'=> 'paginaController@viewModelo',
  'as' => 'modelonegocio'
])->middleware('guest');

Route::get('/eclipse', [
  'uses'=> 'paginaController@viewEclipse',
  'as' => 'eclipse'
])->middleware('guest');

Route::get('/rationalrouse', [
  'uses'=> 'paginaController@viewRouse',
  'as' => 'rouse'
])->middleware('guest');

// Route::get('/',[
//   'uses'=>'paginaController@viewPagina',
//   'as'=>'inicio'])->middleware('guest');


//Route::resource('pagina', 'paginaController@viewPagina');
