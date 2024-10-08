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



Route::group(['prefix'=>'edit'], function () {

	Route::get('about', ['as' => 'edit.about', 'uses' => 'AboutController@edit']);
	Route::post('about', ['as'=> 'save.about', 'uses' => 'AboutController@save']);
	Route::post('about/upload', ['as'=> 'upload.about', 'uses' => 'AboutController@upload']);

	Route::get('index', ['as' => 'edit.index', 'uses' => 'IndexController@edit']);
	Route::post('index/upload', ['as'=> 'upload.index', 'uses' => 'IndexController@upload']);

	Route::get('photography', ['as' => 'add.photography', 'uses' => 'PhotographyController@add']);

	Route::get('contact', ['as' => 'edit.contact', 'uses' => 'ContactController@edit']);
	Route::post('contact', ['as' => 'save.contact', 'uses' => 'ContactController@save']);

});

Route::group(
    [
        'prefix' => LocalizationService::locale(),
        'middleware' => 'setLanguage',
    ],
    function(){
    	Route::get('/', ['as' => 'index', 'uses' => 'IndexController@show'])->where('lang', 'ee|ru|en');
    	Route::get('/gallery.html', ['as' => 'photography', 'uses' => 'PhotographyController@show'])->where('lang', 'ee|ru|en');
    	Route::get('/about.html', ['as' => 'about', 'uses' => 'AboutController@show'])->where('lang', 'ee|ru|en');
    	Route::get('/contact.html', ['as' => 'contact', 'uses' => 'ContactController@show'])->where('lang', 'ee|ru|en');
    } 
);



	
