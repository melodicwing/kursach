<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Table;

class Ajax extends Controller
{
	function event(Request $request) {
		Event::create($request->all());
		// return var_dump($request->input('bill'));
		return 'Ваш заказ принят. Наши менеджеры свяжутся с вами (или нет)';
	}

	function table(Request $request) {
		if ( Table::insert($request->all()) ) {
			return 'Ваш заказ принят. Наши менеджеры свяжутся с вами (или нет)';
		} else {
			return 'К сожалению, в выбранные вами день и время столик занят.';
		}
	}
}
