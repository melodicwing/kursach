@extends('admin/template')

@section('content')
	<div class='row'>
		<div class='col-xs-12 col-sm-6 col-sm-offset-3'>
			<div>
				&nbsp
			</div>
			<form method="POST" action="/admin/auth/register">
				{!! csrf_field() !!}

				<div class='form-group' id='div_register_name'>
					<label for='input_register_name'>Имя</label>
					<input type="text" class='form-control' id='input_register_name' name="name" value="{{ old('name') }}">
				</div>

				<div class='form-group'>
					<label for='input_register_email'>Email</label>
					<input type="email" class='form-control' id='input_register_email' name="email" value="{{ old('email') }}">
				</div>

				<div class='form-group'>
					<label for='input_register_password'>Пароль</label>
					<input type="password" class='form-control' id='input_register_password' name="password">
				</div>

				<div class='form-group'>
					<label for='input_register_password_confirmation'>Повторите пароль</label>
					<input type="password" class='form-control' id='input_register_password_confirmation' name="password_confirmation">
				</div>

				<div class="form-group">
					<input type="submit" class="form-control btn btn-primary" id="submit" value='Фпирёт'>
				</div>
			</form>
		</div>
	</div>
@endsection
