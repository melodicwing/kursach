@extends('admin/template')

@section('content')
	<script src='/assets/tinymce/js/tinymce/tinymce.min.js'></script>

	<div class='hidden'>
		<form method='post' action='/admin/test' id='my__form'>
			{{ csrf_field() }}
			<textarea id='to_send' name='content'></textarea>
		</form>
	</div>

	<textarea id='editor' name='editor'></textarea>

	<p></p>

	<button id='save__btn' class='btn btn-primary' style='width: 100%;'>Сохранить</button>

	<script>
		tinymce.init({
		  selector: '#editor',
		  height: 400,
		  plugins: [
		    'advlist autolink lists link image charmap print preview anchor',
		    'searchreplace visualblocks code fullscreen',
		    'insertdatetime media table contextmenu paste code'
		  ],
		  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		  content_css: [
		    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
		    '//www.tinymce.com/css/codepen.min.css'
		  ]
		});

		$('#save__btn').click(function(){
			$('#to_send').text(tinymce.get('editor').getContent());
			$('#my__form').submit();
		});
	</script>
@endsection