@extends('layout.plantilla')
@section('tituloPagina' , 'Rutas')

@section('contenido')

<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container">
      <h1 class="display-4">Rutas en Laravel</h1>
      <p class="lead">
        Para poder tener las rutas se puede emplear de manera sencilla para poder ver las vistas en el navegador
        Todas las rutas de Laravel están definidas en sus archivos de routes que se encuentran en el directorio routes. 
        El archivo routes/web.php define rutas que son para su interfaz web.
      </p>
      <h3> Ejemplo del uso de rutas en laravel</h3>
      <br>
      <p>
        proporcionando un método muy simple y expresivo para definir rutas y comportamientos sin complicados archivos 
        de configuración de enrutamiento.
      </p>
      <p><ul>
         <li style="color: red">use Illuminate\Support\Facades\Route;
            <p> Route::get('/greeting', function () {</p>
            <p> return 'Hello World'; });</p>
        </li>
      </ul>
      </p>
      
      <p>
        Solo necesita devolver una vista, puede usar el método Route::view. 
      </p>
      <p><ul><li style="color:blue"> Route::view('/welcome', 'welcome');</li></ul></p>

      <p>Puede acceder a las rutas definidas en ingresando la URL de la ruta definida en su navegador.
        De esta manera puede ser usado al momento de declarar la ruta.
      </p>
      <p><ul><li style="color: brown">Route::get('/user', [UserController::class, 'index']);</li></ul></p>

      <p>Esta ruta se hace mediante los controladores para poder mostar las vistas</p>
      <p><ul><li style="color:mediumvioletred">Route :: get ( '/' , HomeController :: class);</li></ul></p>

      <p>A veces, necesitará capturar segmentos del URI dentro de su ruta. Por ejemplo, es posible que deba capturar 
        la identificación de un usuario de la URL. Puede hacerlo definiendo los parámetros de ruta</p>
      <p><ul><li style="color: midnightblue">Route::get('/user/{id}', function ($id){
        <p>return 'User '.$id;});</p></li></ul></p>
    </div>
</div>

@endsection