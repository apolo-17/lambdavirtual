@extends('layouts.app')

@section('content')
<div class="recoverypass">
			<section class="recoverypass__wrap">
				<header class="recoverypass__logowrap">
					<img src="{{ asset('images/logo.png') }}" alt="logo">
				</header>
				<section class="recoverypass__container">
					<h1 class="recoverypass__title">{{ __('Recuperar contraseña') }}</h1>
					<p class="recoverypass__text">
						ingresa tu email y te enviaremos un enlace para que recuperes tu contraseña
					</p>
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif
					<form method="POST" action="{{ route('password.email') }}" class="recoverypass__form">
						@csrf
						<div>
							<div class="recoverypass__email">
								<div class="recoverypass__ico-email">
									<img src="{{ asset('images/ico-login-mail.png') }}" alt="">
								</div>
								<input id="email" type="email" class="recoverypass__input-email form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>						
						<button type="submit" class="recoverypass__btn">
							Recuperar
						</button>
					</form>
					<p>
						¿Ya tienes una cuenta? <a href="#" class="recoverypass__link">Iniciar Sesión</a>
					</p>
				</section>
			</section>
		</div>
		@endsection