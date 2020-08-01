@extends('layouts.dashboard.app')

@section('content')
@if($exams->isEmpty())

@else
@foreach($exams as $exam)
<div class="cardExamen-wrap">
    <div class="cardExamen">
        <img src="{{ asset('images/premio.png') }}" alt="" class="cardExamen__image">
        <h3 class="cardExamen__title">1er Concurso</h3>
        <p class="cardExamen__text">
            Internacional de conocimiento en teoría Económica y Finanzas.<br>
        </p>
        <div class="cardExamen__wrapbtn">
            <div class="cardExamen__btn">
                <a href="{{ route('exam-student-init',[$exam->id]) }}">Ingresar al concurso</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif

@endsection
