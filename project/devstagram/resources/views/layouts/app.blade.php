<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite('resources/css/app.css')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>devstagram - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>   

    </head>

    <body class="bg-gray-50">
        <header class="p-5 border-b bg-white shadow">

            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-extrabold">
                    futbol
                </h1>

                <nav class="flex gap-2">
                    <a class="font-bold uppercase text-gray-600 text-sm" href="#">login</a>
                    <a class="font-bold uppercase text-gray-600 text-sm" href="/crear-cuenta">crear cuenta</a>
                </nav>
            </div>
            
        </header>


        <main class="container mx-auto mt-10"> 

            <h2 class="font-black text-center text-3xl mb-10" >
                @yield('titulo')
            </h2>

            @yield('contenido')

        </main>

        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            <p>Primer desarrollo en pho con laravel de kamilo Robledo {{now()->year}}</p>
        </footer>
    </body>
</html>