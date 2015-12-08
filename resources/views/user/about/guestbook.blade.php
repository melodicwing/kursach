@extends('user/template')

@section('title', trans('user/template.guestbook'))

@section('content')
	<div class='row'>
		<div class='col-sm-offset-3 col-xs-12 col-sm-6'>
			<form method='post' action='/about/guestbook' onsubmit='parseMessage()'>
				{{ csrf_field() }}
				<div class='form-group'>
					<label for='inputName'>{{ trans('user/about/guestbook.name') }}</label>
					<input id='inputName' name='name' type='text' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='inputText'>{{ trans('user/about/guestbook.msg') }}</label>
					<textarea id='inputText' name='message' class='form-control' rows=5 data-provide='markdown'></textarea>
				</div>
				<div class='form-group'>
					<input id='inputSubmit' type='submit' class='form-control my__form' value='{{ trans('user/about/guestbook.submit') }}'>
				</div>
			</form>
		</div>
	</div>

	<div class='row'>
		<div class='col-xs-12 spacer'>
		</div>
	</div>

	@if($comments->count())
		<div class='row'>
			<?php $i = 0 ?>
			@foreach($comments as $item)
				@unless($i%3)
					<div class='clearfix'></div>
				@endunless
				<?php $i++ ?>
				<div class='col-sm-4'>
					<h4 class='about__network__header__block'>{{ $item->name }}, {{ date('d.m.Y', strtotime($item->created_at)) }}</h4>

					<div class='guestbook__frame'>
						{!! $item->message !!}
					</div>

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
				{!! $comments->render() !!}
			</div>
		</div>
	@else
		<div class='row'>
			<div class='col-xs-12 text-center'>
				<p>{{ trans('user/about/guestbook.no_items') }}</p>
			</div>
		</div>
	@endif

	<div class='row'>
		<div class='col-sm-4'>
			<h4 class='about__network__header__block'>Брюс Уэйн, 15.11.2015</h4>

			<div class='guestbook__frame'>
				<p>Ем манную кашку каждое утро в этом заведении, и только её, только здесь похудел на пару десятков фунтов за три недели, и это я ещё и за маму и за папу по ложечке съёдал сверху!</p>
			</div>

			<div class='hidden-xs spacer10'>
				&nbsp
			</div>
		</div>
		<div class='visible-xs-block spacer10'>
			&nbsp
		</div>
		<div class='col-sm-4'>
			<h4 class='about__network__header__block'>Андрей Журавлёв, 26.07.2015</h4>

			<div class='guestbook__frame'>
				<p>Суши здесь просто бомбические, не оторваться, не отказаться, не почесаться. Третьи сутки сижу тут и ем их, и знаете, мне даже васаби не всрался.</p>
			</div>

			<div class='hidden-xs spacer10'>
				&nbsp
			</div>
		</div>
		<div class='visible-xs-block spacer10'>
			&nbsp
		</div>
		<div class='col-sm-4'>
			<h4 class='about__network__header__block'>Твиттерский, 01.06.2015</h4>

			<div class='guestbook__frame'>
				<p>Всего 140 рублей за комплексный обед и ещё вай-фай бесплатный, не будь у меня дома, я бы поселился в холле этого заведения, и завёл бы себе инстаграм, чтобы постить фотки прекрасной еды, что они тут готовят.</p>
			</div>

			<div class='hidden-xs spacer10'>
				&nbsp
			</div>
		</div>
	</div>
	<div class='row'>
		<div class='visible-xs-block spacer10'>
			&nbsp
		</div>
		<div class='col-sm-4'>
			<h4 class='about__network__header__block'>Дуэйн Скала Джонсон, 23.04.2015</h4>

			<div class='guestbook__frame'>
				<p>знаете, меня все (почему-то) называют "Скалой", а я зову скалой ЭТОТ РЕСТОРАН. Терпение у персонала крепко как СКАЛА, посуда крепка как СКАЛА, даже цветы в горшочках крепки как СКАЛА. Приятного вам СКАЛАППЕТИТА.</p>
			</div>

			<div class='hidden-xs spacer10'>
				&nbsp
			</div>
		</div>
		<div class='visible-xs-block spacer10'>
			&nbsp
		</div>
		<div class='col-sm-4'>
			<h4 class='about__network__header__block'>Гарри Поттер, 31.07.2014</h4>

			<div class='guestbook__frame'>
				<p>Знаете, я навернул кучу тортиков в этом заведении в своё 34-летие, и моё волшебство ещё никогда не было таким волшебным. Они даже украсили всю выпечку маленькими снитчами из сахарно-песочного теста, я их конечно же слопал, после чего вингардиум-левиосса начала массово происходить повсюду.</p>
			</div>

			<div class='hidden-xs spacer10'>
				&nbsp
			</div>
		</div>
		<div class='visible-xs-block spacer10'>
			&nbsp
		</div>
		<div class='col-sm-4'>
			<h4 class='about__network__header__block'>Джон CHAMP Сина (ударение на И), THIS SUNDAY NIGHT</h4>

			<div class='guestbook__frame'>
				<p>Вы готовы? Готовы ли вы? А? ДВАЖДЫ ЧЕМПИОН В WWE ДЖОН СИНА СОВЕТУЕТ ВАМ ЭТОТ РЕСТОРАН. ЕСЛИ СКАЖЕТЕ ЧТО ВЫ ОТ МЕНЯ, ТО МОЖНО БУДЕТ СЪЕСТЬ ПОЛЕЗНЫЙ МЮСЛИ ЗАВТРАК ВСЕГО ЗА ФИФТИНАЙН НАЙНТИНАЙН.</p>
			</div>

			<div class='hidden-xs spacer10'>
				&nbsp
			</div>
		</div>
	</div>

	<script>
		function parseMessage()
		{
			$('#inputText').data('markdown').setContent(
				$('#inputText').data('markdown').parseContent()
			);

			return false;
		}
	</script>
@endsection