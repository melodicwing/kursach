@extends('admin.template')

@section('title', 'а:Столик')

@section('content')
		<div class='row'>
			<?php
				$from = strtotime($table->from);
				$to = strtotime($table->to);
				$now = strtotime('now');
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
			<div class='col-sm-4 col-sm-offset-4 {{ $class }}'>
				<p>Заказ № {{ $table->id }}:</p>
				<p>Начало: {{ $table->from }}</p>
				<p>Конец: {{ $table->to }}</p>
				<p>Столик: {{ $table->table }}</p>
				<p>На кого столик: {{ $table->info }}</p>
				<p>Телефон: {{ $table->phone }}</p>
			</div>
		</div>
@endsection