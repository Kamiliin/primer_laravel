<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite('resources/css/app.css')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>KamIvan - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>   
        <link rel="icon" type="png" href="img/futbol.png">

    </head>

    <body class="bg-gray-50">
        <header class="p-5 border-b bg-white shadow">

            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-extrabold">
                    ¡Todo Sobre Futbol!
                </h1>

                @auth
                    <nav class="flex gap-6">
                        <a class="font-bold text-gray-600 text-sm" href="#">
                            Hola: 
                            <span class="font-normal">
                                {{auth()->user()->username}}
                            </span>
                        </a>

                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-gray-600 text-sm">
                                Cerrar Sesión
                            </button>
                    </nav>
                @endauth

                @guest
                    <nav class="flex gap-2">
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('login')}}">login</a>
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('register')}}">crear cuenta</a>
                    </nav>
                @endguest

            </div>
            
        </header>


        <main class="container mx-auto mt-10"> 

            <h2 class="font-black text-center text-3xl mb-10" >
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            <p>Primer desarrollo en php con laravel de kamilo Robledo {{now()->year}}</p>
        </footer>
    </body>
</html>