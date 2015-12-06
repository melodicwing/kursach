@extends('user/template')

@section('title', trans('user/template.news'))

@section('content')
	<div class='row'>
		<div class='col-sm-3 hidden-xs'>
		</div>
		<div class='col-xs-6'>
			<h2>{{ trans('user/news.news') }}</h2>
		</div>
	</div>

	@if($news->count())
		@foreach($news as $item)
			<div class='row'>
				<div class='col-sm-3 hidden-xs'>
				</div>
				<div class='col-sm-6'>
					<h4><a href='/news/{{ $item->id }}'>{{ $item->title }}</a></h4>
					<p class='small'>{{ $item->created_at }}</p>
					<p>{!! $item->message !!}</p>
				</div>
			</div>
			<div class='row'>
				<div class='col-sm-3 hidden-xs'>
				</div>
				<div class='col-sm-6'>
					{!! $news->render() !!}
				</div>
			</div>
		@endforeach
	@else
		<div class='row'>
				<div class='col-sm-3 hidden-xs'>
				</div>
				<div class='col-sm-6'>
					<p>{{ trans('user/news.no_news') }}</p>
				</div>
			</div>
	@endif
@endsection