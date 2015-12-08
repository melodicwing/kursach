<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use \App\Restauraunt;
use App\Dish;
use App\Comment;

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
			$rests = Restauraunt::orderBy('created_at', 'DESC')->paginate(9);
			return view('user/about/network', [ 'rests' => $rests ]);
		}

			function about_network_detail($rest)
			{
				return view('user/about/network_detail', [ 'rest' => $rest ]);
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

		function about_guestbook(Request $request)
		{
			if ($request->isMethod('POST')) {
				Comment::create($request->all());
			}
			$comments = Comment::where('approved', 't')->paginate(9);
			return view('user/about/guestbook', [ 'comments' => $comments ]);
		}

	function menu()
	{
		$first = Dish::where('category', 'first')->get();
		$second = Dish::where('category', 'second')->get();
		$desert = Dish::where('category', 'desert')->get();
		$drink = Dish::where('category', 'drink')->get();
		return view('user/menu',
			[
				'first' => $first,
				'second' => $second,
				'desert' => $desert,
				'drink' => $drink
			]
		);
	}

	function table()
	{
		return view('user/table');
	}

	function event()
	{
		$first = Dish::where('category', 'first')->get();
		$second = Dish::where('category', 'second')->get();
		$desert = Dish::where('category', 'desert')->get();
		$drink = Dish::where('category', 'drink')->get();
		return view('user/event',
			[
				'first' => $first,
				'second' => $second,
				'desert' => $desert,
				'drink' => $drink
			]
		);
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
