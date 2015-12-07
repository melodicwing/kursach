@extends('admin.template')

@section('title', 'а:Меню')

@section('content')
	<div class='row'>
		<div class='col-xs-12 col-sm-6 col-sm-offset-3'>
			
			<h4 id='type_header'>Добавление записи</h4>
			
			<form method='POST' action='/admin/menu' onsubmit="parseMessage();">
				{{ csrf_field() }}
				<input hidden type='text' id='type_input' value='insert' name='type'>
				<input hidden type='text' id='record_id' value='' name='id'>

				<div class="form-group">
					<label for="category">Вид блюда:</label>
					<select class='form-control' id='category' name='category'>
						<option value='first'>Первое</option>
						<option value='second'>Второе</option>
						<option value='desert'>Десерт</option>
						<option value='drink'>Напиток</option>
					</select>
				</div>

				<div class="form-group">
					<label for="name">Название:</label>
					<input type="text" class="form-control" id="name" name='name'>
				</div>

				<div class="form-group">
					<label for="description">Описание:</label>
					<textarea class="form-control" id="description" name='description' data-provide='markdown'></textarea>
				</div>

				<div class="form-group">
					<label for="price">Цена:</label>
					<input type="text" class="form-control" id="price" name='price'>
				</div>

				<div class="form-group">
					<div class='row'>
						<div id='cancel_div' class='col-xs-12 col-sm-6 hidden'>
							<p>
								<button class="btn btn-block btn-warning" id="cancel">Отменить редактирование</button>
							</p>
						</div>
						<div id='submit_div' class='col-xs-12'>
							<p>
								<input type="submit" class="form-control btn btn-block btn-primary" id="submit" value='Поехали'>
							</p>
						</div>
					</div>
				</div>
			</form>

		</div>
	</div>
	
	<hr>
	
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
										<h4 class='about__network__header__block text-center first_{{ $item->id }}_name'>
											<span data-name data-id={{ $item->id }}>{{ $item->name }}</span>
											<a class='edit_link' data-id={{ $item->id }} data-toggle='tooltip' title='Редактировать' href='#'>
												<span class='glyphicon glyphicon-edit'></span>
											</a>
											<a href='/admin/menu?remove={{ $item->id }}' data-toggle='tooltip' title='Удалить'>
												<span class='glyphicon glyphicon-remove'></span>
											</a>
										</h4>

										<form class='form-horizontal' autocomplete=off>
											<input hidden type='text' value='{{ $item->category }}' data-category data-id={{ $item->id }}>
											<div class='form-group'>
												<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
												<div class='col-xs-6' data-description data-id={{ $item->id }}>
													{!! $item->description !!}
												</div>
											</div>
											<div class='form-group'>
												<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
												<div class='col-xs-6'>
													<p class='first_{{ $item->id }}_price' data-price data-id={{ $item->id }}>{{ $item->price }}</p>
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
										<h4 class='about__network__header__block text-center second_{{ $item->id }}_name'>
											<span data-name data-id={{ $item->id }}>{{ $item->name }}</span>
											<a class='edit_link' data-id={{ $item->id }} data-toggle='tooltip' title='Редактировать' href='#'>
												<span class='glyphicon glyphicon-edit'></span>
											</a>
											<a href='/admin/menu?remove={{ $item->id }}' data-toggle='tooltip' title='Удалить'>
												<span class='glyphicon glyphicon-remove'></span>
											</a>
										</h4>

										<form class='form-horizontal' autocomplete=off>
											<input hidden type='text' value='{{ $item->category }}' data-category data-id={{ $item->id }}>
											<div class='form-group'>
												<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
												<div class='col-xs-6' data-description data-id={{ $item->id }}>
													{!! $item->description !!}
												</div>
											</div>
											<div class='form-group'>
												<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
												<div class='col-xs-6'>
													<p class='second_{{ $item->id }}_price' data-price data-id={{ $item->id }}>{{ $item->price }}</p>
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
											<h4 class='about__network__header__block text-center desert_{{ $item->id }}_name'>
											<span data-name data-id={{ $item->id }}>{{ $item->name }}</span>
											<a class='edit_link' data-id={{ $item->id }} data-toggle='tooltip' title='Редактировать' href='#'>
												<span class='glyphicon glyphicon-edit'></span>
											</a>
											<a href='/admin/menu?remove={{ $item->id }}' data-toggle='tooltip' title='Удалить'>
												<span class='glyphicon glyphicon-remove'></span>
											</a>
											</h4>

											<form class='form-horizontal' autocomplete=off>
												<input hidden type='text' value='{{ $item->category }}' data-category data-id={{ $item->id }}>
												<div class='form-group'>
													<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
													<div class='col-xs-6' data-description data-id={{ $item->id }}>
														{!! $item->description !!}
													</div>
												</div>
												<div class='form-group'>
													<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
													<div class='col-xs-6'>
														<p class='desert_{{ $item->id }}_price' data-price data-id={{ $item->id }}>{{ $item->price }}</p>
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
										<h4 class='about__network__header__block text-center drink_{{ $item->id }}_name'>
											<span data-name data-id={{ $item->id }}>{{ $item->name }}</span>
											<a class='edit_link' data-id={{ $item->id }} data-toggle='tooltip' title='Редактировать' href='#'>
												<span class='glyphicon glyphicon-edit'></span>
											</a>
											<a href='/admin/menu?remove={{ $item->id }}' data-toggle='tooltip' title='Удалить'>
												<span class='glyphicon glyphicon-remove'></span>
											</a>
										</h4>

										<form class='form-horizontal' autocomplete=off>
											<input hidden type='text' value='{{ $item->category }}' data-category data-id={{ $item->id }}>
											<div class='form-group'>
												<label class='control-label col-xs-6'>{{ trans('user/event.description') }}</label>
												<div class='col-xs-6' data-description data-id={{ $item->id }}>
													{!! $item->description !!}
												</div>
											</div>
											<div class='form-group'>
												<label class='control-label col-xs-6'>{{ trans('user/event.price') }}</label>
												<div class='col-xs-6'>
													<p class='drink_{{ $item->id }}_price' data-price data-id={{ $item->id }}>{{ $item->price }}</p>
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

	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();

			$('.edit_link').click(function(){
				var id = $(this).data('id');
				$('#type_input').val('update');
				$('#record_id').val(id);
				$('#type_header').text('Редактирование записи');
				$('#category').val( $('[data-category][data-id=' + id + ']').val() );
				$('#name').val( $('[data-name][data-id=' + id + ']').text() );
				$('#description').data('markdown').setContent(
					toMarkdown($('[data-description][data-id=' + id + ']').html())
				);
				$('#price').val( $('[data-price][data-id=' + id + ']').text() );
				$('#cancel_div').removeClass('hidden');
				$('#submit_div').addClass('col-sm-6');
			});

			$('#cancel').click(function(e){
				e.preventDefault();
				$('#type_input').val('insert');
				$('#type_header').text('Добавление записи');
				$('#name').val('');
				$('#description').data('markdown').setContent('');
				$('#price').val('');
				$('#cancel_div').addClass('hidden');
				$('#submit_div').removeClass('col-sm-6');
			});
		});

		function parseMessage()
		{
			$('#description').data('markdown').setContent(
				$('#description').data('markdown').parseContent()
			);

			return true;
		}
	</script>
@endsection