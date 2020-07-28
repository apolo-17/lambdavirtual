@extends('layouts.dashboard.app')

@section('content')
<div class="container" style="height:100vh;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{--  <a href="{{ route('exam-student-init',['2']) }}">
                        <button class="bg-red-700  hover:bg-red-500 text-white font-bold py-2 px-4 rounded-full">
                            Presentar examen
                        </button>  --}}
                        {{--  @if(@Auth::user()->hasRole('amin'))
                            <h2>Eres un cliente</h2>
                        @endif  --}}
                    {{--  </a>  --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
