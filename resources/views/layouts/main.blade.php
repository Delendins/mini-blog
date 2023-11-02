<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

        <title>Mini-Blog | {{ $title }} </title>
        
        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="">
        @include('partials.navbar')
        
        <div class="container mx-auto">
            @yield('container')
        </div>
    </body>
</html>
