@extends('user/template')

@section('title', trans('user/template.menu'))

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

	<div class='row spacer mymenu'>
		<ul class="nav nav-tabs nav-justified">
			<li class="active"><a data-toggle="tab" href="#first">{{ trans('user/menu.first') }}</a></li>
			<li><a data-toggle="tab" href="#second">{{ trans('user/menu.second') }}</a></li>
			<li><a data-toggle="tab" href="#deserts">{{ trans('user/menu.deserts') }}</a></li>
			<li><a data-toggle="tab" href="#drinks">{{ trans('user/menu.drinks') }}</a></li>
		</ul>

		<div class="tab-content">
			<div id="first" class="tab-pane fade in active">
				<div class='container spacer'>
					<div class='col-sm-4'>
						<h4 class='about__network__header__block'>Ресторан1</h4>
						<img class='about__img' src='../img/bar-828768_1920.jpg'>

						<p></p>


						<address>
							<strong>Twitter, Inc.</strong><br>
							1355 Market Street, Suite 900<br>
							San Francisco, CA 94103<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890<br>
							<a href='https://maps.yandex.ru'>Посмотреть на карте</a>
						</address>

						<div class='hidden-xs spacer10'>
							&nbsp
						</div>
					</div>

					<div class='col-sm-4'>
						<h4 class='about__network__header__block'>Ресторан1</h4>
						<img class='about__img' src='../img/bar-828768_1920.jpg'>

						<p></p>


						<address>
							<strong>Twitter, Inc.</strong><br>
							1355 Market Street, Suite 900<br>
							San Francisco, CA 94103<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890<br>
							<a href='https://maps.yandex.ru'>Посмотреть на карте</a>
						</address>

						<div class='hidden-xs spacer10'>
							&nbsp
						</div>
					</div>

					<div class='col-sm-4'>
						<h4 class='about__network__header__block'>Ресторан1</h4>
						<img class='about__img' src='../img/bar-828768_1920.jpg'>

						<p></p>


						<address>
							<strong>Twitter, Inc.</strong><br>
							1355 Market Street, Suite 900<br>
							San Francisco, CA 94103<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890<br>
							<a href='https://maps.yandex.ru'>Посмотреть на карте</a>
						</address>

						<div class='hidden-xs spacer10'>
							&nbsp
						</div>
					</div>
				</div>
			</div>
			<div id="second" class="tab-pane fade">
				<h3>Menu 1</h3>
				<p>Some content in menu 1.</p>
			</div>
			<div id="deserts" class="tab-pane fade">
				<h3>Menu 2</h3>
				<p>Some content in menu 2.</p>
			</div>
			<div id="drinks" class="tab-pane fade">
				<h3>Menu 2</h3>
				<p>Some content in menu 2.</p>
			</div>
		</div>
	</div>
@endsection