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

Route::get('/', 'User@index')->name('home');
Route::get('/news', 'User@news')->name('news');
Route::group(['prefix' => 'about'], function(){
	Route::get('/', 'User@about')->name('about');
	Route::get('/network', 'User@about_network')->name('about/network');
	Route::get('/service', 'User@about_service')->name('about/service');
});
