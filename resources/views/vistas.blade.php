
@extends('layout.plantilla')
@section('tituloPagina' , 'Vistas')

@section('contenido')

<div class="jumbotron jumbotron-fluid mt-4">
  <div class="container">
    <h1 class="display-4"> Vistas </h1>
    <p class="lead">
      Laravel nos permite separar la logica de presentacion de la logica de nuestra aplicacion a travez de las vista.
    </p>
    <h3>Crear una vista</h3>
    <p>
      Las vista generalmente se encuentran en el directorio /resource/views/ de la carpeta principal de nuestro proyecto. 
      Crear una vista con Laravel simplemente necesitas crear un archivo .php o .blade.php en el directorio /views .
    </p>
    <h3>Retornar una vista</h3>
    <p>Para retornar una vista retornamos el llamado a la funcion view pasando como argumento el nombre de la vista. 
        El nombre del archivo es relativo a la carpeta resource/views y no es necesario indicar la extension del archivo.</p>
    <p>Para realizar las rutas de tienen que acomodar de acuerdo a como se realizo la pagina primero el menu, despues el contenido y al 
      ultimo el pie de pagina.
    </p>
    <p>En la cual tendra un variable que retornaran las vistas que tiene incluidas</p>
    <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('img/ruta.png')}}" alt="">
  </div>

</div>


@endsection