<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Theater Project</title>
        <link rel="icon" href="{{ ('images/cloud.png') }}" type="image/gif" sizes="16x16">
        @include('layouts.navigation.header')
	</head>
    <body class="antialiased">
        @include('layouts.navigation.navigation')
        <section id=main class="wrapper">
            @yield('content')
        </section>
    </body>
</html>
