@extends('layouts.app')

@section('content')
<div class="wrap">
    <div class="lateralLogin">
        <header class="lateralLogin__header">
            <div class="lateralLogin__logo"><center>
                <img src="{{ asset('images/logo.png') }}" alt="logo lambda">
            </div>
            <div class="lateralLogin__wellcome">Crear cuenta</div>
        </header>
        <div class="lateralLogin__form">
            <form class="login__form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <div class="form-group-wrap">
                        <div class="form-group__ico">
                            <img src="{{ asset('images/ico-login-user.png') }}" alt="">
                        </div>
                        <input id="name" type="text" class="form-control leading-normal @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="Nombre">
                    </div>
                    @error('name')
                        <span class="text-red-500 text-xs italic">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-group-wrap">
                        <div class="form-group__ico">
                            <img src="{{ asset('images/ico-login-mail.png') }}" alt="">
                        </div>
                        <input id="email" type="email" class="form-control leading-normal @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    </div>
                    @error('email')
                        <span class="text-red-500 text-xs italic" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-group-wrap">
                        <div class="form-group__ico">
                            <img src="{{ asset('images/ico-login-pass.png') }}" alt="">
                        </div>
                        <input id="password" type="password" class="form-control leading-normal @error('password') is-invalid @enderror" name="password" required placeholder="Contraseña">
                    </div>
                    @error('password')
                        <span class="text-red-500 text-xs italic" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-group-wrap">
                        <div class="form-group__ico">
                            <img src="{{ asset('images/ico-login-pass.png') }}" alt="">
                        </div>
                        <input id="password-confirm" type="password" class="form-control leading-normal" name="password_confirmation" required placeholder="Confirmar contraseña">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    
                        <button type="submit" class="btn btn-success" style="background:#CAA23E; color:#ffffff; border:0; border-radius:20px">
                            {{ __('Registrarte') }}
                        </button>
                    
                </div>
            </form>
            <div class="lateralLogin__links">
                <a href="{{ route('login') }}" class="lateralLogin__link-crearcuenta">Iniciar Sesión</a></br>
                <a href="{{ route('password.request') }}" class="lateralLogin__link-olvidaste">{{ __('¿Olvidaste la contraseña?') }}</a>
			</div>
        </div>
    </div>
    <div class="hero">
        <img class="w-full min-h-screen" src="{{ asset('images/hero.jpg') }}" alt="">
    </div>
</div>
@endsection
