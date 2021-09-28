@extends('layout.plantilla')
@section('tituloPagina' , 'Base de Datos')

@section('contenido')
<div class="card mt-4">
    <div class="card-body mt-4">
      <h3>Base de datos con Laravel</h3>
      <p>
        La base de datos es un aspecto muy importante de cualquier aplicación para almacenar grandes 
        cantidades de información, Laravel nos proporciona  las migraciones (migration) que es una funcionalidad 
        que nos ayuda bastante en la creación de la estructura de las tablas.
      </p>
      <p>
          <ol>
              <li> Lo primero es abrir el panel de control de Xampp, iniciar el servidor de Apache y MySQL</li>

              <li>Despues ingresaremos a phpAdmin "http://localhost/phpmyadmin/"</li>

              <li>la opción de “crear base de datos” para nuestro ejemplo el nombre de la base de datos es Tareas</li>

              <li>Ahora iniciamos lo que es el Visual Studio Code, Aquí puedes configurar tu entorno de desarrollo para Laravel.</li>

              <li>En el directorio principal encontramos el archivo .env donde realizaremos las configuraciones de nuestra base de datos, en el campo DB_DATABASE colocamos el nombre de la base de datos creada en nuestro caso curso_de_laravel.</li>

              
          </ol>
      </p>
      <h3>Migraciones</h3>
      <p>
          <ol>
              <li>Para crear las migraciones utilizaremos Artisan que es una interfaz de línea de comandos de Laravel. 
                El nombre de la tabla debe ir en plural en nuestro caso matematicas 
                <strong> php artisan make:migration create_alumnos_table</strong></li>

                <li>La instrucción creará un archivo en la carpeta de migrations con extensión .php </li>

                <li> crearemos las columnas de nuestra tabla alumnos, aquí es donde la clase Blueprint nos permite manipular las consultas como objetos</li>

                <li>Una vez llenado los campos necesarios en nuestras tablas ejecutamos las migraciones con el comando de artisan migrate.
                    <strong> php artisan migrate</strong></li>

                <li>Artisan automáticamente creará las tablas y toda su estructura de campos en nuestra base de datos.</li>
          </ol>
      </p>
    </div>
  </div>
    
@endsection