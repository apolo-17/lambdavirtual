@extends('layouts.app')

@section('content')
<div class="flex">
    <div class="w-1/3 flex items-center justify-center">
        <div class="flex grid">
            <div class="grid-flow-col flex-col mb-20">
                <div class="flex justify-center">
                    <img src="{{ asset('images/logo.png') }}" alt="logo lambda">
                </div>

                <div class="text-center rounded-md bg-red-700 bg-opacity-700 font-bold shadow-2xl text-white h-6">Crear cuenta</div>
            </div>
            <div class="grid-flow-col">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4 shadow-md">
                        <input id="name" type="text" class="bg-white border border-gray-400 focus:border-yellow-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="Nombre">

                        @error('name')
                            <span class="text-red-500 text-xs italic">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4 shadow-md">
                        <input id="email" type="email" class="bg-white border border-gray-400 focus:border-yellow-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                        @error('email')
                            <span class="text-red-500 text-xs italic" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4 shadow-md">
                        <input id="password" type="password" class="g-white border border-gray-400 focus:border-yellow-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal @error('password') is-invalid @enderror" name="password" required placeholder="Contraseña">

                        @error('password')
                            <span class="text-red-500 text-xs italic" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4 shadow-md">
                        <input id="password-confirm" type="password" class="g-white border border-gray-400 focus:border-yellow-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" name="password_confirmation" required placeholder="Confirmar contraseña">
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="bg-yellow-600 bg-opacity-75 text-gray-100 w-full rounded">
                                {{ __('Registrarte') }}
                            </button>
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
