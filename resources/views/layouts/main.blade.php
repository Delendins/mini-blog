<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
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
