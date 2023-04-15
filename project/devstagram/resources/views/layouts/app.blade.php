<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>devstagram - @yield('titulo')</title>
    </head>

    <body>
        <nav>
            <a href="/">principal</a>
            <a href="/nosotros">nosotros</a>
            <a href="/tienda">tienda</a>
         
        </nav>

        <h1>@yield('titulo')</h1>

        <hr>


        @yield('contenido')

    </body>
</html>