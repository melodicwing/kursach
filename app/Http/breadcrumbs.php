<?php

//Главная
Breadcrumbs::register('home', function($breadcrumbs){
	$breadcrumbs->push('Главная', route('home'));
});

//Новости
Breadcrumbs::register('news', function($breadcrumbs){
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Новости', route('news'));
});

//О нас
Breadcrumbs::register('about', function($breadcrumbs){
	$breadcrumbs->parent('home');
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
