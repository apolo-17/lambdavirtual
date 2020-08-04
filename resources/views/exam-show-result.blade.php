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
		<div class="examenwrap">
		<header class="examenHeader">
            <a href="{{ action('HomeController@index') }}">
                <img src="{{ asset('images/logo-horizontal.png') }}" alt="logo lambda" class="examenHeader__logo">
            </a>
			<section class="examenHeader__right">
				<div class="examenHeader__tag">
					<div class="examenHeader__mensaje">
						<img src="{{ asset('images/ico-login-mail.png') }}" alt="">
					</div>
					<div class="examenHeader__name">
						{{ auth()->user()->name }}
					</div>
					<div class="examenHeader__avatar">
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
				</div>
			</section>
		</header>
		<section class="examenContent" id="app">
			<section class="examenContent__item">
				<div class="examenContent__head">
					<img src="{{ asset('images/premio-small.png') }}" alt="" class="examenContent__images">
					<p class="examenContent__title">
						1er Concurso Internacional de conocimiento
					</p>
				</div>
				<div class="examenContent__conteo examenContent__conteoPositiontop">
					<div class="examenContent__number">50 puntos </div><div class="examenContent__numbertext">Reprobada</div>
				</div>
				<section class="examenContent__result">
					<div class="examenContent__result-item">Puntaje</div>
					<div class="examenContent__result-item examenContent__result-point">{{ $total_score }}</div>
					<div class="examenContent__result-item">Preguntas</div>
					<div class="examenContent__result-item examenContent__result-point">{{ $questions_total }}</div>
					<div class="examenContent__result-item">Correcto</div>
					<div class="examenContent__result-item examenContent__result-point">{{ $answer_correct }}</div>
					<div class="examenContent__result-item">Incorrecto</div>
					<div class="examenContent__result-item examenContent__result-point">{{ $answer_incorrect }}</div>
				</section>
				<div class="examenContent__conteo examenContent__conteoPositionbottom">
					<div class="examenContent__note">Necesita 80 puntos para aprobar el examen</div>
				</div>
			</section>
		</section>

		</div>
	</body>
	</html
