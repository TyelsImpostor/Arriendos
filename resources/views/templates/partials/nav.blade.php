<!-- Panel visible en la parte superior de las vistas -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/') }}">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Lado Izquierdo de Navbar -->
      <ul class="navbar-nav mr-auto">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            @if(Auth::user())
              @if(Auth::user() -> admin())
                <li class="nav navbar-nav">
                  <a class="nav-link" href="{{ route('users.index')}}">Usuarios</a>
                </li>
                <li class="nav navbar-nav">
                  <a class="nav-link" href="{{ route('categories.index')}}">Categorias</a>
                </li>
                <li class="nav navbar-nav">
                  <a class="nav-link" href="{{ route('tags.index')}}">Tags</a>
                </li>
                <li class="nav navbar-nav">
                  <a class="nav-link" href="{{ route('images.index')}}">Imagenes</a>
                </li>
                <li class="nav navbar-nav">
                  <a class="nav-link" href="{{ route('articles.index')}}">Articulos</a>
                </li>
                <li class="nav navbar-nav">
                  <a class="nav-link" href="{{ route('accept.index')}}">Articulos por Aprobar</a>
                </li>
                <li class="nav navbar-nav">
                  <a class="nav-link" href="{{ route('pays.index')}}">Historial de Compras</a>
                </li>
              @endif
              @if(Auth::user() -> member())
                <li class="nav navbar-nav">
                  <a class="nav-link" href="{{ route('myarticles.index')}}">Mis Articulos</a>
                </li>
                <li class="nav navbar-nav">
                  <a class="nav-link" href="{{ route('pays.create')}}">Comprar Articulo Premium</a>
                </li>
              @endif
              </li>
            @endif
          </ul>
        </div>
      </ul>

      <!-- Lado derecho de Navbar -->
      <ul class="navbar-nav ml-auto">
          <!-- Opciones de autenticacion y logeo -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Session') }}</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('registers.register') }}">{{ __('Registrar') }}</a>
              </li>
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Cerrar Session') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
  </div>
</nav>
