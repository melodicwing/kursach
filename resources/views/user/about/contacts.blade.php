@extends('user/template')

@section('title', trans('user/template.contacts'))

@section('content')
	<div class='row'>
		<div class='col-xs-12 text-center'>
			{!! trans('user/about/contacts.msg') !!}
		</div>
	</div>
@endsection