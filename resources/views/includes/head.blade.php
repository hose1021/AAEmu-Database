<title>@yield('title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/png" href="{{ asset('/img/favicon.ico') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/logo-nav.css') }}">
<link rel="stylesheet" type="text/css" href="@if (session('isDark')) {{ asset('/css/dark.css') }}?<?php echo time(); ?> @else {{ asset('/css/app.css') }}?<?php echo time(); ?> @endif">
