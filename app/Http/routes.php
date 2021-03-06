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

Route::get('/', 'MoviesController@index');

Route::get('home', 'HomeController@index');

Route::get('/reviews/like/{id}', 'ReviewsController@like');


Route::resource('reviews', 'ReviewsController');
Route::resource('movies', 'MoviesController');
Route::resource('ratings', 'RatingsController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
