<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'UserController@index');
Route::get('login', 'UserController@index');
Route::post('login', 'UserController@login');
Route::get('registro', 'UserController@create');
Route::post('registro', 'UserController@store');
Route::get('logout', 'UserController@logout');
Route::get('auth', 'UserController@isLogged');



Route::group(array('before' => 'auth'), function () {
	Route::resource('tasks', 'TaskController');
	Route::post('tasks/{id}/update', 'TaskController@update');
	Route::get('tasks/{id}/delete', 'TaskController@destroy');	
});