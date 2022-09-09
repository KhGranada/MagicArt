<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="{{ asset('frontend/css/fontawesome/all.min.css') }}"  rel="stylesheet">


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('frontend/js/custom.js') }}" defer></script>

<script src="{{ asset('frontend/js/pickadate/picker.js') }}"></script>
<script src="{{ asset('frontend/js/pickadate/picker.date.js') }}"></script>
<script src="{{ asset('frontend/js/form_validation/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/js/form_validation/jquery.validate.min.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm position-fixed top-0 col-sm-12 col-xs-12" style="z-index:99">
            <div class="container">
                <a class="navbar-brand m-0 p-0" href="{{ url('/') }}">
                    <img src="{{asset('img/logo.jpg')}}" width="60" height="60" alt="" class="position-relative m-0 p-0"/> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                        @if(Auth::check() && Auth::user()->rol == 1)
                            <a class="nav-link" href="{{ url('') }}">Inicio</a>
                        @elseif(Auth::check() && Auth::user()->rol == 2)
                            <a class="nav-link" href="{{ url('') }}">Inicio</a>
                        <!--<a class="nav-link" href="{{ url('home') }}">Tablero</a>-->
                        @else
                        <a class="nav-link" href="{{ url('') }}">Inicio</a>
                        @endif
                        </li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('store') }}">Productos</a>
                        </li>
                        @endguest

                        @if(Auth::check() && Auth::user()->rol == 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('products') }}">Control de inventario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('invoice') }}">Control de Pedidos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('users') }}">Control de clientes</a>
                        </li>
                        @endif

                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">Contacto</a>
                        </li>
                        @endguest
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrarme</a>
                                </li>
                            @endif
                        @else
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end z-index" aria-labelledby="navbarDropdown">
                                    
                                @if(Auth::check() && Auth::user()->rol == 2)
                                 <a class="dropdown-item" href="{{ url('users') }}/{{ Auth::user()->id }}/edit">
                                      Actualizar información
                                    </a>
                                @endif
                                @if(Auth::check() && Auth::user()->rol == 1)
                                    <a class="dropdown-item" href="{{ url('settings') }}"> Configurar empresa </a>
                                @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}">  Cerrar sesión </a>
                    
                                
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="mt-5 pt-5">
            @yield('content')
        </main>