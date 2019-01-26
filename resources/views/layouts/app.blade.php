<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SEOITI</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <header class="font-header">
            <h1>Sistema de Examenes Online</h1>
        </header>
        <nav id="nav-list" class="links">
                <a href="{{ route('welcome') }}">{{ __('Inicio') }}</a>
                <a href="{{ route('register') }}">{{ __('Registro') }}</a>
                <a href="{{ route('help') }}">{{ __('Ayuda') }}</a>
                <a href="{{ route('comments') }}">{{ __('Comentarios') }}</a>
                <a href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
        </nav>
        <main class="py-4">
                @yield('content')
        </main>
        <footer class="footer">
                <hr>
            <p>Instituto Tecnológico del Istmo</p>
        </footer>
    </body>
</html>
