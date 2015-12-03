@extends('user/template')

@section('title')
	Кушай!
@endsection

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
					<li><img src='/assets/img/chinese-food-951889_1920.jpg' title='Какой-то китайский салат'></li>
					<li><img src='/assets/img/dish-918613_1920.jpg' title='Милипиздрический блинчик с чем-то вкусным внутри'></li>
					<li><img src='/assets/img/food-878447_1920.jpg' title='Это просто нарезаные баклажаны, лол'></li>
					<li><img src='/assets/img/dinner-939434_1920.jpg' title='Куча салатов на любой вкус'></li>
					<li><img src='/assets/img/french-fries-932849_1920.jpg' title='Ништяковая пища'></li>
					<li><img src='/assets/img/meal-918639_1920.jpg' title='Кусочек мяса на полтарелки за мильён евро'></li>
					<li><img src='/assets/img/meal-918758_1920.jpg' title='Шмат рыбы размером на полпепельницы'></li>
					<li><img src='/assets/img/sushi-932868_1920.jpg' title='Суши для твоей тёлки'></li>
					<li><img src='/assets/img/spaghetti-863304_1280.jpg' title='Макарохи'></li>
					<li><img src='/assets/img/meal-932966_1920.jpg' title='Чайная ложка пюрехи и столько же мяса'></li>
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
			<h3>Мы - команда профессионалов!</h3>
			<p>Качество еды для нас важнее всего...</p>
			<p>...даже названия</p>
			<p>...даже дизайна сайта</p>
			<p>...даже внешнего вида нашего директора...</p>
			<br>
			<br>
			<p>А вот и он:</p>
		</div>
	</div>
	<div class='row'>
		<div class="col-sm-3 hidden-xs">
		</div>
		<div class="col-sm-3">
			<img src='/assets/img/direktor.jpg' style='width:100%'>
		</div>
		<div class="col-sm-3">
			<h3>Зюлягин С. Я.</h3> 
			<p>Дорогие клиенты!</p>
			<p>Мы рады приветствовать вас на нашем Сайте! Работая над ним мы старались для вас!</p>
		</div>
		<div class="col-sm-3 hidden-xs">
		</div>
	</div>
	<div class='row spacer'>
		<div class="col-sm-3 hidden-xs">
		</div>
		<div class='col-sm-6'>
			<h3>Последние новости:</h3>
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