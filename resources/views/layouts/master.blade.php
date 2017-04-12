<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="online interactive environment">
        <meta name="author" content="Stephen McCarrick">
        <link rel="icon" href="#">

        <title>{{ config('app.name', 'Code Camp') }}</title>

        <!-- Bootstrap core CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/app.css') }}"  rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        </script>
    </head>
    <body>
            <!-- Navigation Bar -->
            @include('layouts.nav')

            <!-- Index content -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.footer')

        <!-- Latest compiled and minified JS -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
