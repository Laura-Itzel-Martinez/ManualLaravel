@extends('layout.plantilla')
@section('tituloPagina' , 'Instalacion')

@section('contenido')
<div class="card border-light mb-3 mt-5" >
    <div class="card-header text-center">Instalación y puesta en marcha de laravel </div>
    <div class="card-body">
        <p class="card-text">Para empezar a desarrollar con Laravel en Windows necesitamos instalar lo siguiente:
            <ol>
                <li>Composer</li>
                <li>Servidor web Apache (XAMMP) </li>
            </ol>
        </p>
        <h5 class="card-title">Instalación de Composter</h5>
        <p class="card-text">
            Sigue los siguientes pasos para la instalación de Composer
            <ol>
                <li>Instala PHP en tu computadora <a href="https://www.apachefriends.org/es/download.html" target=”blank”>Descargar aqui Xammp</a></li>
                <br>
               

                <li >Una vez que XAMPP esté instalado, descarga la última versión de Composer.
                    <a href="https://getcomposer.org/" target=”blank”>Descargar aqui</a>

                </li><br>
               

                <li>Ejecuta el asistente de instalación de Composer y continúa con el proceso de instalación.</li><br>
               
                <li>Aparecerá otra ventana y te pedirá que ubiques la línea de comando PHP. Por defecto, está en C:/xampp/php/php.exe.
                haz clic en Siguiente hasta finalizar la instalacion</li><br>
                
                <li>Ingresa el siguiente comando:<strong> composer </strong>para visualizar la version instalada</li>
               

            </ol>
        </p>
        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Tutorial de instalación de Composer</h5>
                  <p class="card-text">
                    <iframe width="400" height="315" src="https://www.youtube.com/embed/BwAv5EtJ9fs" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Tutorial de instalacion de Xammp</h5>
                  <p class="card-text">
                    <iframe width="400" height="315" src="https://www.youtube.com/embed/6frPi6LeEOA" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Puesta en marcha de laravel
    </div>
    <div class="card-body">
      <h5 class="card-title">Instalación de Laravel</h5>
        <p class="card-text">
            Necesitaremos tener instalado Composer que es un gestor de paquetes y 
            dependencias para PHP y es el que utiliza Laravel. Composer te permite declarar 
            las librerías de las que depende el proyecto.

            <ul>
                <li>Abriremos la consola para poder ejecutar laravel en la cual 
                    nos dirigimos a la ruta en donde se agregan los proyectos (XAMPP la ruta es C:\xampp\htdocs mediante consola </li><br>
                   


                <li>Una vez instalado ya podemos ejecutar la instalación de Laravel vía Composer con el comando:
                <strong>composer global require laravel/installer</strong></li><br>
                

                <li>Despues que se instale crearemos un nuevo proyecto en laravel lo crearemos con el siguiente comado:
                    <strong>composer create-project laravel/laravel nombre_del_proyecto</strong></li><br>
                </li>
               

                <li>Ya creado nuestro proyecto lo abriremos en un editor de codigo(Visual Studio Code)</li><br>
                
                <li>Nos iremos en la terminal del editor de codigo y escribiremos el siguiente comando:
                    <strong>php artisan serve</strong></li><br>
                </li>
               

                <li>Nos saldra un link http://127.0.0.1:8000 y le daremos clic nos abrira en nuestro navegador</li>
                
            </ul>

        </p>
    </div>
    <div class="card">
    <div class="card-body">
        <h5 class="card-title">Tutorial de instalacion</h5>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/XjayeuxMIo4" 
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
@endsection