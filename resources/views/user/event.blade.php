@extends('user/template')

@section('title', trans('user/template.event'))

@section('content')
	<div class='row'>
		<div class='col-xs-12 col-sm-6 col-sm-offset-3'>
			<form class='form-horizontal'>
				<div class='form-group'>
					<label class='control-label col-xs-6 label__final__price'>Итоговая стоимость заказа:</label>
					<div class='col-xs-6'>
						<p>абхазия</p>
					</div>
				</div>
			</form>
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
					<div class='row'>
						<div class='col-sm-4'>
							<h4 class='about__network__header__block'>первое 1</h4>

							<form>
								<div class='form-group'>
									<label class='control-label col-sm-4'>Описание:</label>
									<div class='col-sm-8'>
										<p>текст описания</p>
									</div>
								</div>
								<div class='form-group'>
									<label class='control-label col-xs-4'>Цена:</label>
									<div class='col-xs-8'>
										<p>100</p>
									</div>
								</div>
								<div class='form-group'>
									<label for='first_1_amount' class='control-label col-xs-4'>Количество:</label>
									<div class='col-xs-8'>
										<input type='text' class='form-control' id='first_1_amount'>
									</div>
								</div>
							</form>

							<div class='spacer10'>
								&nbsp
							</div>
						</div>

						<div class='col-sm-4'>
							<h4 class='about__network__header__block'>первое 2</h4>

							<form>
								<div class='form-group'>
									<label class='control-label col-sm-4'>Описание:</label>
									<div class='col-sm-8'>
										<p>текст описания</p>
									</div>
								</div>
								<div class='form-group'>
									<label class='control-label col-xs-4'>Цена:</label>
									<div class='col-xs-8'>
										<p>100</p>
									</div>
								</div>
								<div class='form-group'>
									<label for='first_2_amount' class='control-label col-xs-4'>Количество:</label>
									<div class='col-xs-8'>
										<input type='text' class='form-control' id='first_2_amount'>
									</div>
								</div>
							</form>

							<div class='spacer10'>
								&nbsp
							</div>
						</div>

						<div class='col-sm-4'>
							<h4 class='about__network__header__block'>первое 3</h4>

							<form>
								<div class='form-group'>
									<label class='control-label col-sm-4'>Описание:</label>
									<div class='col-sm-8'>
										<p>текст описания</p>
									</div>
								</div>
								<div class='form-group'>
									<label class='control-label col-xs-4'>Цена:</label>
									<div class='col-xs-8'>
										<p>300</p>
									</div>
								</div>
								<div class='form-group'>
									<label for='first_3_amount' class='control-label col-xs-4'>Количество:</label>
									<div class='col-xs-8'>
										<input type='text' class='form-control' id='first_3_amount'>
									</div>
								</div>
							</form>

							<div class='spacer10'>
								&nbsp
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="second" class="tab-pane fade">
				<div class='container spacer'>
					<div class='row'>
						<div class='col-sm-4'>
							<h4 class='about__network__header__block'>второе 1</h4>

							<form>
								<div class='form-group'>
									<label class='control-label col-sm-4'>Описание:</label>
									<div class='col-sm-8'>
										<p>текст описания</p>
									</div>
								</div>
								<div class='form-group'>
									<label class='control-label col-xs-4'>Цена:</label>
									<div class='col-xs-8'>
										<p>100</p>
									</div>
								</div>
								<div class='form-group'>
									<label for='second_1_amount' class='control-label col-xs-4'>Количество:</label>
									<div class='col-xs-8'>
										<input type='text' class='form-control' id='second_1_amount'>
									</div>
								</div>
							</form>

							<div class='spacer10'>
								&nbsp
							</div>
						</div>

						<div class='col-sm-4'>
							<h4 class='about__network__header__block'>второе 2</h4>

							<form>
								<div class='form-group'>
									<label class='control-label col-sm-4'>Описание:</label>
									<div class='col-sm-8'>
										<p>текст описания</p>
									</div>
								</div>
								<div class='form-group'>
									<label class='control-label col-xs-4'>Цена:</label>
									<div class='col-xs-8'>
										<p>100</p>
									</div>
								</div>
								<div class='form-group'>
									<label for='second_2_amount' class='control-label col-xs-4'>Количество:</label>
									<div class='col-xs-8'>
										<input type='text' class='form-control' id='second_2_amount'>
									</div>
								</div>
							</form>

							<div class='spacer10'>
								&nbsp
							</div>
						</div>

						<div class='col-sm-4'>
							<h4 class='about__network__header__block'>второе 3</h4>

							<form>
								<div class='form-group'>
									<label class='control-label col-sm-4'>Описание:</label>
									<div class='col-sm-8'>
										<p>текст описания</p>
									</div>
								</div>
								<div class='form-group'>
									<label class='control-label col-xs-4'>Цена:</label>
									<div class='col-xs-8'>
										<p>300</p>
									</div>
								</div>
								<div class='form-group'>
									<label for='second_3_amount' class='control-label col-xs-4'>Количество:</label>
									<div class='col-xs-8'>
										<input type='text' class='form-control' id='second_3_amount'>
									</div>
								</div>
							</form>

							<div class='spacer10'>
								&nbsp
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="deserts" class="tab-pane fade">
				<div class='container spacer'>
					<div class='row'>
						<div class='col-sm-4'>
							<h4 class='about__network__header__block'>десерт 1</h4>

							<form>
								<div class='form-group'>
									<label class='control-label col-sm-4'>Описание:</label>
									<div class='col-sm-8'>
										<p>текст описания</p>
									</div>
								</div>
								<div class='form-group'>
									<label class='control-label col-xs-4'>Цена:</label>
									<div class='col-xs-8'>
										<p>100</p>
									</div>
								</div>
								<div class='form-group'>
									<label for='desert_1_amount' class='control-label col-xs-4'>Количество:</label>
									<div class='col-xs-8'>
										<input type='text' class='form-control' id='desert_1_amount'>
									</div>
								</div>
							</form>

							<div class='spacer10'>
								&nbsp
							</div>
						</div>

						<div class='col-sm-4'>
							<h4 class='about__network__header__block'>десерт 2</h4>

							<form>
								<div class='form-group'>
									<label class='control-label col-sm-4'>Описание:</label>
									<div class='col-sm-8'>
										<p>текст описания</p>
									</div>
								</div>
								<div class='form-group'>
									<label class='control-label col-xs-4'>Цена:</label>
									<div class='col-xs-8'>
										<p>100</p>
									</div>
								</div>
								<div class='form-group'>
									<label for='desert_2_amount' class='control-label col-xs-4'>Количество:</label>
									<div class='col-xs-8'>
										<input type='text' class='form-control' id='desert_2_amount'>
									</div>
								</div>
							</form>

							<div class='spacer10'>
								&nbsp
							</div>
						</div>

						<div class='col-sm-4'>
							<h4 class='about__network__header__block'>десерт 3</h4>

							<form>
								<div class='form-group'>
									<label class='control-label col-sm-4'>Описание:</label>
									<div class='col-sm-8'>
										<p>текст описания</p>
									</div>
								</div>
								<div class='form-group'>
									<label class='control-label col-xs-4'>Цена:</label>
									<div class='col-xs-8'>
										<p>300</p>
									</div>
								</div>
								<div class='form-group'>
									<label for='desert_3_amount' class='control-label col-xs-4'>Количество:</label>
									<div class='col-xs-8'>
										<input type='text' class='form-control' id='desert_3_amount'>
									</div>
								</div>
							</form>

							<div class='spacer10'>
								&nbsp
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="drinks" class="tab-pane fade">
				<div class='container spacer'>
					<div class='row'>
						<div class='col-sm-4'>
							<h4 class='about__network__header__block'>напиток 1</h4>

							<form>
								<div class='form-group'>
									<label class='control-label col-sm-4'>Описание:</label>
									<div class='col-sm-8'>
										<p>текст описания</p>
									</div>
								</div>
								<div class='form-group'>
									<label class='control-label col-xs-4'>Цена:</label>
									<div class='col-xs-8'>
										<p>100</p>
									</div>
								</div>
								<div class='form-group'>
									<label for='drink_1_amount' class='control-label col-xs-4'>Количество:</label>
									<div class='col-xs-8'>
										<input type='text' class='form-control' id='drink_1_amount'>
									</div>
								</div>
							</form>

							<div class='spacer10'>
								&nbsp
							</div>
						</div>

						<div class='col-sm-4'>
							<h4 class='about__network__header__block'>напиток 2</h4>

							<form>
								<div class='form-group'>
									<label class='control-label col-sm-4'>Описание:</label>
									<div class='col-sm-8'>
										<p>текст описания</p>
									</div>
								</div>
								<div class='form-group'>
									<label class='control-label col-xs-4'>Цена:</label>
									<div class='col-xs-8'>
										<p>100</p>
									</div>
								</div>
								<div class='form-group'>
									<label for='drink_2_amount' class='control-label col-xs-4'>Количество:</label>
									<div class='col-xs-8'>
										<input type='text' class='form-control' id='drink_2_amount'>
									</div>
								</div>
							</form>

							<div class='spacer10'>
								&nbsp
							</div>
						</div>

						<div class='col-sm-4'>
							<h4 class='about__network__header__block'>напиток 3</h4>

							<form>
								<div class='form-group'>
									<label class='control-label col-sm-4'>Описание:</label>
									<div class='col-sm-8'>
										<p>текст описания</p>
									</div>
								</div>
								<div class='form-group'>
									<label class='control-label col-xs-4'>Цена:</label>
									<div class='col-xs-8'>
										<p>300</p>
									</div>
								</div>
								<div class='form-group'>
									<label for='drink_3_amount' class='control-label col-xs-4'>Количество:</label>
									<div class='col-xs-8'>
										<input type='text' class='form-control' id='drink_3_amount'>
									</div>
								</div>
							</form>

							<div class='spacer10'>
								&nbsp
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class='row'>
		<div class='col-xs-12 col-sm-6 col-sm-offset-3'>
			<form class='form-horizontal'>
				<div class='form-group'>
					<label class='control-label col-xs-6 label__final__price'>Итоговая стоимость заказа:</label>
					<div class='col-xs-6'>
						<p>абхазия</p>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection