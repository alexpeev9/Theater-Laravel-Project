<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href=" {{ asset('assets/css/skel-noscript.css') }}" />
        <link rel="stylesheet" href=" {{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" href=" {{ asset('assets/css/style-desktop.css') }}" />
	</head>
    <body class="antialiased">
        @include('layouts.navigation.navigation')
        <section id=main class="wrapper">
            @yield('content')
        </section>
    </body>
</html>
