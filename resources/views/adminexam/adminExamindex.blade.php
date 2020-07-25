@extends('layouts.dashboard.app')

@section('content')
<div>
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
                <th class="w-auto">Activar</th>

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
                    <td class="border px-4 py-2">
                        <deploy-exam
                            :exam_id="{{ $exam->id }}"
                            :active="{{ $exam->active }}"
                        ></deploy-exam>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
