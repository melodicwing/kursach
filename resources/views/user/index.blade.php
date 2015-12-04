@extends('user/template')

@section('title', 'Кушай!')

@section('content')
	<!-- Слайдер -->
	<script src="/assets/js/bxslider/jquery.bxslider.min.js"></script>
	<link href="/assets/js/bxslider/jquery.bxslider.css" rel="stylesheet" />

	<div class='row'>
		<div class='col-sm-3 hidden-xs'>
		</div>
		<div class=' col-sm-6 col-xs-12'>
			<div class="slider">
				<ul class='bxslider' style='height: 300px'>
					<li><img src='/assets/img/chinese-food-951889_1920.jpg' title="{{ trans('user/index.slider_1') }}"></li>
					<li><img src='/assets/img/dish-918613_1920.jpg' title="{{ trans('user/index.slider_2') }}"></li>
					<li><img src='/assets/img/food-878447_1920.jpg' title="{{ trans('user/index.slider_3') }}"></li>
					<li><img src='/assets/img/dinner-939434_1920.jpg' title="{{ trans('user/index.slider_4') }}"></li>
					<li><img src='/assets/img/french-fries-932849_1920.jpg' title="{{ trans('user/index.slider_5') }}"></li>
					<li><img src='/assets/img/meal-918639_1920.jpg' title="{{ trans('user/index.slider_6') }}"></li>
					<li><img src='/assets/img/meal-918758_1920.jpg' title="{{ trans('user/index.slider_7') }}"></li>
					<li><img src='/assets/img/sushi-932868_1920.jpg' title="{{ trans('user/index.slider_8') }}"></li>
					<li><img src='/assets/img/spaghetti-863304_1280.jpg' title="{{ trans('user/index.slider_9') }}"></li>
					<li><img src='/assets/img/meal-932966_1920.jpg' title="{{ trans('user/index.slider_10') }}"></li>
				</ul>
			</div>
			<script>
				$(document).ready(function(){
					$('.bxslider').bxSlider({
						captions: true
					});
				});
			</script>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12" style='text-align: center'>
			{!! trans('user/index.before_photo') !!}
		</div>
	</div>
	<div class='row'>
		<div class="col-sm-3 hidden-xs">
		</div>
		<div class="col-sm-3">
			<img src='/assets/img/direktor.jpg' style='width:100%'>
		</div>
		<div class="col-sm-3">
			{!! trans('user/index.after_photo') !!}
		</div>
		<div class="col-sm-3 hidden-xs">
		</div>
	</div>
	<div class='row spacer'>
		<div class="col-sm-3 hidden-xs">
		</div>
		<div class='col-sm-6'>
			<h3>{{ trans('user/index.news') }}</h3>
		</div>
		<div class="col-sm-3 hidden-xs">
		</div>
	</div>
	<div class='row'>
		<div class="col-sm-3 hidden-xs">
		</div>
		<div class="col-sm-3 col-xs-6">
			<h4>Новость1</h4>
			<p>Лалалала</p>
		</div>
		<div class="col-sm-3 col-xs-6">
			<h4>Новость2</h4>
			<p>Лалалала</p>
		</div>
		<div class="col-sm-3 hidden-xs">
		</div>
	</div>
@endsection