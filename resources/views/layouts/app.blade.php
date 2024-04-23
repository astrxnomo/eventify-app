<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Inicio</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="{{asset("js/jquery-1.11.2.min.js")}}"><\/script>')</script>
	<script src="{{asset("js/bootstrap.min.js")}}"></script>
	<script src="{{asset("js/jquery.mCustomScrollbar.concat.min.js")}}"></script>
	<script src="{{asset("js/main.js")}}"></script>
</body>
</html>
