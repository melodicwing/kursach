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

	<div class='row spacer'>
		<div class='col-xs-12'>
			<div class='mymenu'>
				<ul class="nav nav-tabs nav-justified">
					<li class="active"><a data-toggle="tab" href="#first">{{ trans('user/menu.first') }}</a></li>
					<li><a data-toggle="tab" href="#second">{{ trans('user/menu.second') }}</a></li>
					<li><a data-toggle="tab" href="#deserts">{{ trans('user/menu.deserts') }}</a></li>
					<li><a data-toggle="tab" href="#drinks">{{ trans('user/menu.drinks') }}</a></li>
				</ul>

				<div class="tab-content">
					<div id="first" class="tab-pane fade in active">
						<div class='spacer'>
							@if($first->count())
								<div class='row'>
								@foreach($first as $item)
									<div class='col-sm-4'>
										<h4 class='about__network__header__block text-center first_{{ $item->id }}_name'>{{ $item->name }}</h4>

										<form autocomplete=off>
											<div class='form-group'>
												<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
												<div class='col-xs-6'>
													{!! $item->description !!}
												</div>
											</div>
											<div class='form-group'>
												<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
												<div class='col-xs-6'>
													<p class='first_{{ $item->id }}_price'>{{ $item->price }}</p>
												</div>
											</div>
											<div class='form-group'>
												<label for='first_{{ $item->id }}_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
												<div class='col-xs-6'>
													<input type='text' class='form-control input__amount' id='first_{{ $item->id }}_amount' value=0>
												</div>
											</div>
										</form>

										<div class='spacer10'>
											&nbsp
										</div>
									</div>
								@endforeach
								</div>
							@else
								<div class='row'>
									<div class='col-sm-3 hidden-xs'>
									</div>
									<div class='col-sm-6'>
										<p>{{ trans('user/menu.no_item') }}</p>
									</div>
								</div>
							@endif
						</div>
					</div>

					<div id="second" class="tab-pane fade">
						<div class='spacer'>
							@if($second->count())
								<div class='row'>
								@foreach($second as $item)
									<div class='col-sm-4'>
										<h4 class='about__network__header__block text-center second_{{ $item->id }}_name'>{{ $item->name }}</h4>

										<form autocomplete=off>
											<div class='form-group'>
												<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
												<div class='col-xs-6'>
													{!! $item->description !!}
												</div>
											</div>
											<div class='form-group'>
												<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
												<div class='col-xs-6'>
													<p class='second_{{ $item->id }}_price'>{{ $item->price }}</p>
												</div>
											</div>
											<div class='form-group'>
												<label for='second_{{ $item->id }}_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
												<div class='col-xs-6'>
													<input type='text' class='form-control input__amount' id='second_{{ $item->id }}_amount' value=0>
												</div>
											</div>
										</form>

										<div class='spacer10'>
											&nbsp
										</div>
									</div>
								@endforeach
								</div>
							@else
								<div class='row'>
									<div class='col-sm-3 hidden-xs'>
									</div>
									<div class='col-sm-6'>
										<p>{{ trans('user/menu.no_item') }}</p>
									</div>
								</div>
							@endif
						</div>
					</div>

					<div id="deserts" class="tab-pane fade">
						<div class='spacer'>
							<div class='spacer'>
								@if($desert->count())
									<div class='row'>
									@foreach($desert as $item)
										<div class='col-sm-4'>
											<h4 class='about__network__header__block text-center desert_{{ $item->id }}_name'>{{ $item->name }}</h4>

											<form autocomplete=off>
												<div class='form-group'>
													<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
													<div class='col-xs-6'>
														{!! $item->description !!}
													</div>
												</div>
												<div class='form-group'>
													<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
													<div class='col-xs-6'>
														<p class='desert_{{ $item->id }}_price'>{{ $item->price }}</p>
													</div>
												</div>
												<div class='form-group'>
													<label for='desert_{{ $item->id }}_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
													<div class='col-xs-6'>
														<input type='text' class='form-control input__amount' id='desert_{{ $item->id }}_amount' value=0>
													</div>
												</div>
											</form>

											<div class='spacer10'>
												&nbsp
											</div>
										</div>
									@endforeach
									</div>
								@else
									<div class='row'>
										<div class='col-sm-3 hidden-xs'>
										</div>
										<div class='col-sm-6'>
											<p>{{ trans('user/menu.no_item') }}</p>
										</div>
									</div>
								@endif
							</div>
						</div>
					</div>

					<div id="drinks" class="tab-pane fade">
						<div class='spacer'>
							@if($drink->count())
								<div class='row'>
								@foreach($drink as $item)
									<div class='col-sm-4'>
										<h4 class='about__network__header__block text-center drink_{{ $item->id }}_name'>{{ $item->name }}</h4>

										<form autocomplete=off>
											<div class='form-group'>
												<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
												<div class='col-xs-6'>
													{!! $item->description !!}
												</div>
											</div>
											<div class='form-group'>
												<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
												<div class='col-xs-6'>
													<p class='drink_{{ $item->id }}_price'>{{ $item->price }}</p>
												</div>
											</div>
											<div class='form-group'>
												<label for='drink_{{ $item->id }}_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
												<div class='col-xs-6'>
													<input type='text' class='form-control input__amount' id='drink_{{ $item->id }}_amount' value=0>
												</div>
											</div>
										</form>

										<div class='spacer10'>
											&nbsp
										</div>
									</div>
								@endforeach
								</div>
							@else
								<div class='row'>
									<div class='col-sm-3 hidden-xs'>
									</div>
									<div class='col-sm-6'>
										<p>{{ trans('user/menu.no_item') }}</p>
									</div>
								</div>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection