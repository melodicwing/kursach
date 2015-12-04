@extends('user/template')

@section('title', trans('user/template.service'))

@section('content')
	<div class='row'>
				<div class='col-xs-12'>
					<p>{{ trans('user/about/service.msg') }}</p>
					<img class='about__img' src='/assets/img/kroliki.jpg'>
				</div>
			</div>
@endsection