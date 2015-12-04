@extends('user/template')

@section('title', trans('user/template.rewards'))

@section('content')
	<div class='row'>
		<div class='col-sm-4'>
			<h4 class='about__network__header__block'>Смешнявка 2015</h4>
			<img class='about__img' src='/assets/img/rewards/petr.jpg'>

			<br>
			<br>

			<p>Награда программиста, который делал наш сайт</p>

			<div class='hidden-xs spacer10'>
				&nbsp
			</div>
		</div>
		<div class='visible-xs-block spacer10'>
			&nbsp
		</div>
		<div class='col-sm-4'>
			<h4 class='about__network__header__block'>Победители Поташёва</h4>
			<img class='about__img' src='/assets/img/rewards/owl.jpg'>

			<br>
			<br>

			<p>В 2008 году команда нашей сети ресторанов одержала победу в игре "Что? Где? Когда?" над командой господина Поташёва со счетом 27:3 и овладела хрустальной совой в качестве награды и признания наших умственных способностей.</p>

			<div class='hidden-xs spacer10'>
				&nbsp
			</div>
		</div>
		<div class='visible-xs-block spacer10'>
			&nbsp
		</div>
		<div class='col-sm-4'>
			<h4 class='about__network__header__block'>Актёр, у которого еще нет оскара</h4>
			<img class='about__img' src='/assets/img/rewards/lev.jpg'>

			<br>
			<br>

			<p>Однажды наш второй повар так сильно порезал палец, что, пока изнывал от боли и страданий, выиграл канского льва.</p>

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
			<h4 class='about__network__header__block'>Еще награда</h4>
			<img class='about__img' src='/assets/img/rewards/len.png'>

			<br>
			<br>

			<p>Мне лень придумывать подпись к этой награде</p>

			<div class='hidden-xs spacer10'>
				&nbsp
			</div>
		</div>
	</div>
@endsection