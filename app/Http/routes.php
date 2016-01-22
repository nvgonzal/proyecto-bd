<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cliente','ClientesController');

Route::get('/consulta1','ConsultaController@consulta1');

Route::get('/consulta2','ConsultaController@consulta2');

Route::get('/consulta3','ConsultaController@consulta3');

Route::get('/consulta5','ConsultaController@consulta5');

Route::get('/consulta6','ConsultaController@consulta6');

Route::get('/consulta7','ConsultaController@consulta7');