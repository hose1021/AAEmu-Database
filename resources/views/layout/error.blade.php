<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title>
	<link rel="icon" type="image/png" href="{{ asset('/img/favicon.ico') }}" />
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/error.css') }}?<?php echo time(); ?>">
</head>
<body>
	@yield('content')
</body>
</html>
