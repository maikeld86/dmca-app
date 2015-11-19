<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title>DMCA-App</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="/css/all.css">




    </head>
    <body>
        @include('partials.nav')
        <div class="container">


            @yield('content')
        </div>



        <script src="/js/all.js"></script>
        @yield('footer')
    </body>
</html>