@extends('layouts.app')

@section('content')
<div class="flex">
    <div class="w-1/3 flex items-center justify-center">
        <div class="flex grid">
            <div class="grid-flow-col flex-col mb-20">
                <div class="flex justify-center">
                    <img src="{{ asset('images/logo.png') }}" alt="logo lambda">
                </div>
                
                <div class="text-center rounded-md bg-red-700 bg-opacity-700 font-bold shadow-2xl text-white h-6">Bienvenido</div>
            </div>
            <div class="grid-flow-col">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4 shadow-md">
                        <input id="email" type="email" class="bg-white border border-gray-400 focus:border-yellow-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email">

                        @error('email')
                            <span class="text-red-500 text-xs italic">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    

                    
                    <div class="mb-4 shadow-md">
                        <input id="password" type="password" class="bg-white border border-gray-400 focus:border-yellow-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal @error('password') is-invalid @enderror" name="password" required placeholder="Password">

                        @error('password')
                            <span class="text-red-500 text-xs italic">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col">
                        <div class="flex justify-center my-4">
                            <button type="submit" class="bg-yellow-600 bg-opacity-75 text-gray-100 w-full rounded">
                                {{ __('Iniciar sesion') }}
                            </button>
                        </div>
                        <div class="flex justify-center">
                            <a class="text-red-700 text-opacity-100" href="{{ route('register') }}">{{ __('Crear cuenta') }}</a>
                        </div>
                        <div class="flex justify-center">
                            @if (Route::has('password.request'))
                                <a class="text-yellow-600 text-opacity-75 btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="w-3/4">
        <img class="w-full min-h-screen" src="{{ asset('images/hero.jpg') }}" alt="">
    </div>
</div>
@endsection
