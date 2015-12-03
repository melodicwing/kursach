<?php

namespace App\Http\Controllers;



class User extends Controller
{
	function index()
	{
		return view('user/index');
	}

	function news()
	{
		return view('user/news');
	}

	function about()
	{
		echo \App::getLocale();
		return view('user/about/index');
	}

	function about_network()
	{
		return view('user/about/network');
	}

	function about_service()
	{
		return view('user/about/service');
	}
}
