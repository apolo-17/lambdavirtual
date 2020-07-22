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
                <th class="w-1/4 px-4 py-2">Descripcion</th>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">
                        Examen de concurso
                    </td>
                    <td class="border px-4 py-2">
                        26/07/2020 06:00 hrs
                    </td>
                    <td class="border px-4 py-2">
                        30/07/2020 00:00 hrs
                    </td>
                    <td class="border px-4 py-2">
                        60 mins
                    </td>
                    <td class="border px-4 py-2">
                        ES el primer examen para analisis de conocimientos
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
