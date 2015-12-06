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

Route::get('sas', function(){
	Auth::logout();
	return Request::path();
});

Route::get('qwe', function(){
	return var_export(config('database.connections'),1);
	return config('app.locale');
});

Route::get('welcome', function () {
    return view('welcome');
});

// Route::get('/', 'User@index')->name('home');
// 	Route::get('/news', 'User@news')->name('news');
// 	Route::group(['prefix' => 'about', 'as' => 'about/'], function(){
// 		Route::get('/', 'User@about')->name('');
// 		Route::get('/network', 'User@about_network')->name('network');
// 		Route::get('/service', 'User@about_service')->name('service');
// 	});

$locales = array_merge([''], config('app.other_langs'));;
foreach ($locales as $item) {
	if ( $item != '' ) {
		$lang = $item.'_';
	} else {
		$lang = $item;
	}

	Route::get("$lang/test", function(){
		return config('app.locale');
	})->name("$lang/test");

	Route::group(['prefix' => $item, 'as' => $lang], function(){
		Route::get('/', 'User@index')->name('home');
			Route::get('/news', 'User@news')->name('news');
			Route::group(['prefix' => 'about', 'as' => 'about/'], function(){
				Route::get('/', 'User@about')->name('');
				Route::get('/network', 'User@about_network')->name('network');
				Route::get('/service', 'User@about_service')->name('service');
				Route::get('/contacts', 'User@about_contacts')->name('contacts');
				Route::get('/rewards', 'User@about_rewards')->name('rewards');
				Route::get('/staff', 'User@about_staff')->name('staff');
				Route::get('/guestbook', 'User@about_guestbook')->name('guestbook');
			});
			Route::get('/menu', 'User@menu')->name('menu');
			Route::get('/table', 'User@table')->name('table');
			Route::get('/event', 'User@event')->name('event');
			Route::get('/map', 'User@map')->name('map');
			Route::get('/sitemap', 'User@sitemap')->name('sitemap');
	});
}

Route::group(['prefix' => 'admin'], function(){
	// Registration routes...
	Route::post('/auth/register', 'Auth\AuthController@postRegister');

	Route::get('/register', 'Admin@get_register');
	Route::post('/register', 'Admin@post_register');

	Route::get('/login', 'Admin@get_login');
	Route::post('/auth/login', 'Auth\AuthController@postLogin');

	Route::group(['middleware' => 'AdminLogin'], function() {
		Route::get('/', 'Admin@index');
		Route::get('/logout', 'Admin@logout');
	});
});

// $locale_pattern = implode('|', $locales);
// // echo $locale_pattern;
// Route::pattern('locale', $locale_pattern);
// Route::group(['prefix' => '{locale}'], function(){
	
// 	Route::get('/', 'User@index')->name('en_home');
// 	Route::get('/news', 'User@news')->name('en_news');
// 	Route::group(['prefix' => 'about'], function(){
// 		Route::get('/', 'User@about')->name('en_about');
// 		Route::get('/network', 'User@about_network')->name('en_about/network');
// 		Route::get('/service', 'User@about_service')->name('en_about/service');
// 	});
// });
