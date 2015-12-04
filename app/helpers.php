<?php

function get_langs()
{
	return array_merge([''], config('app.other_langs'));
}

function link_loc()
{
	$lang = \App::getLocale();
	if ( $lang == 'ru' ) {
		return '';
	} else {
		return "/$lang";
	}
}

function lang_switch_url($lang)
{
	$path = Request::path();
	$parts = explode('/', $path);
	$locales = config('app.other_langs');
	if ( $lang == 'ru' ) {
		unset($parts[0]);
		return '/'.implode('/', $parts);
	} else {
		if ( in_array($parts[0], $locales) ) {
			$parts[0] = $lang;
			return '/'.implode('/', $parts);
		} else {
			return '/'.$lang.'/'.implode('/', $parts);
		}
	}
	// return Request::path();
}

function print_lang_switch()
{
	$out = '';
	$locales = get_langs();
	foreach ($locales as $lang) {
		if ( $lang == '' ) {
			$lang = 'ru';
		}
		if ( \App::getLocale() == $lang ) {
			$out .= "<span>$lang</span>".PHP_EOL;
		} else {
			$href = lang_switch_url($lang);
			$out .= "<a href='$href'>$lang</a>".PHP_EOL;
		}
	}
	return $out;
}
