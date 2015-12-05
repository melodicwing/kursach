@extends('user/template')

@section('title', trans('user/template.map') )

@section('content')
	<div class='row'>
		<div class='col-xs-12' style='text-align: center'>
			<div class='google-maps'>
				<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d16072.087607912756!2d33.49324658080187!3d44.593537362868915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m5!1s0x40952496e7ec67c5%3A0x5154d8b171bdd443!2sVokzalnaya+ulitsa%2C+Sevastopol&#39;!3m2!1d44.594329599999995!2d33.531745799999996!4m3!3m2!1d44.588426399999996!2d33.4790874!5e0!3m2!1sen!2s!4v1449342962302" width="100" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
@endsection