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
		$breadcrumbs->push(trans('user/template.home'), route($lang.'home'));
	});

	//Новости
	Breadcrumbs::register($lang.'news', function($breadcrumbs) use ($lang){
		$breadcrumbs->parent($lang.'home');
		$breadcrumbs->push(trans('user/template.news'), route($lang.'news'));
	});

		//Новости подробно
		Breadcrumbs::register($lang.'news/detail', function($breadcrumbs, $post) use ($lang){
			$breadcrumbs->parent($lang.'news');
			$breadcrumbs->push($post->title, route($lang.'news/detail', $post->id));
		});

	//О нас
	Breadcrumbs::register($lang.'about/', function($breadcrumbs) use ($lang){
		$breadcrumbs->parent($lang.'home');
		$breadcrumbs->push(trans('user/template.about'), route($lang.'about/'));
	});

		//О нас / Сеть ресторанов
		Breadcrumbs::register($lang.'about/network', function($breadcrumbs) use ($lang){
			$breadcrumbs->parent($lang.'about/');
			$breadcrumbs->push(trans('user/template.network'), route($lang.'about/network'));
		});

			//О нас / Сеть ресторанов / ресторан подробно
			Breadcrumbs::register($lang.'about/network/detail', function($breadcrumbs, $rest) use ($lang){
				$breadcrumbs->parent($lang.'about/network');
				$breadcrumbs->push($rest->name, route($lang.'news/detail', $rest->id));
			});

		//О нас / Обслуживание
		Breadcrumbs::register($lang.'about/service', function($breadcrumbs) use ($lang){
			$breadcrumbs->parent($lang.'about/');
			$breadcrumbs->push(trans('user/template.service'), route($lang.'about/service'));
		});

		//О нас / Контакты
		Breadcrumbs::register($lang.'about/contacts', function($breadcrumbs) use ($lang){
			$breadcrumbs->parent($lang.'about/');
			$breadcrumbs->push(trans('user/template.contacts'), route($lang.'about/contacts'));
		});

		//О нас / Награды
		Breadcrumbs::register($lang.'about/rewards', function($breadcrumbs) use ($lang){
			$breadcrumbs->parent($lang.'about/');
			$breadcrumbs->push(trans('user/template.rewards'), route($lang.'about/rewards'));
		});

		//О нас / Персонал
		Breadcrumbs::register($lang.'about/staff', function($breadcrumbs) use ($lang){
			$breadcrumbs->parent($lang.'about/');
			$breadcrumbs->push(trans('user/template.staff'), route($lang.'about/staff'));
		});

		//О нас / Отзывы
		Breadcrumbs::register($lang.'about/guestbook', function($breadcrumbs) use ($lang){
			$breadcrumbs->parent($lang.'about/');
			$breadcrumbs->push(trans('user/template.guestbook'), route($lang.'about/guestbook'));
		});

	//Меню
	Breadcrumbs::register($lang.'menu', function($breadcrumbs) use ($lang){
		$breadcrumbs->parent($lang.'home');
		$breadcrumbs->push(trans('user/template.menu'), route($lang.'menu'));
	});

	//Заказ столика
	Breadcrumbs::register($lang.'table', function($breadcrumbs) use ($lang){
		$breadcrumbs->parent($lang.'home');
		$breadcrumbs->push(trans('user/template.table'), route($lang.'table'));
	});

	//Заказ мероприятия
	Breadcrumbs::register($lang.'event', function($breadcrumbs) use ($lang){
		$breadcrumbs->parent($lang.'home');
		$breadcrumbs->push(trans('user/template.event'), route($lang.'event'));
	});

	//Схема проезда
	Breadcrumbs::register($lang.'map', function($breadcrumbs) use ($lang){
		$breadcrumbs->parent($lang.'home');
		$breadcrumbs->push(trans('user/template.map'), route($lang.'map'));
	});

	//Карта сайта
	Breadcrumbs::register($lang.'sitemap', function($breadcrumbs) use ($lang){
		$breadcrumbs->parent($lang.'home');
		$breadcrumbs->push(trans('user/template.sitemap'), route($lang.'sitemap'));
	});

	//Тест
	Breadcrumbs::register($lang.'test', function($breadcrumbs) use ($lang){
		$breadcrumbs->parent($lang.'home');
		$breadcrumbs->push(trans('user/template.test'), route($lang.'test'));
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
