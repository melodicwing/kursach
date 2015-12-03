@extends('user/template')

@section('title', 'О нас')

@section('breadcrumbs', Breadcrumbs::render('about'))

@section('content')
	<div class='row'>
		<div class="col-sm-2">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="/about">О нас</a></li>
				<li><a href="about_network.html">Сеть ресторанов</a></li>
				<li><a href="about_service.html">Обслуживание</a></li>
				<li><a href="about_contacts.html">Контакты</a></li>
				<li><a href="about_rewards.html">Награды</a></li>
				<li><a href="about_staff.html">Персонал</a></li>
				<li><a href="about_guestbook.html">Отзывы</a></li>
			</ul>
		</div>

		<div class='col-xs-12 visible-xs spacer'>
		</div>

		<div class='col-sm-10 col-xs-12'>
			<div class='row'>
				<div class='col-lg-12'>
					<a class='about__header__link' href='/about/network'><h4 class='about__header__block'>Сеть ресторанов</h4></a>
						<div class='row'>
							<div class='col-sm-3 col-xs-12'>
								<img class='about__img' src='/assets/img/ipad-632394_1920.jpg'>
							</div>

							<div class='col-xs-12 visible-xs spacer'>
							</div>

							<div class='col-sm-9 col-xs-12'>
								<p>В данном разделе содержится перечень всех ресторанов нашей сети с указанием их местоположения на карте.</p>
							</div>
						</div>
				</div>

				<div class='col-lg-12 spacer40'>
					<a class='about__header__link' href='/about/service'><h4 class='about__header__block'>Обслуживание</h4></a>
						<div class='row'>
							<div class='col-sm-3 col-xs-12'>
								<img class='about__img' src='/assets/img/table-settings-873232_1920.jpg'>
							</div>

							<div class='col-xs-12 visible-xs spacer'>
							</div>

							<div class='col-sm-9 col-xs-12'>
								<p>Хочешь узнать, как у нас обслуживают? Тогда заходи в этот раздел.</p>
							</div>
						</div>
				</div>

				<div class='col-lg-12 spacer40'>
					<a class='about__header__link' href='about_contacts.html'><h4 class='about__header__block'>Контакты</h4></a>
						<div class='row'>
							<div class='col-sm-3 col-xs-12'>
								<img class='about__img' src='/assets/img/frog-949599_1920.jpg'>
							</div>

							<div class='col-xs-12 visible-xs spacer'>
							</div>

							<div class='col-sm-9 col-xs-12'>
								<p>Хочешь с нами связаться? Кликай на заголовок этого блока, чтобы узнать, как это сделать.</p>
							</div>
						</div>
				</div>

				<div class='col-lg-12 spacer40'>
					<a class='about__header__link' href='about_rewards.html'><h4 class='about__header__block'>Награды</h4></a>
						<div class='row'>
							<div class='col-sm-3 col-xs-12'>
								<img class='about__img' src='/assets/img/certificate-40984_1280.png'>
							</div>

							<div class='col-xs-12 visible-xs spacer'>
							</div>

							<div class='col-sm-9 col-xs-12'>
								<p>Здесь рассказано про то, какие мы классные и сколько наград урвали.</p>
							</div>
						</div>
				</div>

				<div class='col-lg-12 spacer40'>
					<a class='about__header__link' href='about_staff.html'><h4 class='about__header__block'>Персонал</h4></a>
						<div class='row'>
							<div class='col-sm-3 col-xs-12'>
								<img class='about__img' src='/assets/img/staff.jpg'>
							</div>

							<div class='col-xs-12 visible-xs spacer'>
							</div>

							<div class='col-sm-9 col-xs-12'>
								<p>Секретное досье НА КАЖДОГО нашего рабочего.</p>
							</div>
						</div>
				</div>

				<div class='col-lg-12 spacer40'>
					<a class='about__header__link' href='about_guestbook.html'><h4 class='about__header__block'>Отзывы</h4></a>
						<div class='row'>
							<div class='col-sm-3 col-xs-12'>
								<img class='about__img' src='/assets/img/guest-book-guest-77941_1920.jpg'>
							</div>

							<div class='col-xs-12 visible-xs spacer'>
							</div>

							<div class='col-sm-9 col-xs-12'>
								<p>Хочешь оставить своё убер-важное мнение? Жми на красную полоску чуть выше.</p>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection