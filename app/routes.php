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

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', 'HomeController@showWelcome');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/resume', 'HomeController@showResume');

Route::get('/rolldice/{guess}', 'HomeController@rolldice');

Route::get('/posts', 'PostsController@index');

Route::get('/posts/create','PostsController@create');

Route::post('/posts/store','PostsController@store');

Route::get('/posts/{post}','PostsController@show');

Route::get('/posts/{post}/edit','PostsController@edit');

Route::put('/posts/{post}','PostsController@update');

Route::delete('/posts/{post}','PostsController@destroy');

Route::resource('posts', 'PostsController');


