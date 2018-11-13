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
    return view('inicial');
});

Route::get('/inicial', 'FilmeController@loadInicial');

Route::get('/inicial/ConsultaFilme', 'FilmeController@loadConsultarFilme');
Route::get('/inicial/CadastrarFilme', 'FilmeController@loadCadastrarFilme');
Route::get('/inicial/atualizarFilme/{id}', 'FilmeController@loadAtualizarFilme');

Route::get('/inicial/ConsultaDiretor', 'DiretorController@loadConsultarDiretor');
Route::get('/inicial/CadastrarDiretor', 'DiretorController@loadCadastrarDiretor');
Route::get('/inicial/atualizarDiretor/{id}', 'DiretorController@loadAtualizarDiretor');

Route::get('/inicial/ConsultaGenero', 'GeneroController@loadConsultarGenero');
Route::get('/inicial/CadastrarGenero', 'GeneroController@loadCadastrarGenero');
Route::get('/inicial/atualizarGenero/{id}', 'GeneroController@loadAtualizarGenero');

Route::get('/inicial/ConsultaEstudio', 'EstudioController@loadConsultarEstudio');
Route::get('/inicial/CadastrarEstudio', 'EstudioController@loadCadastrarEstudio');
Route::get('/inicial/atualizarEstudio/{id}', 'EstudioController@loadAtualizarEstudio');


