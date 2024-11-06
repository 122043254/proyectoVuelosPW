<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap"   rel="stylesheet">
    <style>

        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        footer {
            flex-shrink: 0;
        }

        .navbar-hidden{
            transform: translateY(-100%);
            transition: transform 0.3s ease-in-out;
        }
    </style>
     <script>
        // JavaScript para ocultar la barra de navegación al hacer scroll hacia abajo
        let lastScrollTop = 0;
        window.addEventListener("scroll", function() {
            const navbar = document.querySelector("nav");
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {
                navbar.classList.add("navbar-hidden");
            } else {
                navbar.classList.remove("navbar-hidden");
            }
            lastScrollTop = scrollTop;
        });
    </script>
    <title>@yield('titulo')</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary" href="{{ route('rutaPaginaprincipal') }}">Travell</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Vuelos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('rutaBusquedaVuelos') }}">{{__('Buscar Vuelos')}}</a></li>
              <li><a class="dropdown-item" href="{{ route('rutaReservacionesVuelos') }}">{{__('Reservar Vuelos')}}</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hoteles
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('rutaBusquedaHoteles') }}">{{__('Buscar Hoteles')}}</a></li>
              <li><a class="dropdown-item" href="{{ route('rutaReservacionesHoteles') }}">{{__('Reservar Hoteles')}}</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('rutaPoliticasCancelacion') }}">{{__('Politicas de Cancelación')}}</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn btn-outline-primary" href="{{ route('rutaIniciosesion') }}">{{__('Iniciar Sesión')}}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    @yield('contenido')
  </main>

  <footer class="bg-dark text-orange pt-4" style="color: rgb(43, 0, 255);">
    <div class="container">       
      <div class="text-center">
        <h5 class="text-uppercase" style="color: white">{{__('Agencia de viajes Travell') }}</h5>
        <p style="color: white">{{__('Descubre tu siguiewnte destino con Travell') }}.</p>
        <p style="color: white">&copy; {{__('Travell') }}, {{ date('Y') }}</p>{{-- Logica sacada de chat, entendida que llamamos una funcion de php para sacar el dia, mes y año --}}
      </div>
    </div>
  </footer>
</body>
</html>