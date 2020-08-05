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

<div class="mt-6">
    <div class="flex justify-end">
        <a href="{{ action('ExamsController@create') }}">
            <button class="bg-red-700  hover:bg-red-500 text-white font-bold py-2 px-4 rounded-full">Crear Examen</button>
        </a>
    </div>
    <div>
        <table class="table-fixed">
            <thead>
                <th class="w-1/4 px-4 py-2">Nombre del examen</th>
                <th class="w-1/4 px-4 py-2">Fecha de lanzamiento</th>
                <th class="w-1/4 px-4 py-2">Fecha final</th>
                <th class="w-1/4 px-4 py-2">Duracion</th>
                <th class="w-auto"></th>
                <th class="w-auto">Activar</th>
                <th class="w-auto"></th>

            </thead>
            <tbody>
                @foreach($exams as $exam)
                <tr>
                    <td class="border px-4 py-2">
                        {{ $exam->name }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ $exam->deploy_exam }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ $exam->finish_exam }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ $exam->duration }}
                    </td>
                    <td class="border px-4 py-2 adminexamen__action">
                        <div class="adminexamen__action-edit">
                            <a href="{{ route('exam-edit', $exam->id ) }}">
                                <img src="{{ asset('images/edit.png') }}" alt="editar">
                            </a>
                        </div>
                        <div class="adminexamen__action-remove">
                            <delete-exam :exam_id="{{ $exam->id }}" ></delete-exam>
                        </div>
                        ...
                    </td>
                    <td class="border px-4 py-2">
                        <deploy-exam
                            :exam_id="{{ $exam->id }}"
                            :active="{{ $exam->active }}"
                        ></deploy-exam>
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ action('ExamStudentController@downloadExam',[$exam->id]) }}">
                            Descargar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endif


@endsection
