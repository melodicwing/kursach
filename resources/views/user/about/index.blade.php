@extends('user/template')

@section('title', trans('user/template.about'))

@section('content')
	<div class='row'>
		<div class="col-sm-2">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="{{link_loc()}}/about">{{ trans('user/template.about') }}</a></li>
				<li><a href="{{link_loc()}}/about/network">{{ trans('user/template.network') }}</a></li>
				<li><a href="{{link_loc()}}/about/service">{{ trans('user/template.service') }}</a></li>
				<li><a href="{{link_loc()}}/about/contacts">{{ trans('user/template.contacts') }}</a></li>
				<li><a href="{{link_loc()}}/about/rewards">{{ trans('user/template.rewards') }}</a></li>
				<li><a href="{{link_loc()}}/about/staff">{{ trans('user/template.staff') }}</a></li>
				<li><a href="{{link_loc()}}/about/guestbook">{{ trans('user/template.guestbook') }}</a></li>
			</ul>
		</div>

		<div class='col-xs-12 visible-xs spacer'>
		</div>

		<div class='col-sm-10 col-xs-12'>
			<div class='row'>
				<div class='col-lg-12'>
					<a class='about__header__link' href='{{link_loc()}}/about/network'><h4 class='about__header__block'>{{ trans('user/template.network') }}</h4></a>
						<div class='row'>
							<div class='col-sm-3 col-xs-12'>
								<img class='about__img' src='/assets/img/ipad-632394_1920.jpg'>
							</div>

							<div class='col-xs-12 visible-xs spacer'>
							</div>

							<div class='col-sm-9 col-xs-12'>
								<p>{{ trans('user/about/index.network') }}</p>
							</div>
						</div>
				</div>

				<div class='col-lg-12 spacer40'>
					<a class='about__header__link' href='{{link_loc()}}/about/service'><h4 class='about__header__block'>{{ trans('user/template.service') }}</h4></a>
						<div class='row'>
							<div class='col-sm-3 col-xs-12'>
								<img class='about__img' src='/assets/img/table-settings-873232_1920.jpg'>
							</div>

							<div class='col-xs-12 visible-xs spacer'>
							</div>

							<div class='col-sm-9 col-xs-12'>
								<p>{{ trans('user/about/index.service') }}</p>
							</div>
						</div>
				</div>

				<div class='col-lg-12 spacer40'>
					<a class='about__header__link' href='{{link_loc()}}/about/contacts'><h4 class='about__header__block'>{{ trans('user/template.contacts') }}</h4></a>
						<div class='row'>
							<div class='col-sm-3 col-xs-12'>
								<img class='about__img' src='/assets/img/frog-949599_1920.jpg'>
							</div>

							<div class='col-xs-12 visible-xs spacer'>
							</div>

							<div class='col-sm-9 col-xs-12'>
								<p>{{ trans('user/about/index.contacts') }}</p>
							</div>
						</div>
				</div>

				<div class='col-lg-12 spacer40'>
					<a class='about__header__link' href='{{link_loc()}}/about/rewards'><h4 class='about__header__block'>{{ trans('user/template.rewards') }}</h4></a>
						<div class='row'>
							<div class='col-sm-3 col-xs-12'>
								<img class='about__img' src='/assets/img/certificate-40984_1280.png'>
							</div>

							<div class='col-xs-12 visible-xs spacer'>
							</div>

							<div class='col-sm-9 col-xs-12'>
								<p>{{ trans('user/about/index.rewards') }}</p>
							</div>
						</div>
				</div>

				<div class='col-lg-12 spacer40'>
					<a class='about__header__link' href='{{link_loc()}}/about/staff'><h4 class='about__header__block'>{{ trans('user/template.staff') }}</h4></a>
						<div class='row'>
							<div class='col-sm-3 col-xs-12'>
								<img class='about__img' src='/assets/img/staff.jpg'>
							</div>

							<div class='col-xs-12 visible-xs spacer'>
							</div>

							<div class='col-sm-9 col-xs-12'>
								<p>{{ trans('user/about/index.staff') }}</p>
							</div>
						</div>
				</div>

				<div class='col-lg-12 spacer40'>
					<a class='about__header__link' href='{{link_loc()}}/about/guestbook'><h4 class='about__header__block'>{{ trans('user/template.guestbook') }}</h4></a>
						<div class='row'>
							<div class='col-sm-3 col-xs-12'>
								<img class='about__img' src='/assets/img/guest-book-guest-77941_1920.jpg'>
							</div>

							<div class='col-xs-12 visible-xs spacer'>
							</div>

							<div class='col-sm-9 col-xs-12'>
								<p>{{ trans('user/about/index.guestbook') }}</p>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection