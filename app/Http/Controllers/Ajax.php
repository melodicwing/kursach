<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class Ajax extends Controller
{
	function event(Request $request) {
		Event::create($request->all());
		// return var_dump($request->input('bill'));
		return 'Ваш заказ принят. Наши менеджеры свяжутся с вами (или нет)';
	}
}
