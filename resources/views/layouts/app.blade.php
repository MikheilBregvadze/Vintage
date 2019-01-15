<!DOCTYPE html>
<html lang="en">
<head><!-- ddd -->
	<meta charset="UTF-8">
	<meta http-equiv="no-cache">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
		<div id="app">
			
			@include('inc.navbar')

				@yield('content')

			@include('inc.footer')

		</div>

 {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> --}}
 <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
 <script src="{{ asset('js/app.js') }}" defer></script>
{{-- <script>
    CKEDITOR.replace( 'article-ckeditor' );
</script> --}}
</body>
</html>