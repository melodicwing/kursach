<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\News;
use \App\Restauraunt;
use \App\Dish;
use \App\Event;
use \App\Comment;
use \App\Table;

class Admin extends Controller
{
	public function index()
	{
		return view('admin/index');
	}

	public function get_register()
	{
		if ( \Auth::check() ) {
			return redirect('/admin');
		}
		return view('admin/register');
	}

	public function post_register(Request $request)
	{
		if ( $request->input('password') == 'pepyaka' ) {
			return view('admin/true_register');
		} else {
			return view('admin/register');
		}
	}

	public function get_login()
	{
		if ( \Auth::check() ) {
			//return redirect('/admin');
			return redirect()->intended('/admin');
		}
		return view('admin/login');
	}

	public function logout()
	{
		\Auth::logout();
		return redirect('/admin');
	}

	public function news(Request $request)
	{
		if ( $request->isMethod('POST') ) {
			switch ( $request->input('type') ) {
				case 'insert':
					News::create($request->except('_token'));
					break;
				case 'update':
					News::find( $request->input('id') )->update([
						'title' => $request->input('title'),
						'message' => $request->input('message'),
					]);
					break;
			}
		}
		if ( $request->isMethod('GET') ) {
			$item = News::find($request->input('remove'));
			if ( $item ) {
				$item->delete();
			}
		}
		$news = News::orderBy('created_at', 'DESC')->paginate(10);
		return view('admin/news', [ 'news' => $news ]);
	}

	public function network(Request $request)
	{
		if ( $request->isMethod('POST') ) {
			switch ( $request->input('type') ) {
				case 'insert':
					Restauraunt::insert($request);
					break;
				case 'update':
					Restauraunt::find( $request->input('id') )->my_update($request);
					break;
			}
		}
		if ( $request->isMethod('GET') ) {
			$item = Restauraunt::find($request->input('remove'));
			if ( $item ) {
				$item->delete();
			}
		}
		$rests = Restauraunt::orderBy('created_at', 'DESC')->paginate(9);
		return view('admin/network', [ 'rests' => $rests ]);
	}

	public function menu(Request $request) {
		if ( $request->isMethod('POST') ) {
			switch ( $request->input('type') ) {
				case 'insert':
					Dish::create($request->all());
					break;
				case 'update':
					Dish::find( $request->input('id') )->update([
						'category' => $request->input('category'),
						'name' => $request->input('name'),
						'description' => $request->input('description'),
						'price' => $request->input('price'),
					]);
					break;
			}
		}
		if ( $request->isMethod('GET') ) {
			$item = Dish::find($request->input('remove'));
			if ( $item ) {
				$item->delete();
			}
		}
		$first = Dish::where('category', 'first')->get();
		$second = Dish::where('category', 'second')->get();
		$desert = Dish::where('category', 'desert')->get();
		$drink = Dish::where('category', 'drink')->get();
		return view('admin/menu',
			[
				'first' => $first,
				'second' => $second,
				'desert' => $desert,
				'drink' => $drink
			]
		);
	}

	function event(Request $request)
	{
		$item = Event::find($request->input('check'));
		if ( $item ) {
			$item->delete();
		}
		$events = Event::withTrashed()->orderBy('deleted_at', 'desc')->paginate(9);
		// dd($events[0]->bill);
		return view('admin/event', [ 'events' => $events ]);
	}

	function event_detail($event)
	{
		return view('admin/event_detail', [ 'event' => $event ]);
	}

	function guestbook(Request $request)
	{
		$item = Comment::find($request->input('approve'));
		if ( $item ) {
			$item->approved = true;
			$item->save();
		}
		$item = Comment::find($request->input('disapprove'));
		if ( $item ) {
			$item->approved = false;
			$item->save();
		}
		$comments = Comment::paginate(9);
		return view('admin/guestbook', [ 'comments' => $comments ]);
	}

	function table()
	{
		$tables = Table::orderBy('from', 'desc')->orderBy('to', 'desc')->orderBy('table', 'asc')->get();
		return view('admin/table', [ 'tables' => $tables ]);
	}

	function table_detail($table)
	{
		return view('admin/table_detail', [ 'table' => $table ]);
	}

	function test(Request $request)
	{
		$content = \Storage::get('resources/views/user/test.blade.php');
		// dd($content);
		if ( $request->isMethod('POST') ) {
			// dd($request->all());
			$pattern = '/(@section\(\'content\'\))(.*)(@endsection)/s';
			$replace = '${1}'.$request->input('content').'${3}';
			$content = preg_replace( $pattern, $replace, $content );
			\Storage::put('resources/views/user/test.blade.php', $content);
		}
		$pattern = '/(@section\(\'content\'\))(?P<content>.*)(@endsection)/s';
		preg_match($pattern, $content, $matches);
		// dd($matches);
		return view('admin/test', [ 'content' => $matches['content'] ]);
	}
}
