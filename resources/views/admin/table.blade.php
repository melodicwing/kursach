@extends('admin.template')

@section('title', 'а:Столики')

@section('content')
	@if($tables->count())
		<div class='row'>
		<?php $i = 0?>
		@foreach($tables as $item)
			@unless($i%4)
				<div class='clearfix'></div>
			@endunless
			<?php $i++ ?>
			<?php
				$from = strtotime($item->from);
				$to = strtotime($item->to);
				$now = strtotime('now');
				// echo $from.PHP_EOL;
				// echo $to.PHP_EOL;
				// echo $now.PHP_EOL;
				if ( $from < $now) {
					if ( $now < $to ) {
						$class = 'bg-info';
					} else {
						$class = 'event__done';
					}
				} else {
					$class = '';
				}
			?>
			<div class='col-sm-3 {{ $class }}'>
				<a href='/admin/table/{{ $item->id }}'><p>Заказ № {{ $item->id }}:</p></a>
				<p>Начало: {{ $item->from }}</p>
				<p>Конец: {{ $item->to }}</p>
				<p>Столик: {{ $item->table }}</p>
				<p>На кого столик: {{ $item->info }}</p>
				<p>Телефон: {{ $item->phone }}</p>
			</div>
		@endforeach
		</div>
	@else
		<div class='row'>
			<div class='col-sm-3 hidden-xs'>
			</div>
			<div class='col-sm-6'>
				<p>Ничего нету</p>
			</div>
		</div>
	@endif
@endsection