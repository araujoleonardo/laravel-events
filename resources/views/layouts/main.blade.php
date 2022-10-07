<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">

    </head>
    <body>
        @yield('content')
        <footer>
            <p>LA events &copy; 2022</p>
        </footer>
        <script src="{{ url('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>