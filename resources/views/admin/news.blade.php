@extends('admin.template')

@section('title', 'а:Новости')

@section('content')
	<div class='row'>
		<div class='col-xs-12 col-sm-6 col-sm-offset-3'>
			
			<h4 id='type_header'>Добавление записи</h4>
			
			<form method='POST' action='/admin/news' onsubmit="parseMessage();">
				{{ csrf_field() }}
				<input hidden type='text' id='type_input' value='insert' name='type'>
				<input hidden type='text' id='record_id' value='' name='id'>

				<div class="form-group">
					<label for="title">Заголовок:</label>
					<input type="text" class="form-control" id="title" name='title'>
				</div>

				<div class="form-group">
					<label for="message">Текст новости:</label>
					<textarea class="form-control" id="message" name='message' data-provide='markdown'></textarea>
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
		<div class='col-xs-12 col-sm-6 col-sm-offset-3'>
			<table class='table'>
				<tr>
					<th></th>
					<th></th>
					<th>Заголовок</th>
					<th>Текст новости</th>
					<th>Дата</th>
				</tr>
				@foreach($news as $item)
					<tr data-id={{ $item->id }}>
						<td><a href='/admin/news?remove={{ $item->id }}' data-toggle='tooltip' title='Удалить'><span class='glyphicon glyphicon-remove'></span></a></td>
						<td><a class='edit_link' data-id={{ $item->id }} data-toggle='tooltip' title='Редактировать' href='#'><span class='glyphicon glyphicon-edit'></span></a></td>
						<td data-title>{{ $item->title }}</td>
						<td data-message>{{ $item->message }}</td>
						<td>{{ $item->created_at }}</td>
					</tr>
				@endforeach
			</table>
			{!! $news->render() !!}
		</div>
	</div>

	<script>
		var current_id = 0;

		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();

			$('.edit_link').click(function(){
				if ( current_id ) {
					$('tr[data-id=' + current_id +']').removeClass('info');	
				}
				// current_id = $(this).data('id');
				var id = current_id = $(this).data('id');
				$('tr[data-id=' + id +']').addClass('info');
				$('#type_input').val('update');
				$('#record_id').val(id);
				$('#type_header').text('Редактирование записи');
				$('#title').val( $('tr[data-id=' + id + ']').find('td[data-title]').text() );
				$('#message').data('markdown').setContent(
					toMarkdown( $('tr[data-id=' + id + ']').find('td[data-message]').text() )
				);
				$('#cancel_div').removeClass('hidden');
				$('#submit_div').addClass('col-sm-6');
			});

			$('#cancel').click(function(e){
				e.preventDefault();
				if ( current_id ) {
					$('tr[data-id=' + current_id +']').removeClass('info');	
				}
				$('#type_input').val('insert');
				$('#type_header').text('Добавление записи');
				$('#title').val('');
				$('#message').data('markdown').setContent('');
				$('#cancel_div').addClass('hidden');
				$('#submit_div').removeClass('col-sm-6');
				current_id = 0;
			});
		});

		function parseMessage()
		{
			$('#message').data('markdown').setContent(
				$('#message').data('markdown').parseContent()
			);

			return true;
		}
	</script>
@endsection