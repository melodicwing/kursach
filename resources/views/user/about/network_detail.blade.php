@extends('user/template')

@section('title', $rest->name )

@section('content')
	<div class='row'>
		<div class='col-xs-12'>
			<h4 class='about__network__header__block about__network__detail__header__block'>{{ $rest->name }}</h4>
		</div>
	</div>

	<div class='row-height hidden-xs'>
		<div class='col-sm-6 col-height'>
			<img src='{{ $rest->img_path }}'>
		</div>
		<div class='col-sm-6 col-height col-middle text-center'>
			{!! $rest->description !!}
		</div>
	</div>

	<div class='row visible-xs'>
		<div class='col-xs-12 text-center'>
			{!! $rest->description !!}
		</div>
		<div class='col-xs-12'>
			<img src='{{ $rest->img_path }}'>
		</div>
	</div>
@endsection