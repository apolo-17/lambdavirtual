<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin lambda</title>
    <link href="{{ asset('css/all-admin.css') }}" rel="stylesheet">
</head>
<body>
<body>
		<div class="adminwrap">
			<div class="adminlateral">
				<header class="adminlateral__header">
					<img src="./images/logo.png" alt="logo lambda">
				</header>
				<div class="adminlateral__menu">
					<ul>
						<li>
							<div class="adminlateral__item">
								<img src="./images/ico-tablero.png" alt="" class="adminlateral__img"><a href="#">Examenes</a>
							</div>
						</li>
						<li>
							<div class="adminlateral__item">
								<img src="./images/ico-cursos.png" alt="" class="adminlateral__img"><a href="#">Mis Cursos</a>
							</div>
						</li>
						<li>
							<div class="adminlateral__item">
								<img src="./images/ico-chat.png" alt="" class="adminlateral__img"><a href="#">Chat</a>
							</div>
						</li>
						<li>
							<div class="adminlateral__item">
								<img src="./images/ico-anuncio.png" alt="" class="adminlateral__img"><a href="#">Anuncios</a>
							</div>
						</li>
						<li>
							<div class="adminlateral__item">
								<img src="./images/ico-foro.png" alt="" class="adminlateral__img"><a href="#">Foro</a>
							</div>
						</li>
						<li>
							<div class="adminlateral__item">
								<img src="./images/ico-configuracion.png" alt="" class="adminlateral__img"><a href="#">Configuraciones</a>
							</div>
						</li>
						<li>
							<div class="adminlateral__item">
								<img src="./images/ico-usuario.png" alt="" class="adminlateral__img"><a href="#">Usuarios</a>
							</div>
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
				</div>
				<div class="cardExamen-wrap">
					<div class="cardExamen">
						<img src="./images/premio.png" alt="" class="cardExamen__image">
						<h3 class="cardExamen__title">1er Concurso</h3>
						<p class="cardExamen__text">
							No tenemos disponible ningun<br>
							exámen
						</p>
						<div class="cardExamen__wrapbtn">
							<div class="cardExamen__btn">
								Crear Examen
							</div>
						</div>
					</div>
				</div>
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
