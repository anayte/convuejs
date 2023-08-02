<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/cosmo.css">
  
    <title> Principal </title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>

<body class="contenedor">

    <h1>Principal</h1>

    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="/agregar"> Agregar </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/historial"> Historial </a>
            </li>
            <li class="nav-item">
              <form method="post" action="/inventario" >   
                <input type="hidden" name="user" id="user" value="{{ Auth::user()->id }}">       
                  <button type="submit" class="unstyle">
                    <a class="nav-link"> Inventario </a>
                  </button>
                @csrf
              </form>
            </li>
            <li class="nav-item">
              <form method="post" action="/facturar" >   
                <input type="hidden" name="user" id="user" value="{{ Auth::user()->id }}">       
                  <button type="submit" class="unstyle">
                    <a class="nav-link" href="/facturar"> Vendidos </a>
                  </button>
                @csrf
              </form>
            </li>
          </ul>
          <ul class="navbar-nav navbar-expand-lg bg-dark">
            <li class="nav-item">
              <form method="post" action="/comprar" >
                <button type="submit" class="unstyle"><a class="nav-link"> Ir a Comprar </a></button>
                @csrf
              </form>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        </div>
      </div>
    </nav>

    @yield('content')

</body>
</html>