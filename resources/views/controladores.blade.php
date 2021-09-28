@extends('layout.plantilla')
@section('tituloPagina' , 'Controladores')

@section('contenido')
<div class="card mt-4" >
    <div class="card-body mt-4">
      <h5 class="card-title">Controladores en Laravel</h5>
      <h6 class="card-subtitle mb-2 text-muted mt-4">Creacion de controladores</h6>
      <p class="card-text">
        Tenga en cuenta que el controlador hereda de la clase de controlador base incluida con Laravel. 
        La clase base provee de una serie de métodos útiles como el método middleware, que se puede usar 
        para adjuntar un middleware a las acciones del controlador.
      </p>
      <h3>Ejemplo de crear un archivo de controladores</h3>
      <p>Para crear los controladores en laravel se utilizara en terminal del editor de codigo</p>
      <p>Ingresar el Siguiente comando: <strong>php artisan make:Controller "Nombre del controlador"</strong></p>
      <p>Despues de crear los encontraremos en la ruta: app/Http/Controllers</p>
      <br>
      <h3>La creacion de un controlador</h3>
      <p>Despues de crear nuestro controladores realizaremos los siguiente:</p>

      <p><ul><li>Usaremos la siguiente estructura para usar los controladores en el archivo creado</li></ul></p>
      <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('img/img1.png')}}" alt="">

      <p><ul><li>Para poder realizar la ruta de nuestros controladores son de la siguiente manera</li></ul></p>
      <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('img/img2.png')}}" alt="">

      <p><ul><li>Usaremos la siguiente estructura para usar los controladores en el archivo creado de diferente manera por defecto</li></ul></p>
      <p>Si desea definir un controlador que sólo maneje una única acción, puede colocar un único método __invoke</p>
      <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('img/img3.png')}}" alt="">

      <p><ul><li>Para poder realizar la ruta de nuestros controladores son de la siguiente manera por defecto</li></ul></p>
      <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('img/img4.png')}}" alt="">
     
    </div>
  </div>
@endsection