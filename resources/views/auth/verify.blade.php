@extends('layouts.app')

@section('content')
<!-- <div class="flex h-screen"> -->
    <!-- <div class="flex"> -->
        <!-- <div class="col-md-8"> -->
            <div class="flex flex-col h-screen items-center justify-center">
                <div class="flex justify-center">
                    <div class="">{{ __('!Felicidades¡') }}</div>
                </div>
                

                <div class="flex justify-center">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Tu cuenta ha sido creada.') }}
                        </div>
                    @endif

                    {{ __('Verifica tu email para completar tu registro') }}
                    <p>{{ __('Si todavia no recibes un email de confirmacion') }}</p>
                    
                </div>
                <div class="flex justify-center">
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        {{ __('Haga clic aquí para solicitar otro.') }}
                        </button>
                    </form>
                </div>
            </div>
        <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->
@endsection
