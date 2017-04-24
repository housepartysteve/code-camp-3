<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <!-- Head -->
        @include('includes.head')
    </head>
    <body>
    <div id="app">


            <!-- Navigation Bar -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                @include('includes.nav')
            </nav>

            <!-- Index content -->
            <div id="main" class="row" style="background-color: #AFD275;">
                @yield('content')
            </div>

            <!-- Footer -->
            <div id="footer" class="row" style="background-color: #D1E8E2;">
                @include('includes.footer')
            </div>


    </div>
    </body>
</html>
