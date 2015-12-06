@extends('user/template')

@section('title', trans('user/template.network'))

@section('content')
	@if($rests->count())
		<div class='row'>
		@foreach($rests as $item)
			<div class='col-sm-4'>
				<a class='h4__link' href='{{link_loc()}}/about/network/{{ $item->id }}'><h4 class='about__network__header__block'>{{ $item->name }}</h4></a>
				<img class='about__img' src='{{ $item->img_path }}'>

				{!! $item->description !!}

				<div class='hidden-xs spacer10'>
					&nbsp
				</div>
			</div>
			<div class='visible-xs-block spacer10'>
				&nbsp
			</div>
		@endforeach
		</div>
		<div class='row'>
			<div class='col-xs-12 text-center'>
				{!! $rests->render() !!}
			</div>
		</div>
	@else
		<div class='row'>
				<div class='col-sm-3 hidden-xs'>
				</div>
				<div class='col-sm-6'>
					<p>{{ trans('user/about/network.no_rests') }}</p>
				</div>
			</div>
	@endif
@endsection