@extends('admin.template')

@section('title', 'а:Новости')

@section('content')
	<div class='row'>
		<div class='col-xs-12 col-sm-6 col-sm-offset-3'>
			<form method='POST' action='/admin/news'>
				{{ csrf_field() }}
				<div class="form-group">
					<label for="title">Заголовок:</label>
					<input type="text" class="form-control" id="title" name='title'>
				</div>
				<div class="form-group">
					<label for="message">Текст новости:</label>
					<textarea class="form-control" id="message"name='message'></textarea>
				</div>
				<div class="form-group">
					<input type="submit" class="form-control btn btn-primary" id="submit" value='Поехали'>
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
					<tr>
						<td><a href='/admin/news?remove={{ $item->id }}'><span class='glyphicon glyphicon-remove'></span></a></td>
						<td><a href='#'><span class='glyphicon glyphicon-edit'></span></a></td>
						<td>{{ $item->title }}</td>
						<td>{{ $item->message }}</td>
						<td>{{ $item->created_at }}</td>
					</tr>
				@endforeach
			</table>
			{!! $news->render() !!}
		</div>
	</div>
@endsection