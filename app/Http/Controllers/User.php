<?php

namespace App\Http\Controllers;

use App\News;

class User extends Controller
{
	function index()
	{
		return view('user/index');
	}

	function news()
	{
		$news = News::orderBy('created_at', 'DESC')->paginate(10);
		return view('user/news', [ 'news' => $news ]);
	}

		function news_detail($post)
		{
			// $news = News::find($id);
			return view('user/news_detail', [ 'post' => $post ]);
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

	function table()
	{
		return view('user/table');
	}

	function event()
	{
		return view('user/event');
	}

	function map()
	{
		return view('user/map');
	}



	function sitemap()
	{
		return view('user/sitemap');
	}
}
