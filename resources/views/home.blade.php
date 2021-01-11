<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<title>Home</title>
        @include('layouts.navigation.header')
	</head>
    <body class="antialiased">
        @include('layouts.navigation.navigation')
        <h3>Hello</h3>
        <a class="btn btn-primary" href="{{ url('search') }}" > Search Performance</a>
        <a class="btn btn-primary" href="{{ url('performances') }}" > Performances</a>
        <a class="btn btn-primary" href="{{ url('tickets')}}" > Tickets</a>
        <a class="btn btn-primary" href="{{ url('locations') }}" > Locations</a>
    </body>
</html>
