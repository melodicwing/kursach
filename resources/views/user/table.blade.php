@extends('user/template')

@section('title', trans('user/template.table'))

@section('content')
	<div class='row'>
		<div class='col-xs-12 col-sm-4 col-sm-push-8'>
			<form method='post' action='/ajax/table' id='form'>
				<div class='form-group'>
					<label for='input__date_from'>{{ trans('user/table.date_from') }}</label>
					<input type='date' class='form-control' id='input__date_from' name='date_from'>
				</div>

				<div class='form-group'>
					<label>{{ trans('user/table.from') }}</label>
					<div class='row'>
						<div class='col-xs-6'>
							<div class='row'>
								<label for='input__from_h' class='col-xs-6 label__padding-top_6'>{{ trans('user/table.from_h') }}</label>
								<div class='col-xs-6'>
									<select class='form-control' id='input__from_h' name='from_h'>
										<option>00</option>
										<option>01</option>
										<option>02</option>
										<option>03</option>
										<option>04</option>
										<option>05</option>
										<option>06</option>
										<option>07</option>
										<option>08</option>
										<option>09</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
										<option>13</option>
										<option>14</option>
										<option>15</option>
										<option>16</option>
										<option>17</option>
										<option>18</option>
										<option>19</option>
										<option>20</option>
										<option>21</option>
										<option>22</option>
										<option>23</option>
									</select>
								</div>
							</div>
						</div>
						<div class='col-xs-6'>
							<div class='row'>
								<label for='input__from_m' class='col-xs-6 label__padding-top_6'>{{ trans('user/table.from_m') }}</label>
								<div class='col-xs-6'>
									<select class='form-control' id='input__from_m' name='from_m'>
										<option>00</option>
										<option>05</option>
										<option>10</option>
										<option>15</option>
										<option>20</option>
										<option>25</option>
										<option>30</option>
										<option>35</option>
										<option>40</option>
										<option>45</option>
										<option>50</option>
										<option>55</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class='form-group'>
					<label for='input__date_to'>{{ trans('user/table.date_to') }}</label>
					<input type='date' class='form-control' id='input__date_to' name='date_to'>
				</div>

				<div class='form-group'>
					<label>{{ trans('user/table.to') }}</label>
					<div class='row'>
						<div class='col-xs-6'>
							<div class='row'>
								<label for='input__to_h' class='col-xs-6 label__padding-top_6'>{{ trans('user/table.to_h') }}</label>
								<div class='col-xs-6'>
									<select class='form-control' id='input__to_h' name='to_h'>
										<option>00</option>
										<option>01</option>
										<option>02</option>
										<option>03</option>
										<option>04</option>
										<option>05</option>
										<option>06</option>
										<option>07</option>
										<option>08</option>
										<option>09</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
										<option>13</option>
										<option>14</option>
										<option>15</option>
										<option>16</option>
										<option>17</option>
										<option>18</option>
										<option>19</option>
										<option>20</option>
										<option>21</option>
										<option>22</option>
										<option>23</option>
									</select>
								</div>
							</div>
						</div>
						<div class='col-xs-6'>
							<div class='row'>
								<label for='input__to_m' class='col-xs-6 label__padding-top_6'>{{ trans('user/table.to_m') }}</label>
								<div class='col-xs-6'>
									<select class='form-control' id='input__to_m' name='to_m'>
										<option>00</option>
										<option>05</option>
										<option>10</option>
										<option>15</option>
										<option>20</option>
										<option>25</option>
										<option>30</option>
										<option>35</option>
										<option>40</option>
										<option>45</option>
										<option>50</option>
										<option>55</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class='form-group'>
					<label for='input__table'>{{ trans('user/table.table') }}</label>
					<select class='form-control' id='input__table' name='table'>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
					</select>
				</div>

				<div class='form-group'>
					<label for='input__name'>{{ trans('user/table.name') }}</label>
					<input type='text' class='form-control' id='input__name' name='info'>
				</div>

				<div class='form-group'>
					<label for='input__tel'>{{ trans('user/table.tel') }}</label>
					<input type='text' class='form-control' id='input__tel' name='phone'>
				</div>

				<div class='form-group'>
					<input type='submit' class='form-control my__form' id='input__submit' value='{{ trans('user/table.submit') }}'>
				</div>
			</form>
		</div>
		<div class='col-xs-12 col-sm-8 col-sm-pull-4'>
			<img src='/assets/img/restoran.jpg'>
		</div>
	</div>

	{{ csrf_field() }}
	<script>
		$(function(){
			$('#form').submit(function(e){
				if (
					$('#input__date_from').val().length == 0
					|| $('#input__date_to').val().length == 0
					) {
					alert('заполните поля c датами');
					e.preventDefault();
					return;
				}
				dateFrom = getDate( $('#input__date_from').val() );
				dateTo = getDate( $('#input__date_to').val() );
				dateFrom.setHours( $('#input__from_h').val() );
				dateFrom.setMinutes( $('#input__from_m').val() );
				dateTo.setHours( $('#input__to_h').val() );
				dateTo.setMinutes( $('#input__to_m').val() );

				if ( dateFrom >= dateTo ) {
					alert('датавремя начала должна быть меньше датавремени конца');
					e.preventDefault();
					return;
				}

				$.ajax({
					type: 'post',
					cache: false,
					headers: { 'X-CSRF-TOKEN' : $('input[name="_token"').val() },
					url: '/ajax/table',
					data: $(this).serialize(),
					success: function(data) {
						alert(data);
					}
				});
				e.preventDefault();
			});

			$('input[type=date]').datepicker($.datepicker.regional[ "{{ \App::getLocale() }}" ]).datepicker('option', 'dateFormat', 'dd.mm.yy');
		});

		function getDate(val)
		{
			year = parseInt(val.match(/\d\d\d\d/)[0]);
			month = parseInt(val.match(/\.(\d\d)\./)[1]);
			day = parseInt(val.match(/\d\d\./)[0]);
			date = new Date(year, month-1, day);
			return date;
		}
	</script>
@endsection