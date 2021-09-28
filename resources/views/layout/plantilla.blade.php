<!doctype html>
<html lang="en">
  <head>
    <title>@yield('tituloPagina')</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-image: radial-gradient(circle at 73.06% 0.55%, #fbac8d 0, #f7a38a 12.5%, #f19583 25%, #e68379 37.5%, #d86c6c 50%, #c95561 62.5%, #bd425b 75%, #b33259 87.5%, #ac275b 100%);">
    <div class="container" >
        <div class="row">
            <div class="col">
                <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mr-auto ">
                  <a class="navbar-brand" href="/">
                    <img src="{{asset('img/logo.png')}}" href="/" width="100" height="50" alt="" loading="lazy" >
                  </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="/">Inicio</a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="/instalacion">Instalacion Laravel</a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="/rutas">Rutas</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/vistas">Vistas</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/vistasBlade">Vistas Blade</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/controladores">Controladores</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/baseDatos">Base de Datos</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col mt-4">
              <br>
                @yield('contenido')
            </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <hr>
  <div class="card-body text-white bg-dark">
    <blockquote class="blockquote mb-0" >
      <p class="text-center">Manual basico de Laravel</p>
      <p class="text-center">© 2021 Back-end</p>
      <footer class="blockquote-footer">
      <cite title="Source Title">Laura Itzel Martinez Zaragoza</cite></footer>
    </blockquote>
  </div>
      
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>