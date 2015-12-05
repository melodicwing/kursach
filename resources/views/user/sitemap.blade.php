@extends('user/template')

@section('content')
	<div class='row'>
		<div class='col-xs-12'>
			<ul>
				<li><a href="{{link_loc()}}/">{{ trans('user/template.home') }}</a></li>
				<li><a href="{{link_loc()}}/news">{{ trans('user/template.news') }}</a></li>
				<li>
					<a href="{{link_loc()}}/about">{{ trans('user/template.about') }}</a>
					<ul>
						<li><a href="{{link_loc()}}/about/network">{{ trans('user/template.network') }}</a></li>
						<li><a href="{{link_loc()}}/about/service">{{ trans('user/template.service') }}</a></li>
						<li><a href="{{link_loc()}}/about/contacts">{{ trans('user/template.contacts') }}</a></li>
						<li><a href="{{link_loc()}}/about/rewards">{{ trans('user/template.rewards') }}</a></li>
						<li><a href="{{link_loc()}}/about/staff">{{ trans('user/template.staff') }}</a></li>
						<li><a href="{{link_loc()}}/about/guestbook">{{ trans('user/template.guestbook') }}</a></li>
					</ul>
				</li>
				<li><a href="{{link_loc()}}/menu">{{ trans('user/template.menu') }}</a></li>
				<li><a href="{{link_loc()}}/table">{{ trans('user/template.table') }}</a></li>
				<li><a href="{{link_loc()}}/event">{{ trans('user/template.event') }}</a></li>
				<li><a href="{{link_loc()}}/map">{{ trans('user/template.map') }}</a></li>
				<li><a href="{{link_loc()}}/sitemap">{{ trans('user/template.sitemap') }}</a></li>
			</ul>
		</div>
	</div>
@endsection

@section('title', trans('user/template.sitemap'))