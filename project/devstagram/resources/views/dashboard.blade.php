@extends('layouts.app')

@section('titulo')
¡Inicio exitoso!

@endsection


@section('contenido')

    <div class="flex justify-center"> 
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
               <img src="{{asset('img/usuario.png')}}" alt="logo">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <p class="text-gray-700 text-2xl"> {{$user->username }} </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">Seguidores</span>
                </p>
            </div>
        </div>
    </div>
 
@endsection