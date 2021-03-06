<!DOCTYPE html>
<html>
	<head>
		@include('admin/head')
	</head>
	<body>
		@if(Auth::check())
			<div class='container'>
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						      <a class="navbar-brand" href="/">На основной сайт</a>
						    </div>

						<div class='collapse navbar-collapse' id='myNavbar'>
							<ul class="nav navbar-nav">
								<li {{ Request::is('admin/news') ? "class=active" : "" }}><a href='/admin/news'>Новости</a></li>
								<li {{ Request::is('admin/network') ? "class=active" : "" }}><a href='/admin/network'>Сеть ресторанов</a></li>
								<li {{ Request::is('admin/guestbook') ? "class=active" : "" }}><a href='/admin/guestbook'>Отзывы</a></li>
								<li {{ Request::is('admin/menu') ? "class=active" : "" }}><a href='/admin/menu'>Меню</a></li>
								<li {{ Request::is('admin/table') ? "class=active" : "" }}><a href='/admin/table'>Заказы столиков</a></li>
								<li {{ Request::is('admin/event') ? "class=active" : "" }}><a href='/admin/event'>Мероприятия</a></li>
								<li {{ Request::is('admin/test') ? "class=active" : "" }}><a href='/admin/test'>Редачить тест</a></li>
							</ul>
							<p class="navbar-text navbar-right">{{ Auth::user()->name }} <a href='/admin/logout'>Выйти</a></p>
						</div>
					</div>
				</nav>
			</div>
		@endif

		<div class='container'>
			@yield('content')
		</div>
	</body>
</html>