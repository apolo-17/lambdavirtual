@extends('layouts.app')

@section('content')
<div class="wrap">
    <div class="lateralLogin">
        <header class="lateralLogin__header">
            <img src="{{ asset('images/logo.png') }}" alt="logo lambda">
            <div class="lateralLogin__wellcome">Bienvenido</div>
        </header>
        <div class="lateralLogin__form">
            <form class="login__form" id="loginForm" action="validarCode.php" method="POST" role="form">
                <div class="form-group">
                    <div class="form-group__ico">
                        <img src="{{ asset('images/ico-login-user.png') }}" alt="">
                    </div>
                    <input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="Email">
                </div>

                <div class="form-group">
                    <div class="form-group__ico">
                        <img src="{{ asset('images/ico-login-pass.png') }}" alt="">
                    </div>
                <input type="password" name="txtPassword" class="form-control" required id="password" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn btn-success" style="background:#CAA23E; color:#ffffff; border:0; border-radius:20px">Iniciar Sesión</button>
        </form>
        </div>
        <div class="lateralLogin__links">
            <a href="./signin.php" class="lateralLogin__link-crearcuenta">Crear cuenta</a></br>
            <a href="" class="lateralLogin__link-olvidaste">¿Olvidaste la contraseña?</a>
        </div>

    </div>
    <div class="hero">
        <center><img src="{{ asset('images/hero.jpg') }}" class="hero__img"></center>
    </div>
</div>
@endsection
