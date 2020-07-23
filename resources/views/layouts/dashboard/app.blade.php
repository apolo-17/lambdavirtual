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
            <header class="lateral__header">
                <img src="{{ asset('images/logo.png') }}" alt="logo lambda">
            </header>
            <div class="userslateral__menu">
                <ul>
                    <li>
                    <img src="{{ asset('images/ico-tablero.png') }}" alt="" class="iconosmenu"><a href="{{ action('HomeController@index') }}">Tablero</a>
                    </li>
                    <li>
                        <img src="{{ asset('images/ico-cursos.png') }}" alt="" class="iconosmenu"><a href="#">Mis Cursos</a>
                    </li>
                    <li>
                        <img src="{{ asset('images/ico-chat.png') }}" alt="" class="iconosmenu"><a href="#">Chat</a>
                    </li>
                    <li>
                        <img src="{{ asset('images/ico-anuncio.png') }}" alt="" class="iconosmenu"><a href="#">Anuncios</a>
                    </li>
                    <li>
                        <img src="{{ asset('images/ico-foro.png') }}" alt="" class="iconosmenu"><a href="#">Foro</a>
                    </li>
                    <li style="background:#B60011">
                    <img src="{{ asset('images/ico-configuracion-white.png') }}" alt="" class="iconosmenu"><a href="{{ action('StudentProfileController@index') }}"  style="color:#ffffff">Configuraciones</a>
                    </li>
                </li>
                {{-- <img src="{{ asset('images/ico-configuracion-white.png') }}" alt="" class="iconosmenu"><a href="{{ action('ExamsController@index') }}" >Administracion de examenes</a> --}}
                </li>
                </ul>
            </div>
        </div>
        <section class="content">

            @yield('content')
        </section>
        <section class="contentRight">
				<header class="contentRight__header">
					<div>
                        {{ Auth::user()->email }}
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
