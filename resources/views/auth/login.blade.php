@extends('layouts.app')

@section('content')
<div class="wrap">
    <div class="lateralLogin">
        <header class="lateralLogin__header">
            <img src="{{ asset('images/logo.png') }}" alt="logo lambda">
            <div class="lateralLogin__wellcome">Bienvenido</div>
        </header>
        <div class="lateralLogin__form">
            <form class="login__form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <div class="form-group__ico">
                        <img src="{{ asset('images/ico-login-user.png') }}" alt="">
                    </div>
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email">
                    @error('email')
                        <span class="text-red-500 text-xs italic">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-group__ico">
                        <img src="{{ asset('images/ico-login-pass.png') }}" alt="">
                    </div>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password">
                    @error('password')
                        <span class="text-red-500 text-xs italic">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success" style="background:#CAA23E; color:#ffffff; border:0; border-radius:20px">Iniciar Sesión</button>
            </form>
        </div>
        <div class="lateralLogin__links">
            <a href="{{ route('register') }}" class="lateralLogin__link-crearcuenta">Crear cuenta</a></br>
            <a href="{{ route('password.request') }}" class="lateralLogin__link-olvidaste">{{ __('¿Olvidaste la contraseña?') }}</a>
        </div>

    </div>
    <div class="hero">
        <center><img src="{{ asset('images/hero.jpg') }}" class="hero__img"></center>
    </div>
</div>
@endsection
