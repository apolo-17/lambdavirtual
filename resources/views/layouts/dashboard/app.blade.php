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
</head>
<body>
    <div id="app" class="flex min-h-screen">
        <div class="w-2/12 h-screen min-h-screen flex-none pt-header w-sidebar px-6">
            <div class="flex justify-center m-4">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </div>
            <div class="flex justify-center">
                <ul class="p-3">
                    <li class="flex p-3 items-center text-gray-600">
                        <img src="{{ asset('images/ico-tablero.png') }}" alt="Tablero" class="p-2"> Tablero
                    </li>
                    <li class="flex p-3 items-center text-gray-600">
                        <img src="{{ asset('images/ico-cursos.png') }}" alt="Mis cursos" class="p-2">Mis Cursos
                    </li>
                    <li class="flex p-3 items-center text-gray-600">
                        <img src="{{ asset('images/ico-chat.png') }}" alt="Chat" class="p-2">Chat
                    </li>
                    <li class="flex p-3 items-center text-gray-600">
                        <img src="{{ asset('images/ico-anuncio.png') }}" alt="Anuncios" class="p-2">Anuncios
                    </li>
                    <li class="flex p-3 items-center text-gray-600">
                        <img src="{{ asset('images/ico-foro.png') }}" alt="Foro" class="p-2">Foro
                    </li>
                    <li class="flex p-3 items-center text-gray-600">
                        <img src="{{ asset('images/ico-configuracion.png') }}" alt="Configuraciones" class="p-2">
                        <a href="{{ action('StudentProfileController@index') }}" >Configuraciones</a>
                    </li>
                </ul>
            </div>
            
        </div>
        <main class="w-10/12 bg-gray-200">
            <div class="flex items-center relative h-header z-20 px-6 ">
                <div class="v-popover ml-auto h-9 flex items-center dropdown-right">
                <a class="m-4 text-base font-thin">
                    {{ Auth::user()->email }} 
                </a>
                
                <form action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <button type="submit">
                        <img src="{{ asset('images/logout.png') }}" alt="Cerrar sesión">
                    </button>
                </form>
                </div>
            </div>
            @yield('content')
        </main>
    </div>
</body>
</html>
