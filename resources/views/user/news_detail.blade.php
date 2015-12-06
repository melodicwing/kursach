@extends('user/template')

@section('title', $post->title )

@section('breadcrumbs', Breadcrumbs::render())

@section('content')
	<div class='row'>
		<div class='col-sm-3 hidden-xs'>
		</div>
		<div class='col-sm-6'>
			<h4>{{ $post->title }}</h4>
			<p class='small'>{{ $post->created_at }}</p>
			<p>{!! $post->message !!}</p>
		</div>
	</div>
@endsection