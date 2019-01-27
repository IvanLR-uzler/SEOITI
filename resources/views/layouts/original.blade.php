<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SEOITI') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'SEOITI') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @can('examns.index')
                        <li class="nav-item">
                            <a class='nav-link' href="{{ route('examns.index') }}">{{ __('Examenes') }}</a>
                        </li>
                        @endcan()
                        @can('questions.index')
                        <li class="nav-item">
                            <a class='nav-link' href="{{ route('questions.index') }}">{{ __('Preguntas') }}</a>
                        </li>
                        @endcan()
                        @can('aspirants.index')
                        <li class="nav-item">
                            <a class='nav-link' href="{{ route('aspirants.index') }}">{{ __('Aspirantes') }}</a>
                        </li>
                        @endcan()
                        @can('users.index')
                        <li class="nav-item">
                            <a class='nav-link' href="{{ route('users.index') }}">{{ __('Usuarios') }}</a>
                        </li>
                        @endcan()
                        @can('roles.index')
                        <li class="nav-item">
                            <a class='nav-link' href="{{ route('roles.index') }}">{{ __('Roles') }}</a>
                        </li>
                        @endcan()
                        @can('knowledgementareas.index')
                        <li class="nav-item">
                            <a class='nav-link' href="{{ route('knowledgementareas.index') }}">{{ __('Areas del Conocimiento') }}</a>
                        </li>
                        @endcan()
                        @can('schools.index')
                        <li class="nav-item">
                            <a class='nav-link' href="{{ route('schools.index') }}">{{ __('Escuelas') }}</a>
                        </li>
                        @endcan()
                        <li class="nav-item"><a class='nav-link' href="{{ route('help') }}">{{ __('Ayuda') }}</a></li>
                        <li class="nav-item"><a class='nav-link' href="{{ route('comments') }}">{{ __('Comentarios') }}</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if (session('info'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
                
            @yield('content')
        </main>
    </div>
</body>
<br><br><br><br>
<footer class="subtitle text-center">
    <hr>
    <p>Instituto Tecnológico del Istmo</p>
</footer>
</html>
