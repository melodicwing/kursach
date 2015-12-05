<!-- {{ \App::getLocale() }} -->
<!-- {{ Request::path() }} -->
<!-- <?=var_export(explode('/',Request::path()),true) ?> -->
<!DOCTYPE html>
<html>
	<head>
		@include('user/head')
	</head>
	<body>
		<div class="container">

			<div class="jumbotron logo">
				<p class='lang__switch'>
					{!! print_lang_switch() !!}
				</p>
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
							<li><a href="{{link_loc()}}/">{{ trans('user/template.home') }}</a></li>
							<li><a href="{{link_loc()}}/news">{{ trans('user/template.news') }}</a></li>
							<li class="dropdown">
								<a class="dropdown-toggle disabled" data-toggle="dropdown" href="{{link_loc()}}/about">{{ trans('user/template.about') }}<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="{{link_loc()}}/about/network">{{ trans('user/template.network') }}</a></li>
									<li><a href="{{link_loc()}}/about/service">{{ trans('user/template.service') }}</a></li>
									<li><a href="{{link_loc()}}/about/contacts">{{ trans('user/template.contacts') }}</a></li>
									<li><a href="{{link_loc()}}/about/rewards">{{ trans('user/template.rewards') }}</a></li>
									<li><a href="{{link_loc()}}/about/staff">{{ trans('user/template.staff') }}</a></li>
									<li><a href="{{link_loc()}}/about/guestbook">{{ trans('user/template.guestbook') }}</a></li>
								</ul>
							</li>
							<li><a href="{{link_loc()}}/menu">{{ trans('user/template.menu') }}</a></li>
							<li class='dropdown'>
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ trans('user/template.booking') }}
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="{{link_loc()}}/table">{{ trans('user/template.table') }}</a></li>
									<li><a href="{{link_loc()}}/event">{{ trans('user/template.event') }}</a></li>
								</ul>
							</li>
							<li><a href="/map">{{ trans('user/template.map') }}</a></li>
							<li><a href="/guestbook">{{ trans('user/template.sitemap') }}</a></li>
						</ul>
				    </div>
				  </div>
			</nav>
			
			<!-- <div class='breadcrumbs'>
				<ul class="breadcrumb">
					<li><a href='index.html'>Главная</a></li>
					<li><a href='about.html'>О нас</a></li>
					<li class='active'>Отзывы</li>
				</ul>
			</div> -->
			@yield('breadcrumbs', Breadcrumbs::render())
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