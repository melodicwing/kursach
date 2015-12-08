@extends('admin/template')

@section('title', 'а:Отзывы')

@section('content')
	@if($comments->count())
		<div class='row'>
			<?php $i = 0 ?>
			@foreach($comments as $item)
				@unless($i%3)
					<div class='clearfix'></div>
				@endunless
				<?php $i++ ?>
				<div class='col-sm-4 {{ $item->approved ? '' : 'event__done' }}'>
					<h4 class='about__network__header__block'>{{ $item->name }}, {{ date('d.m.Y', strtotime($item->created_at)) }}</h4>
					<?php
						switch($item->approved) {
							case true:
								echo "<a href='?disapprove=$item->id'>Дизлойс</a>";
								break;
							case false:
								echo "<a href='?approve=$item->id'>Лойс</a>";
								break;
						}
					?>
					<div class='guestbook__frame'>
						{!! $item->message !!}
					</div>

					<div class='hidden-xs spacer10'>
						&nbsp
					</div>
				</div>
				<div class='visible-xs-block spacer10'>
					&nbsp
				</div>
			@endforeach
		</div>
		<div class='row'>
			<div class='col-xs-12 text-center'>
				{!! $comments->render() !!}
			</div>
		</div>
	@else
		<div class='row'>
			<div class='col-xs-12 text-center'>
				<p>{{ trans('user/about/guestbook.no_items') }}</p>
			</div>
		</div>
	@endif
@endsection