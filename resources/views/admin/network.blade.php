@extends('admin.template')

@section('title', 'а:Рестораны')

@section('content')
	<div class='row'>
		<div class='col-xs-12 col-sm-6 col-sm-offset-3'>
			
			<h4 id='type_header'>Добавление записи</h4>
			
			<form method='POST' action='/admin/network' onsubmit="parseMessage();" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input hidden type='text' id='type_input' value='insert' name='type'>
				<input hidden type='text' id='record_id' value='' name='id'>

				<div class="form-group">
					<label for="name">Название:</label>
					<input type="text" class="form-control" id="name" name='name'>
				</div>

				<div class='form-group'>
					<label for="img">Пикча:</label>
					<div class='row'>
						<div id='file_div' class='col-xs-12'>
							<p>
								<input type="file" title="Выберите файл" class="btn-primary" name='img'>
							</p>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="description">Описание:</label>
					<textarea class="form-control" id="description" name='description' data-provide='markdown'></textarea>
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
	
	<div class='row'>
	@foreach($rests as $item)
		<div class='col-sm-4'>
			<h4>
				<span data-name data-id={{ $item->id }}>{{ $item->name }}</span>
				<a class='edit_link' data-id={{ $item->id }} data-toggle='tooltip' title='Редактировать' href='#'>
					<span class='glyphicon glyphicon-edit'></span>
				</a>
				<a href='/admin/network?remove={{ $item->id }}' data-toggle='tooltip' title='Удалить'>
					<span class='glyphicon glyphicon-remove'></span>
				</a>
			</h4>

			<div data-description data-id={{ $item->id }}>{{--
				--}}{!! $item->description !!}{{--
			--}}</div>
			
			<img src='{{ $item->img_path }}'>

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
			{!! $rests->render() !!}
		</div>
	</div>

	<script>
		$(document).ready(function(){
			$('input[type=file]').bootstrapFileInput();

			$('[data-toggle="tooltip"]').tooltip();

			$('.edit_link').click(function(){
				var id = current_id = $(this).data('id');
				$('#type_input').val('update');
				$('#record_id').val(id);
				$('#type_header').text('Редактирование записи');
				$('#name').val( $('[data-name][data-id=' + id + ']').text() );
				$('#description').data('markdown').setContent(
					toMarkdown($('[data-description][data-id=' + id + ']').html())
				);
				$('#cancel_div').removeClass('hidden');
				$('#submit_div').addClass('col-sm-6');
			});

			$('#cancel').click(function(e){
				e.preventDefault();
				$('#type_input').val('insert');
				$('#type_header').text('Добавление записи');
				$('#name').val('');
				$('#description').data('markdown').setContent('');
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