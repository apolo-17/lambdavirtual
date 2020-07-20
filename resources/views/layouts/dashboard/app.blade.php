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
    <style>
        .userswrap {
  border: 1px solid #c1c1c1;
  display: grid;
  grid-template-columns: 15% 65% 20%;
}
.userslateral {
  padding: 1em;
  padding-right: 0;
  border-color: 1px solid #000;
}
.userslateral__menu ul {
  margin: 0;
  padding: 0;
}
.userslateral__menu ul li {
  margin: 0;
  padding: 1em 0;
  padding-left: 2em;
  list-style: none;
}
.userslateral__menu ul li a {
  color: #707070;
  text-decoration: none;
}
.userslateral__menu ul li:hover {
  background: #b60011;
}
.userslateral__menu ul li:hover a {
  color: #fff;
  text-decoration: none;
}
.userslateral__menu img {
  width: 20px;
  margin-right: 10px;
}
.content {
  padding: 1em;
  padding-left: 2em;
  background-color: #fafafa;
  color: #707070;
}
.content__header {
  display: flex;
  padding-bottom: 1em;
}
.content__header div {
  width: 30%;
}
.content__title {
  padding-bottom: 1em;
}
.content__formUsers input[type="text"],
.content__formUsers input[type="password"],
.content__formUsers input[type="email"],
.content__formUsers input[type="number"],
.content__formUsers input[type="date"] {
  border: 0;
  box-shadow: 2px 5px 6px rgba(0,0,0,0.1);
  font-size: 1em;
  border-radius: 10px;
  color: #707070;
  padding: 0.5em;
  margin-bottom: 1.1em;
  width: 80%;
}
.content__formUsers input:focus,
.content__formUsers input.form-control:focus {
  outline: none !important;
  outline-width: 0 !important;
}
.content .listaform {
  border: 0;
  box-shadow: 2px 5px 6px rgba(0,0,0,0.1);
  font-size: 1em;
  border-radius: 10px;
  color: #707070;
  padding: 0.5em;
  margin-bottom: 1.1em;
  width: 80%;
  background-color: #ffffff;
}
.content .listaNacimiento {
  border: 0;
  box-shadow: 2px 5px 6px rgba(0,0,0,0.1);
  font-size: 1em;
  border-radius: 10px;
  color: #707070;
  padding: 0.5em;
  margin-bottom: 1.1em;
  width: 27%;
}
.contentFormUser__wrap {
  display: grid;
  grid-template-columns: 50% 50%;
  padding-left: 2em;
}
.contentRight {
  background-color: #fafafa;
  text-align: right;
  padding: 1em 2em;
}
.contentRight__header {
  display: flex;
  justify-content: flex-end;
  padding-bottom: 1em;
}
.contentRight__header div {
  margin-left: 1em;
}
.terminos {
  width: 80%;
  margin: 0 auto;
}
.terminos p {
  text-align: justify;
}
body {
  margin: 0;
  padding: 0;
  color: #000;
  background: #fff;
  font-size: 16px;
  font-family: 'Open Sans', sans-serif;
}
.wrapexito {
  height: 800px;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.wrapexito__big {
  display: flex;
  justify-content: center;
  align-items: center;
}
.wrapexito__datos {
  text-align: center;
}
.wrapexito__datos h1 {
  color: #b60011;
  font-size: 1.2;
  margin-bottom: 0;
}
.wrapexito__datos h2 {
  color: #caa23e;
  font-size: 1.2;
  margin: 0 0 2em 0;
}
.wrapexito__datos p {
  font-size: 0.9em;
  color: #707070;
}
.wrapexito__link {
  border-radius: 20px;
  padding: 0.6em 1.4em;
  color: #fff;
  background-color: #b60011;
  width: 100%;
  text-align: center;
  box-shadow: 2px 2px 5px 1px rgba(0,0,0,0.16);
  text-decoration: none;
}
.wrap {
  display: flex;
  height: 100%;
}
.lateral {
  width: 30%;
  padding: 9em 1em;
  border-color: 5px solid #000;
}
.lateral__header {
  margin: 0 auto;
  margin-bottom: 4em;
  text-align: center;
  width: 60%;
}
.lateral__wellcome {
  border-radius: 10px;
  padding: 0.3em 0;
  color: #fff;
  background-color: #b60011;
  font-weight: bold;
  width: 100%;
  text-align: center;
  box-shadow: 2px 2px 5px 1px rgba(0,0,0,0.16);
}
.lateral__form {
  width: 60%;
  margin: 0 auto;
}
.lateral__links {
  text-align: center;
  margin: 1em 0;
}
.lateral__link-crearcuenta {
  color: #b60011;
  margin-bottom: 1em;
}
.lateral__link-olvidaste {
  color: #caa23e;
}
.lateral a {
  text-decoration: none;
}
.login__form input[type="text"],
.login__form input[type="password"],
.login__form input[type="email"],
.login__form input[type="number"] {
  border: 1px solid #e6e6e6;
  box-shadow: 2px 5px 6px rgba(0,0,0,0.1);
  font-size: 1em;
  border-radius: 10px;
  color: #b60011;
  padding: 0.6em;
  margin-bottom: 1em;
  width: 90%;
}
.btn {
  color: #fff;
  border-radius: 10px;
  background-color: #caa23e;
  width: 100%;
  border: 0;
  padding: 0.5em 0;
  margin: 1em 0;
  text-align: center;
}
.btn:hover {
  background-color: #deaa28;
}
.hero {
  width: 70%;
}
.hero__img {
  width: 100%;
  height: 100%;
}


    </style>
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
                    <img src="{{ asset('images/ico-tablero.png') }}" alt="" class="iconosmenu"><a href="./usuario.php">Tablero</a>
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
                    <img src="{{ asset('images/ico-configuracion-white.png') }}" alt="" class="iconosmenu"><a href="./configuraciones.php"  style="color:#ffffff">Configuraciones</a>
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
						<a href="cerrar-sesion.php" title="Cerrar sesion">
							<img src="{{ asset('images/logout.png') }}" alt="">
						</a>
					</div>
				</header>
			</section>
    </div>
</body>
</html>
