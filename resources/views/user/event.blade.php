@extends('user/template')

@section('title', trans('user/template.event'))

@section('content')
	<div class='row'>

		<div class='col-xs-12 col-sm-3'>
			<form class='form-horizontal'>
				<div class='form-group'>
					<label class='control-label col-xs-12 label__contact'>{{ trans('user/event.contact') }}</label>
					<div class='col-xs-12'>
						<textarea class='form-control'></textarea>
					</div>
				</div>

				<div class='form-group'>
					<label class='control-label col-xs-12 label__contact'>{{ trans('user/event.bill') }}</label>
				</div>
				<table class='table table-condensed bill'>
					<tr>
						<th></th>
						<th>{{ trans('user/event.bill_name') }}</th>
						<th>{{ trans('user/event.bill_amount') }}</th>
						<th>&nbsp</th>
						<th>{{ trans('user/event.bill_price') }}</th>
						<th>&nbsp</th>
						<th>{{ trans('user/event.bill_cost') }}</th>
					</tr>
				</table>

				<table class='table'>
					<tr>
						<td class='final__price__label'>
							<label class='label__final__price'>{{ trans('user/event.final_price') }}</label>
						</td>
						<td class='final__price__value'>
							<p class='final__price'>0</p>
						</td>
					</tr>
				</table>

				<div class='form-group'>
					<div class='col-xs-12'>
						<input type='submit' class='form-control my__form' value='{{ trans('user/event.submit') }}'>
					</div>
				</div>
			</form>
		</div>

		<div class='col-xs-12 col-sm-9'>
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
							<div class='row'>
								<div class='col-sm-4'>
									<h4 class='about__network__header__block first_1_name'>первое 1</h4>

									<form autocomplete=off>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
											<div class='col-xs-6'>
												<p>текст описания</p>
											</div>
										</div>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
											<div class='col-xs-6'>
												<p class='first_1_price'>100</p>
											</div>
										</div>
										<div class='form-group'>
											<label for='first_1_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
											<div class='col-xs-6'>
												<input type='text' class='form-control input__amount' id='first_1_amount' value=0>
											</div>
										</div>
									</form>

									<div class='spacer10'>
										&nbsp
									</div>
								</div>

								<div class='col-sm-4'>
									<h4 class='about__network__header__block first_2_name'>первое 2</h4>

									<form autocomplete=off>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
											<div class='col-xs-6'>
												<p>текст описания</p>
											</div>
										</div>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
											<div class='col-xs-6'>
												<p class='first_2_price'>100</p>
											</div>
										</div>
										<div class='form-group'>
											<label for='first_2_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
											<div class='col-xs-6'>
												<input type='text' class='form-control input__amount' id='first_2_amount' value=0>
											</div>
										</div>
									</form>

									<div class='spacer10'>
										&nbsp
									</div>
								</div>

								<div class='col-sm-4'>
									<h4 class='about__network__header__block first_3_name'>первое 3</h4>

									<form autocomplete=off>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
											<div class='col-xs-6'>
												<p>текст описания</p>
											</div>
										</div>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
											<div class='col-xs-6'>
												<p class='first_3_price'>300</p>
											</div>
										</div>
										<div class='form-group'>
											<label for='first_3_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
											<div class='col-xs-6'>
												<input type='text' class='form-control input__amount' id='first_3_amount' value=0>
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
						<div class='spacer'>
							<div class='row'>
								<div class='col-sm-4'>
									<h4 class='about__network__header__block second_1_name'>второе 1</h4>

									<form autocomplete=off>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
											<div class='col-xs-6'>
												<p>текст описания</p>
											</div>
										</div>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
											<div class='col-xs-6'>
												<p class='second_1_price'>100</p>
											</div>
										</div>
										<div class='form-group'>
											<label for='second_1_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
											<div class='col-xs-6'>
												<input type='text' class='form-control input__amount' id='second_1_amount' value=0>
											</div>
										</div>
									</form>

									<div class='spacer10'>
										&nbsp
									</div>
								</div>

								<div class='col-sm-4'>
									<h4 class='about__network__header__block second_2_name'>второе 2</h4>

									<form autocomplete=off>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
											<div class='col-xs-6'>
												<p>текст описания</p>
											</div>
										</div>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
											<div class='col-xs-6'>
												<p class='second_2_price'>100</p>
											</div>
										</div>
										<div class='form-group'>
											<label for='second_2_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
											<div class='col-xs-6'>
												<input type='text' class='form-control input__amount' id='second_2_amount' value=0>
											</div>
										</div>
									</form>

									<div class='spacer10'>
										&nbsp
									</div>
								</div>

								<div class='col-sm-4'>
									<h4 class='about__network__header__block second_3_name'>второе 3</h4>

									<form autocomplete=off>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
											<div class='col-xs-6'>
												<p>текст описания</p>
											</div>
										</div>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
											<div class='col-xs-6'>
												<p class='second_3_price'>300</p>
											</div>
										</div>
										<div class='form-group'>
											<label for='second_3_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
											<div class='col-xs-6'>
												<input type='text' class='form-control input__amount' id='second_3_amount' value=0>
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
						<div class='spacer'>
							<div class='row'>
								<div class='col-sm-4'>
									<h4 class='about__network__header__block desert_1_name'>десерт 1</h4>

									<form autocomplete=off>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
											<div class='col-xs-6'>
												<p>текст описания</p>
											</div>
										</div>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
											<div class='col-xs-6'>
												<p class='desert_1_price'>100</p>
											</div>
										</div>
										<div class='form-group'>
											<label for='desert_1_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
											<div class='col-xs-6'>
												<input type='text' class='form-control input__amount' id='desert_1_amount' value=0>
											</div>
										</div>
									</form>

									<div class='spacer10'>
										&nbsp
									</div>
								</div>

								<div class='col-sm-4'>
									<h4 class='about__network__header__block desert_2_name'>десерт 2</h4>

									<form autocomplete=off>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
											<div class='col-xs-6'>
												<p>текст описания</p>
											</div>
										</div>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
											<div class='col-xs-6'>
												<p class='desert_2_price'>100</p>
											</div>
										</div>
										<div class='form-group'>
											<label for='desert_2_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
											<div class='col-xs-6'>
												<input type='text' class='form-control input__amount' id='desert_2_amount' value=0>
											</div>
										</div>
									</form>

									<div class='spacer10'>
										&nbsp
									</div>
								</div>

								<div class='col-sm-4'>
									<h4 class='about__network__header__block desert_3_name'>десерт 3</h4>

									<form autocomplete=off>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
											<div class='col-xs-6'>
												<p>текст описания</p>
											</div>
										</div>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
											<div class='col-xs-6'>
												<p class='desert_3_price'>300</p>
											</div>
										</div>
										<div class='form-group'>
											<label for='desert_3_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
											<div class='col-xs-6'>
												<input type='text' class='form-control input__amount' id='desert_3_amount' value=0>
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
						<div class='spacer'>
							<div class='row'>
								<div class='col-sm-4'>
									<h4 class='about__network__header__block drink_1_name'>напиток 1</h4>

									<form autocomplete=off>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
											<div class='col-xs-6'>
												<p>текст описания</p>
											</div>
										</div>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
											<div class='col-xs-6'>
												<p class='drink_1_price'>100</p>
											</div>
										</div>
										<div class='form-group'>
											<label for='drink_1_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
											<div class='col-xs-6'>
												<input type='text' class='form-control input__amount' id='drink_1_amount' value=0>
											</div>
										</div>
									</form>

									<div class='spacer10'>
										&nbsp
									</div>
								</div>

								<div class='col-sm-4'>
									<h4 class='about__network__header__block drink_2_name'>напиток 2</h4>

									<form autocomplete=off>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
											<div class='col-xs-6'>
												<p>текст описания</p>
											</div>
										</div>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
											<div class='col-xs-6'>
												<p class='drink_2_price'>100</p>
											</div>
										</div>
										<div class='form-group'>
											<label for='drink_2_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
											<div class='col-xs-6'>
												<input type='text' class='form-control input__amount' id='drink_2_amount' value=0>
											</div>
										</div>
									</form>

									<div class='spacer10'>
										&nbsp
									</div>
								</div>

								<div class='col-sm-4'>
									<h4 class='about__network__header__block drink_3_name'>напиток 3</h4>

									<form autocomplete=off>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
											<div class='col-xs-6'>
												<p>текст описания</p>
											</div>
										</div>
										<div class='form-group'>
											<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
											<div class='col-xs-6'>
												<p class='drink_3_price'>300</p>
											</div>
										</div>
										<div class='form-group'>
											<label for='drink_3_amount' class='control-label col-xs-6 label__padding-top_6'>{{ trans('user/event.amount') }}</label>
											<div class='col-xs-6'>
												<input type='text' class='form-control input__amount' id='drink_3_amount' value=0>
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
		</div>
	</div>

	<script>
		var temp = 0;
		var final_price = 0;
		var bill = [];

		function insert_to_bill_table(item)
		{
			var glyph = $('<span>')
				.addClass('glyphicon')
				.addClass('glyphicon-remove')
				.attr('aria-hidden', 'true');
			var del_link = $('<a>')
				.attr('href', '#')
				.append(glyph)
				// .text('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>')
				.click(function(e){
					e.preventDefault();
					$('#' + item['id'] + '_row').remove();
					$('#' + item['id'] + '_amount').val(0);
					update_final_price();
				});
			var del = $('<td>')
				.append(del_link);
			var name = $('<td>')
				.addClass('name')
				.text(item['name']);
			var amount = $('<td>')
				.addClass('amount')
				.text(item['amount']);
			var multiply = $('<td>')
				.text('*');
			var price = $('<td>')
				.addClass('price')
				.text(item['price']);
			var equals = $('<td>')
				.text('=');
			var cost = $('<td>')
				.addClass('cost')
				.text(item['amount'] * item['price']);
			var tr = $('#' + item['id'] + '_row');
			// console.log(tr['length']);
			if ( tr['length'] != 0 ) {
				tr.remove();
			}
			$('<tr>')
				.addClass('item__row')
				.attr('id', item['id'] + '_row')
				.append(del, name, amount, multiply, price, equals, cost)
				.appendTo($('.bill'));
		}

		function count_final_price()
		{
			var sum = 0;
			$('.bill').find('tr.item__row').each(function(){
				sum += parseInt( $(this).find('.cost').text() );
			});
			return sum;
		}

		function update_final_price()
		{
			final_price = count_final_price();
			$('.final__price').text(final_price);
		}

		$(function(){
			$('form').submit(function(e) {
				e.preventDefault()
			});

			$("input[type=text]").focus(function() {
				$(this).select();
			});

			$("input[type=text]").keypress(function (e) {
				var key = e.which;
				if(key == 13)  // the enter key code
				{
					$(this).blur();
				}
			});

			$('.input__amount').focus(function(){
				var id = $(this).attr('id');
				id = id.replace(/_amount/,'');
				// console.log(id);
				// console.log('focus fired');
				temp = parseInt($(this).val());
				if ( isNaN(temp) ) {
					temp = 0;
				}
				// console.log(temp);
				// console.log(final_price);
			});

			$('.input__amount').blur(function(){
				var id = $(this).attr('id');
				id = id.replace(/_amount/,'');
				// console.log(id);
				// console.log('blur fired');
				temp = parseInt($(this).val());
				if ( isNaN(temp) ) {
					temp = 0;
				}
				if ( temp == 0 ) {
					if ( bill[id] ) {
						delete bill[id]
						$('#' + id + '_row').remove();
					}
				} else {
					bill[id] = {
						'id': id,
						'name': $('.' + id + '_name').text(),
						'amount': temp,
						'price': parseInt($('.' + id + '_price').text())
					};
					insert_to_bill_table(bill[id]);
				}
				// console.log(temp);
				// console.log(final_price);
				// console.log(final_price);
				update_final_price();
			});
		});
	</script>
@endsection