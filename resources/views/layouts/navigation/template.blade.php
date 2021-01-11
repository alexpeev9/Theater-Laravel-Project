<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<title>Home</title>
        @include('layouts.navigation.header')
	</head>
    <body class="antialiased">
        @include('layouts.navigation.navigation')
        <section id=main class="wrapper">
            @yield('content')
        </section>
    </body>
</html>
