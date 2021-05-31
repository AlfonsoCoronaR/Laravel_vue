<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    <title>@yield('Titulo', 'CRUD')</title>

  </head>
  <body>
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
        <div class="container">
          <a class="navbar-brand" href="#"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"
          >Salir</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link {{ setActive('contacto.*') }}" href="/contacto">Proyectos</a>
              <a class="nav-link {{ setActive('informacion') }}" href="/informacion">Comentario</a>
            </div>
            <span class="navbar-text">
              <div class="d-flex justify-content-end">
                @auth
                  {{ auth()->user()->name }} 
                @endauth
              </div>
            </span>      
          </div>
        </div>
      </nav>
    </div>
    <div class="container">
      @yield('contenido')
    </div>

  </body>
</html>