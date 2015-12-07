@extends('admin/template')

@section('title', 'а:Мероприятиe №' + $event->id)

@section('content')
	<div class='row'>
		<div class='col-xs-12 col-sm-4 col-sm-offset-4 {{ $event->deleted_at ? 'event__done' : '' }}'>
			<div class='form-group'>
				<label for='contact' class='control-label col-xs-12 label__contact'>Заказ №{{ $event->id }}:</label>
				@unless($event->deleted_at)
					<p style='padding-left: 15px'><a href='?check={{ $event->id }}'>Отметить выполненным</a></p>
				@endunless
			</div>

			<div class='form-group'>
				<label for='contact' class='control-label col-xs-12 label__contact'>{{ trans('user/event.contact') }}</label>
				<div class='col-xs-12'>
					{{ $event->contact }}
				</div>
			</div>

			<div class='form-group'>
				<label class='control-label col-xs-12 label__contact'>{{ trans('user/event.bill') }}</label>
			</div>
			@if ( sizeof($event->bill) > 0 )
				<table class='table table-condensed bill'>
					<tr>
						<th>{{ trans('user/event.bill_name') }}</th>
						<th>{{ trans('user/event.bill_amount') }}</th>
						<th>&nbsp</th>
						<th>{{ trans('user/event.bill_price') }}</th>
						<th>&nbsp</th>
						<th>{{ trans('user/event.bill_cost') }}</th>
					</tr>
				@foreach($event->bill as $dish)
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
							<p class='final__price'>{{ $event->total }}</p>
						</td>
					</tr>
				</table>
			@endif
		</div>
	</div>
@endsection