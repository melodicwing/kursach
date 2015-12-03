<?php

function link_loc() {
	$lang = \App::getLocale();
	if ( $lang == 'ru' ) {
		return '';
	} else {
		return "/$lang";
	}
}
