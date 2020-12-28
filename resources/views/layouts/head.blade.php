<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"/>
	<link rel="stylesheet" href="{{ asset('storage/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('storage/css/header.css') }}">
	<script src="{{ asset('storage/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('storage/js/bootstrap.bundle.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
	@yield('header')
	<title>Programadores - @yield('title')</title>
</head>