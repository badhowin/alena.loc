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

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@show']);
Route::get('/photography', ['as' => 'photography', 'uses' => 'PhotographyController@show']);
Route::get('/about', ['as' => 'about', 'uses' => 'AboutController@show']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'ContactController@show']);

Route::group(['prefix'=>'edit'], function () {

	Route::get('about', ['as' => 'edit.about', 'uses' => 'AboutController@edit']);
	Route::post('about', ['as'=> 'save.about', 'uses' => 'AboutController@save']);
	Route::post('about/upload', ['as'=> 'upload.about', 'uses' => 'AboutController@upload']);

	Route::get('index', ['as' => 'edit.index', 'uses' => 'IndexController@edit']);
	Route::post('index/upload', ['as'=> 'upload.index', 'uses' => 'IndexController@upload']);
});