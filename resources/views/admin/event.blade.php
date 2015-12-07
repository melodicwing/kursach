@extends('admin/template')

@section('title', 'а:Мероприятия')

@section('content')
	@if($events->count())
		<div class='row'>
			<?php $i = 0 ?>
			@foreach($events as $item)
				@unless($i%4)
					<div class='clearfix'></div>
				@endunless
				<?php $i++ ?>
				<div class='col-xs-12 col-sm-3 {{ $item->deleted_at ? 'event__done' : '' }}'>
						<div class='form-group'>
							<a href='/admin/event/{{ $item->id }}' style='padding-left: 15px'>
								Заказ №{{ $item->id }}:
							</a>
							@unless($item->deleted_at)
								<p style='padding-left: 15px; padding-top: 10px'><a href='?check={{ $item->id }}'>Отметить выполненным</a></p>
							@endunless
						</div>

						<div class='form-group'>
							<label for='contact' class='control-label col-xs-12 label__contact'>{{ trans('user/event.contact') }}</label>
							<div class='col-xs-12'>
								{{ $item->contact }}
							</div>
						</div>

						<div class='form-group'>
							<label class='control-label col-xs-12 label__contact'>{{ trans('user/event.bill') }}</label>
						</div>
						@if ( sizeof($item->bill) > 0 )
							<table class='table table-condensed bill'>
								<tr>
									<th>{{ trans('user/event.bill_name') }}</th>
									<th>{{ trans('user/event.bill_amount') }}</th>
									<th>&nbsp</th>
									<th>{{ trans('user/event.bill_price') }}</th>
									<th>&nbsp</th>
									<th>{{ trans('user/event.bill_cost') }}</th>
								</tr>
							@foreach($item->bill as $dish)
								<tr>
									<td>{{ $dish['name'] }}</td>
									<td>{{ $dish['amount'] }}</td>
									<td>*</td>
									<td>{{ $dish['price'] }}</td>
									<td>=</td>
									<td>{{ $dish['total'] }}</td>
								</tr>
							@endforeach
							</table>

							<table class='table'>
								<tr>
									<td class='final__price__label'>
										<label class='label__final__price'>{{ trans('user/event.final_price') }}</label>
									</td>
									<td class='final__price__value'>
										<p class='final__price'>{{ $item->total }}</p>
									</td>
								</tr>
							</table>
						@endif
				</div>
			@endforeach
		</div>
		<div class='row'>
			<div class='col-xs-12 text-center'>
				{!! $events->render() !!}
			</div>
		</div>
	@else
		<div class='row'>
			<div class='col-xs-12 text-center'>
				<p>нет элементов</p>
			</div>
		</div>
	@endif
@endsection