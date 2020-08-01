<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" >
</head>
<body>
    <div id="app" class="userswrap">
        <div class="userslateral">
            <header class="userslateral__header"><center>
                <img src="{{ asset('images/logo.png') }}" alt="logo lambda">
            </header>
            <div class="userslateral__menu">
                <ul>
                    <li>
                        <div class="userslateral__item">
                            <img src="./images/ico-tablero.png" alt="" class="userslateral__img"><a href="{{ action('HomeController@index') }}">Tablero</a>
                        </div>
                    </li>
                    <li>
                        <div class="userslateral__item">
                            <img src="./images/ico-cursos.png" alt="" class="userslateral__img"><a href="#">Mis Cursos</a>
                        </div>
                    </li>
                    <li>
                        <div class="userslateral__item">
                            <img src="./images/ico-chat.png" alt="" class="userslateral__img"><a href="#">Chat</a>
                        </div>
                    </li>
                    <li>
                        <div class="userslateral__item">
                            <img src="./images/ico-anuncio.png" alt="" class="userslateral__img"><a href="#">Anuncios</a>
                        </div>
                    </li>
                    <li>
                        <div class="userslateral__item">
                            <img src="./images/ico-foro.png" alt="" class="userslateral__img"><a href="#">Foro</a>
                        </div>
                    </li>
                    <li>
                        <div class="userslateral__item">
                            <img src="./images/ico-configuracion.png" alt="" class="userslateral__img"><a href="{{ action('StudentProfileController@index') }}">Configuraciones</a>
                        </div>
                    </li>
                </li>
                </li>
                </ul>
            </div>
        </div>
        <section class="content">
            <div class="contentAdmin">
                <form action="" class="contentAdmin__search">
                    <input type="text" placeholder="Buscar">
                    <button type="submit" class="contentAdmin__btn"><img src="./images/search.png" alt=""></button>
                </form>
                <br /><br />
			</div>

            @yield('content')
        </section>
        
        <section class="contentRight">
            <header class="contentRight__header">
                <div>
                    <img src="{{ asset('images/ico-login-mail.png') }}" alt="" class="contentRight__mensaje">
                </div>
                <div>
                    {{ Auth::user()->name }}
                </div>
                <div>
                    <img src="{{ asset('images/avatar.png') }}" alt="">
                </div>
                <div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">
                            <img src="{{ asset('images/logout.png') }}" alt="">
                        </button>
                    </form>
                </div>
            </header>
		</section>
    </div>
</body>
</html>
