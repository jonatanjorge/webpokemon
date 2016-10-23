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
    return view('index');
});

Route::get('pokemones', [
    'as' => 'list.pokemones',
    'uses' => 'PokemonesController@index'
]);

Route::get('alta', [
    'as' => 'create.pokemones',
    'uses' => 'PokemonesController@create'
]);

Route::post('alta', [
    'as' => 'store.pokemones',
    'uses' => 'PokemonesController@store'
]);

Route::get('{id}/editar', [
    'as' => 'edit.pokemones',
    'uses' => 'PokemonesController@edit'
]);

Route::post('{id}/editar', [
    'as' => 'update.pokemones',
    'uses' => 'PokemonesController@update'
]);

Route::post('eliminar', [
    'as' => 'destroy.pokemones',
    'uses' => 'PokemonesController@destroy'
]);
