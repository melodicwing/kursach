<?php

//Главная
Breadcrumbs::register('ru_home', function($breadcrumbs){
	$breadcrumbs->push('Главная', route('ru_home'));
});

Breadcrumbs::register('en_home', function($breadcrumbs){
	$breadcrumbs->push('Home', route('en_home'));
});

//Новости
Breadcrumbs::register('news', function($breadcrumbs){
	$breadcrumbs->parent('ru_home');
	$breadcrumbs->push('Новости', route('news'));
});

//О нас
Breadcrumbs::register('about', function($breadcrumbs){
	$breadcrumbs->parent('ru_home');
	$breadcrumbs->push('О нас', route('about'));
});

//О нас / Сеть ресторанов
Breadcrumbs::register('about/network', function($breadcrumbs){
	$breadcrumbs->parent('about');
	$breadcrumbs->push('Сеть ресторанов', route('about/network'));
});

//О нас / Обслуживание
Breadcrumbs::register('about/service', function($breadcrumbs){
	$breadcrumbs->parent('about');
	$breadcrumbs->push('Обслуживание', route('about/service'));
});
