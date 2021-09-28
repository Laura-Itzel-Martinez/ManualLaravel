@extends('layout.plantilla')
@section('tituloPagina' , 'Vistas blade')

@section('contenido')
<div class="jumbotron jumbotron-fluid mt-4">
    <div class="container">
      <h1 class="display-4"> Vistas con blade</h1>
      <p class="lead">
        Laravel nos permite separar la logica de presentacion de la logica de nuestra aplicacion a travez de las vista.
      </p>
      <h3>Crear una vista</h3>
      <p>
        Las vista generalmente se encuentran en el directorio /resource/views/layout/plantilla de la carpeta principal de nuestro proyecto. 
        Crear una vista con Laravel simplemente necesitas crear un archivo .php o .blade.php en el directorio /views .
      </p>
      <h3>Plantilla Blade</h3>
      <p>Extender una plantilla

        En cada una de nuestras plantilla individuales en lugar de incluir el header o footer le indicamos 
        a Laravel que la vista debe extender de <strong>plantilla.blade.php</strong></p>
      
      <p><ul><li>Se realiza la plantilla con html y lo que va a contener en nuestra vista</li></ul></p>
      <p><ul><li>Se agregara a los datos que cambiaran en las vistas <strong>yield('name')</strong></li></ul></p>
      <p><ul><li>A nuestras vistas que creamos para agregar datos son y <strong>section('name')</strong> y
      <strong>extends('nombreDePlantilla')</strong>
      </li></ul></p>

      <h3>Visualizar Vistas</h3>
      <p><ul><li>Despues de crear nustro controladores nos mandaremos a llamar</li></ul></p>
      <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('img/img2.png')}}" alt="">


    

</div>
@endsection