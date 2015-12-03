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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', 'User@index')->name('ru_home');
	Route::get('/news', 'User@news')->name('ru_news');
	Route::group(['prefix' => 'about'], function(){
		Route::get('/', 'User@about')->name('ru_about');
		Route::get('/network', 'User@about_network')->name('ru_about/network');
		Route::get('/service', 'User@about_service')->name('ru_about/service');
	});

Route::group(['prefix' => 'en'], function(){
	// App::setLocale('en');
	Route::get('/', 'User@index')->name('en_home');
	Route::get('/news', 'User@news')->name('en_news');
	Route::group(['prefix' => 'about'], function(){
		Route::get('/', 'User@about')->name('en_about');
		Route::get('/network', 'User@about_network')->name('en_about/network');
		Route::get('/service', 'User@about_service')->name('en_about/service');
	});
});
