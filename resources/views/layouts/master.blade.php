<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TaskList</title>

	 <!-- Roboto font embadded -->	
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<script
		  src="https://code.jquery.com/jquery-3.2.1.min.js"
		  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		  crossorigin="anonymous"></script>

	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>