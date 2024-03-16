@extends('layouts.plantilla')

@section('title', 'Manual')

@section('contenido')

    <div class="flex justify-center my-10 min-h-[74vh]">
        <form class="w-full max-w-sm" action="{{route('consultarDominio.index')}}" method="POST">

            @csrf

            <div class="flex items-center border-b border-teal-500 py-2">
              <input class="appearance-none bg-transparent border-none w-full text-white mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" name="dominio" placeholder="Nombre dominio" aria-label="Nombre del dominio" value="{{-- old('dominio', $dominio->nombreDominio)--}}" >
              <button type="submit" class="flex-shrink-0  bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="button">
                Buscar
              </button>
              <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
                Cancelar
              </button>
            </div>

            @error('dominio')
                {{$message}}
            @enderror

          </form>
    </div>

@endsection
