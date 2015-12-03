<!DOCTYPE html>
<html>
	<head>
		@include('user/head')
	</head>
	<body>
		<div class="container">

			<div class="jumbotron logo">
				<h1 class='logo'>Кушай!</h1>
				<p class='logo'>наша еда лучше, чем название</p>
			</div>
			
			<nav class="navbar navbar-inverse">
				<div class="container-fluid my__navbar__div">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span> 
				      </button>
				    </div>
				    <div class="collapse navbar-collapse my__navbar__div" id="myNavbar">
						<ul class="nav navbar-nav">
							<li><a href="/">Главная страница</a></li>
							<li><a href="/news">Новости</a></li>
							<li class="dropdown">
								<a class="dropdown-toggle disabled" data-toggle="dropdown" href="/about">О нас<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="/about/network">Сеть ресторанов</a></li>
									<li><a href="about_service.html">Обслуживание</a></li>
									<li><a href="about_contacts.html">Контакты</a></li>
									<li><a href="about_rewards.html">Награды</a></li>
									<li><a href="about_staff.html">Персонал</a></li>
									<li><a href="about_guestbook.html">Отзывы</a></li>
								</ul>
							</li>
							<li><a href="/study">Меню</a></li>
							<li class='dropdown'>
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Заказ
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Заказ столика</a></li>
									<li><a href="#">Заказ мероприятия</a></li>
								</ul>
							</li>
							<li><a href="/map">Схема проезда</a></li>
							<li><a href="/guestbook">Карта сайта</a></li>
						</ul>
				    </div>
				  </div>
			</nav>
			
			<div class='breadcrumbs'>
				<ul class="breadcrumb">
					<li><a href='index.html'>Главная</a></li>
					<li><a href='about.html'>О нас</a></li>
					<li class='active'>Отзывы</li>
				</ul>
			</div>
		</div>

		<div class='container spacer'>
			@yield('content')
		</div>

		<div class='container'>
			<div class='jumbotron footer'>
				<p style='text-align:center'>&copy Лось Д.А.</p>
				<p style='text-align:center; margin-bottom:0'>2015</p>
			</div>
		</div>
	</body>
</html>