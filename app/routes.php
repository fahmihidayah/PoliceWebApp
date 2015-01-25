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

Route::get('/', function()
{
	return View::make('hello');
});


Route::post('/api/get_pengendara', 'HomeController@getPengendara' );

Route::post('/api/get_pasal', 'HomeController@getPasal');

Route::post('/api/insert_pelanggaran', 'HomeController@insertPelanggaran');

Route::post('/api/login', 'HomeController@login');