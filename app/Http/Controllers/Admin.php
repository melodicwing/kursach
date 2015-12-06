<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\News;
use \App\Restauraunt;

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
			return redirect('/admin');
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
}
