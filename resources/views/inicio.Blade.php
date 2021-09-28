@extends('layout.plantilla')
@section('tituloPagina' , 'Inicio')

@section('contenido')
<div class="jumbotron jumbotron-fluid  mt-4">
    <div class="container">
      <h1 class="display-4 text-center">Laravel 8</h1>

      <p class="lead text-justify">
        Laravel es un popular framework de PHP. Permite el desarrollo de
        aplicaciones web totalmente personalizadas de elevada calidad.
      </p>
      <p class="text-justify">
        Laravel 8 continúa las mejoras realizadas en Laravel 7.x introduciendo Laravel Jetstream, 
        clases de fábrica modelo, aplastamiento de migraciones, agrupación de trabajos, limitación de 
        tasas mejorada, mejoras en las colas, componentes dinámicos de la hoja, vistas de paginación del 
        viento de cola, ayudantes de pruebas de tiempo, mejoras en artisan serve, mejoras en la escucha de
        eventos, y una variedad de otras correcciones de errores y mejoras en la usabilidad.
      </p>
      <p align="center"> <img class="img-fluid" src="{{asset('img/laravel.png')}}" alt="" ></p>
     
    </div>
</div>
    
@endsection