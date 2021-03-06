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

route::get('client', 'ClientController@index');
route::post('client', 'ClientController@store');
route::get('client/{id}', 'ClientController@show');
route::delete('client/{id}', 'ClientController@destroy');
route::put('client/{id}', 'ClientController@update');
