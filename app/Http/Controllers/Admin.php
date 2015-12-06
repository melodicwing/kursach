<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\News;

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
			News::create($request->except('_token'));
		}
		$news = News::orderBy('created_at', 'DESC')->paginate(1);
		return view('admin/news', [ 'news' => $news ]);
	}
}
