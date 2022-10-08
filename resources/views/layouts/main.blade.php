<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">

        <!-- CSS aplicação -->
        <link rel="stylesheet" href="/css/style.css">

        <!-- Fontes do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/assets/img/logo.svg" alt="LA Events">
                    </a>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a href="{{ route('events.index') }}" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('events.create') }}" class="nav-link">Criar Evento</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link">Cadastrar</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <div class="container-fluid">
                <div class="row">
                    @if (session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>

        <footer>
            <p>LA events &copy; 2022 | Todos Os Direitos Reservados</p>
        </footer>

        <script src="{{ url('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>