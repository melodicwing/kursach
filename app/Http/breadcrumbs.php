<?php

$locales = array_merge([''], config('app.other_langs'));
// var_dump($locales);
foreach ($locales as $item) {
	if ( $item != '' ) {
		$lang = $item.'_';
	} else {
		$lang = $item;
	}
	//Главная
	Breadcrumbs::register($lang.'home', function($breadcrumbs) use ($lang){
		$breadcrumbs->push($lang.'Главная', route($lang.'home'));
	});

	//Новости
	Breadcrumbs::register($lang.'news', function($breadcrumbs) use ($lang){
		$breadcrumbs->parent($lang.'home');
		$breadcrumbs->push($lang.'Новости', route($lang.'news'));
	});

	//О нас
	Breadcrumbs::register($lang.'about/', function($breadcrumbs) use ($lang){
		$breadcrumbs->parent($lang.'home');
		$breadcrumbs->push($lang.'О нас', route($lang.'about/'));
	});

		//О нас / Сеть ресторанов
		Breadcrumbs::register($lang.'about/network', function($breadcrumbs) use ($lang){
			$breadcrumbs->parent($lang.'about/');
			$breadcrumbs->push($lang.'Сеть ресторанов', route($lang.'about/network'));
		});

		//О нас / Обслуживание
		Breadcrumbs::register($lang.'about/service', function($breadcrumbs) use ($lang){
			$breadcrumbs->parent($lang.'about/');
			$breadcrumbs->push($lang.'Обслуживание', route($lang.'about/service'));
		});
}

// //Главная
// Breadcrumbs::register('ru_home', function($breadcrumbs){
// 	$breadcrumbs->push(trans('welcome.sas'), route('ru_home'));
// });

// Breadcrumbs::register('en_home', function($breadcrumbs){
// 	$breadcrumbs->push('Home', route('en_home'));
// });

// //Новости
// Breadcrumbs::register('news', function($breadcrumbs){
// 	$breadcrumbs->parent('ru_home');
// 	$breadcrumbs->push('Новости', route('news'));
// });

// //О нас
// Breadcrumbs::register('about', function($breadcrumbs){
// 	$breadcrumbs->parent('ru_home');
// 	$breadcrumbs->push('О нас', route('about'));
// });

// //О нас / Сеть ресторанов
// Breadcrumbs::register('about/network', function($breadcrumbs){
// 	$breadcrumbs->parent('about');
// 	$breadcrumbs->push('Сеть ресторанов', route('about/network'));
// });

// //О нас / Обслуживание
// Breadcrumbs::register('about/service', function($breadcrumbs){
// 	$breadcrumbs->parent('about');
// 	$breadcrumbs->push('Обслуживание', route('about/service'));
// });
