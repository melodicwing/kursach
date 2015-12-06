@extends('admin/template')

@section('content')
	<div class='row'>
		<div class='col-xs-12 col-sm-6 col-sm-offset-3'>
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <strong>Whoops!</strong> There were some problems with your input.<br><br>
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
			<div>
				&nbsp
			</div>
			<form method='POST' action='/admin/register'>
				{{ csrf_field() }}
				<div class="form-group">
					<label for="password">Пароль</label>
					<input type="password" class="form-control" id="password" placeholder="password" name='password'>
				</div>
				<div class="form-group">
					<input type="submit" class="form-control btn btn-primary" id="submit" value='Дай шанс'>
				</div>
			</form>
		</div>
	</div>
@endsection