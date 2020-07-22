@extends('layouts.dashboard.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <button class="bg-red-700  hover:bg-red-500 text-white font-bold py-2 px-4 rounded-full">
                        Presentar examen
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
