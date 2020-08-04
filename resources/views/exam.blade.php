<!DOCTYPE html>
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
    <link href="{{ asset('css/all-examen.css') }}" rel="stylesheet" >
</head>

<body>
    <div class="examenwrap" id="app">
    <header class="examenHeader">
        <img src="{{ asset('images/logo-horizontal.png') }}" alt="logo lambda" class="examenHeader__logo">
        <section class="examenHeader__right">
            <header class="examenHeader__tag">
                <div>
                    <img src="#" alt="" class="contentRight__mensaje">
                </div>
                <div>
                    {{ auth()->user()->name }}
                </div>
                <div>
                    <img src="#" alt="">
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
    </header>
    @if($message)
    <section class="examenContent">
        <section class="examenContent__item">
            <div class="examenContent__head">
                <img src="{{ asset('images/premio-small.png') }}" alt="" class="examenContent__images">
                <p class="examenContent__title">
                    1er Concurso Internacional de conocimiento
                </p>
            </div>
            <span class="text-red-700 font-semibold text-2xl text-center"> Ya has presentado el examen, no puedes volver hacerlo</span>
            <span class="text-center">
                <a href="{{ action('HomeController@index') }}">
                    <br>
                    <button class="bg-red-700 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full">
                        Regresar
                    </button>
                </a>
            </span>

        </section>
    </section>
    @else
    <section class="examenContent">
        <section class="examenContent__item">
            <div class="examenContent__head">
                <img src="{{ asset('images/premio-small.png') }}" alt="" class="examenContent__images">
                <p class="examenContent__title">
                    1er Concurso Internacional de conocimiento
                </p>
            </div>
            <exam-model
                :exam_id="{{ $exam_id }}"
            ></exam-model>

        </section>
    </section>
    @endif
    </div>
</body>

</html>
