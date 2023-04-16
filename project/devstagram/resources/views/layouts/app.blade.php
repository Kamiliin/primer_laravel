<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>devstagram - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>   

    </head>

    <body class="bg-gray-50">
        <header class="p-5 border-b bg-white shadow">

            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    devstagram
                </h1>

                <nav>
                    <a href="#">login</a>
                    <a href="#">crear cuenta</a>
                </nav>
            </div>
            
        </header>
    </body>
</html>