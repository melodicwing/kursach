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

		function about_contacts()
		{
			return view('user/about/contacts');
		}

		function about_rewards()
		{
			return view('user/about/rewards');
		}

		function about_staff()
		{
			return view('user/about/staff');
		}

		function about_guestbook()
		{
			return view('user/about/guestbook');
		}

	function menu()
	{
		return view('user/menu');
	}
}
