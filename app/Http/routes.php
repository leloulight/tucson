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
    return view('feed');
});

/**
 *	Users
 */
//Route::resource('user', 'UserController');
Route::get('users',
	['uses' => 'UserController@index', 'as' => 'user.index']);
Route::get('user/new',
	['uses' => 'UserController@create', 'as' => 'user.create']);
Route::post('user',
	['uses' => 'UserController@store', 'as' => 'user.store']);
Route::get('user/{id}',
	['uses' => 'UserController@show', 'as' => 'user.show']);

/**
 *	Photos
 */
//Route::resource('photo', 'PhotoController');
Route::get('photos',
	['uses' => 'PhotoController@index', 'as' => 'photo.index']);
Route::get('photo/new',
	['uses' => 'PhotoController@create', 'as' => 'photo.create']);
Route::post('photo',
	['uses' => 'PhotoController@store', 'as' => 'photo.store']);
Route::get('photo/{id}',
	['uses' => 'PhotoController@show', 'as' => 'photo.show']);

Route::resource('vote', 'VoteController');

Route::get('file/{filename}',
	['uses' => 'FileController@show', 'as' => 'file.show']);