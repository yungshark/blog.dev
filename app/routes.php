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

Route::get('/sayhello/{name}', function($name)
{
	if ($name == "Logan") {
		return Redirect::to('/');
	} else {
		return "Hello, $name";
	}
});

Route::get('/', 'HomeController@showWelcome');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/menu', 'HomeController@showMenu');

Route::get('/resume', 'HomeController@showResume');

Route::get('/rolldice/{guess}', 'HomeController@showRollDice');

Route::get('/simplesimon', 'HomeController@showSimpleSimon');

Route::get('/calculator', 'HomeController@showCalculator');

Route::get('/whackamole', 'HomeController@showWhackamole');

Route::get('/posts', 'PostsController@index');

Route::get('/posts/create','PostsController@create');

Route::post('/posts/store','PostsController@store');

Route::get('/posts/{post}','PostsController@show');

Route::get('/posts/{post}/edit','PostsController@edit');

Route::put('/posts/{post}','PostsController@update');

Route::delete('/posts/{post}','PostsController@destroy');

Route::resource('posts', 'PostsController');

Route::get('/login', 'UserController@showLogin');

Route::get('/logout', 'UserController@showlogout');

Route::post('/login', 'UserController@doLogin');

Route::get('/query-test', function(){
	$posts = Post::where('title', '=', 'Hello World!')->get();
	foreach ($posts as $post) {
		echo $post->title . "<br>";
	}
});