@extends('layouts.dashboardAdmin.app')

@section('content')
@if($exams->isEmpty())


<div class="cardExamen">
    <img src="{{ asset('images/premio.png') }}" alt="" class="cardExamen__image">
    <h3 class="cardExamen__title">1er Concurso</h3>
    <p class="cardExamen__text">
        No tenemos disponible ningun<br>
        exámen
    </p>
    <div class="cardExamen__wrapbtn">
        <div class="cardExamen__btn">
            <a href="{{ action('ExamsController@create') }}">Crear Examen</a>
        </div>
    </div>
</div>

@else


<div style="width:100%">
<br><br><br>
    Exámenes<br><br>
    <div style="text-align:right">
        <a href="{{ action('ExamsController@create') }}">
            <button class="cardExamen__btn">Crear Exámen</button>
        </a>
    </div>
    <div>
        <br><br>
        <div class="cardQuestion-wrap">
            @foreach($exams as $exam)
            <article class="cardQuestion">
                <div class="cardQuestion__divleft">
                    <div class="cardQuestion__title">{{ $exam->name }}</div>
                    <div class="cardQuestion__pregunta">
                    Inicio: {{ $exam->deploy_exam }}
                    </div>
                    <div class="cardQuestion__respuesta">
                    Final: {{ $exam->finish_exam }}
                    </div>
                    <div>
                    Duracion: {{ $exam->duration }}
                    </div>
                    <deploy-exam
                            :exam_id="{{ $exam->id }}"
                            :active="{{ $exam->active }}"
                        ></deploy-exam>
                    <div>
                    <a href="{{ action('ExamsController@showExamAplication',[$exam->id]) }}">Ver examen</a>
                    </div>

                </div>
                <div class="cardQuestion__divright">
                    <a href="{{ route('exam-edit', $exam->id ) }}"><img src="./images/edit.png" alt=""></a>
                    <delete-exam :exam_id="{{ $exam->id }}" ></delete-exam><br>
                </div>
            </article>
            @endforeach
        </div>

    </div>
</div>

@endif


@endsection
