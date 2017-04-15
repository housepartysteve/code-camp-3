<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <!-- Head -->
        @include('includes.head')
    </head>
    <body>
    <div class="container">

        <!-- Navigation Bar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            @include('includes.nav')
        </nav>

        <!-- Index content -->
        <div id="main" class="row">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="row">
            @include('includes.footer')
        </footer>

    </div>
    </body>
</html>
