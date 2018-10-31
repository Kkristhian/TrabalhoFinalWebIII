<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider  which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/', function (Request $request) {
    return $request->user();
});



Route::group(['prefix' => 'filme'], function () {
    Route::get('', 'FilmeController@todosFilmes');
    
    Route::get('{id}', 'FilmeController@getFilme');
    
    Route::post('', 'FilmeController@addFilme');
    
    Route::put('{id}', 'FilmeController@atualizarFilme');
    
    Route::delete('{id}', 'FilmeController@deletarFilme');
});

Route::group(['prefix' => 'diretor'], function () {

    Route::get('', 'DiretorController@todosDiretores');

    Route::get('{id}', 'DiretorController@getDiretor');

    Route::post('', 'DiretorController@addDiretor');

    Route::put('{id}', 'DiretorController@atualizarDiretor');

    Route::delete('{id}', 'DiretorController@deletarDiretor');

});

Route::group(['prefix' => 'estudio'], function () {

    Route::get('', 'EstudioController@todosEstudios');

    Route::get('{id}', 'EstudioController@getEstudio');

    Route::post('', 'EstudioController@addEstudio');

    Route::put('{id}', 'EstudioController@atualizarEstudio');

    Route::delete('{id}', 'EstudioController@deletarEstudio');

});

Route::group(['prefix' => 'genero'], function () {

    Route::get('', 'GeneroController@todosGeneros');

    Route::get('{id}', 'GeneroController@getGenero');

    Route::post('', 'GeneroController@addGenero');

    Route::put('{id}', 'GeneroController@atualizarGenero');

    Route::delete('{id}', 'GeneroController@deletarGenero');

});

