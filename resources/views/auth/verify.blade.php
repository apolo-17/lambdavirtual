@extends('layouts.app')

@section('content')
<!-- <div class="flex h-screen"> -->
    <!-- <div class="flex"> -->
        <!-- <div class="col-md-8"> -->
            <div class="exitoCuenta">
                <div class="exitoCuenta__wrap">
                    <div class="exitoCuenta__header">
                        <h1>{{ __('¡Felicidades') }} {{ Auth::user()->name }}!</h1>

                        @if (session('resent'))

                        @endif
                        <h2>{{ __('Tu cuenta ha sido creada.') }}</h2>
                    </div>

                    <div class="exitoCuenta__text">
                        <p class="exitoCuenta__text-top">
                            {{ __('Verifica tu email ') }} {{ Auth::user()->email }}
                        </p>
                            {{ __('Para completar tu registro') }}
                        </p>
                        <p>
                        {{ __('Si todavia no recibes un email de confirmacion') }}

                        </p>
                    </div>
                    
                    <div class="exitoCuenta__action">
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="exitoCuenta__btn">
                            {{ __('Haga clic aquí para solicitar otro.') }}
                            </button>
                        </form>
                    </div>
                </div
            </div>
        <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->
@endsection
