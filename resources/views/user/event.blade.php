@extends('user/template')

@section('title', trans('user/template.event'))

@section('content')
	<div class='row'>

		<div class='col-xs-12 col-sm-3'>
			<form class='form-horizontal'>
				<div class='form-group'>
					<label for='contact' class='control-label col-xs-12 label__contact'>{{ trans('user/event.contact') }}</label>
					<div class='col-xs-12'>
						<textarea id='contact' name='contact' class='form-control'></textarea>
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
						<input type='submit' id='submit_bill' class='form-control my__form' value='{{ trans('user/event.submit') }}'>
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
							@if($first->count())
								<div class='row'>
								@foreach($first as $item)
									<div class='col-sm-4'>
										<h4 class='about__network__header__block text-center first_{{ $item->id }}_name'>{{ $item->name }}</h4>

										<form autocomplete=off class='form-horizontal'>
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

										<form autocomplete=off class='form-horizontal'>
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

											<form autocomplete=off class='form-horizontal'>
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

										<form autocomplete=off class='form-horizontal'>
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

	{{ csrf_field() }}
	<script>
		var temp = 0;
		var final_price = 0;
		var bill = [];
		var final_bill = [];

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
				var found = $.grep(bill, function(e){ return e.id == id })[0];
				if ( temp == 0 ) {
					if ( found ) {
						var index = bill.indexOf(found);
						//delete bill[index];
						bill.splice(index,1);
						$('#' + id + '_row').remove();
					}
				} else {
					var item = {
						'id': id,
						'name': $('.' + id + '_name').text(),
						'amount': temp,
						'price': parseInt($('.' + id + '_price').text())
					}
					if (found) {
						var index = bill.indexOf(found);
						bill[index] = item;
					} else {
						bill.push(item);
					}
					insert_to_bill_table(item);
				}
				// console.log(temp);
				// console.log(final_price);
				// console.log(final_price);
				update_final_price();
			});
		});

		$('#submit_bill').click(function(){
			final_bill = [];
			for ( i = 0; i < bill.length; i++ ) {
				final_bill[i] = {
					'id': bill[i]['id'],
					'name': $('.' + bill[i]['id'] + '_name').text(),
					'amount': bill[i]['amount'],
					'price': parseInt($('.' + bill[i]['id'] + '_price').text())
				};
				final_bill[i]['total'] = final_bill[i]['amount'] * final_bill[i]['price'];
			}

			$.ajax({
				type: 'post',
				cache: false,
				headers: { 'X-CSRF-TOKEN' : $('input[name="_token"').val() },
				url: '/ajax/event',
				data: {
					contact: $('#contact').val(),
					bill: final_bill,
					total: $('.final__price').text()
				},
				success: function(data) {
					alert(data);
				}
			});
		});
	</script>
@endsection