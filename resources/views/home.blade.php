@extends('layouts.dashboard.app')

@section('content')
<div class="container" style="height:100vh;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    {{--  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  --}}
                    {{--  <div>
                        @foreach($exams as $exam)
                            <div>
                                <a href="{{ route('exam-student-init',['$exam->id']) }}">
                                    <button class="bg-red-700  hover:bg-red-500 text-white font-bold py-2 px-4 rounded-full">
                                        Presentar examen
                                    </button>
                                </a>
                            </div>
                        @endforeach
                    </div>  --}}
                    <div class="cardExamen-wrap">
                        <div class="cardExamen">
                            <img src="./images/premio.png" alt="" class="cardExamen__image">
                            <h3 class="cardExamen__title">1er Concurso</h3>
                            <p class="cardExamen__text">
                                Internacional de conocimiento en teoría Económica y Finanzas.<br>
                            </p>
                            <div class="cardExamen__wrapbtn">
                                <div class="cardExamen__btn">
                                    Ingresar al concurso
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
