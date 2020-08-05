@extends('layouts.dashboardAdmin.app')

@section('content')
<div class="mt-6 w-full">
    <div class="">
        <div class="flex">
            <div class="w-1/3 p-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nombre:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="{{ $student->name }}" readonly>
            </div>
            <div class="w-1/3 p-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Apellidos:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="{{ $student->last_name }}" readonly>
            </div>
            <div class="w-1/3 p-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Edad:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="{{ $student->age }}" readonly>
            </div>
        </div>
        <div class="flex">
            <div class="w-1/3 p-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Telefono:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="{{ $student->phone_number }}" readonly>
            </div>
            <div class="w-1/3 p-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Email:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="{{ $student->user->email }}" readonly>
            </div>
            <div class="w-1/3 p-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Genero:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="{{ $student->genero }}" readonly>
            </div>
        </div>
        <div class="flex">
            <div class="w-1/3 p-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Universidad:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="{{ $student->university->name }}" readonly>
            </div>
            <div class="w-1/3 p-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Ciudad:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="{{ $student->country->name }}" readonly>
            </div>
            <div class="w-1/3 p-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Distrito:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="{{ $student->district }}" readonly>
            </div>
        </div>
    </div>
    <div class="mt-4 w-full">
        <div class="m-8 flex justify-center">
            <h2 class="text-2xl font-sans">Lista de examenes del alumno</h2>
        </div>

        <div class="flex justify-center">
            <table class="table-fixed w-full">
                <thead>
                    <th class="w-1/4 px-4 py-2 font-sans">Nombre del examen</th>
                    <th class="w-1/4 px-4 py-2 font-sans">Fecha que presento</th>
                    <th class="w-1/4 px-4 py-2 font-sans">Puntaje</th>
                    <th></th>

                </thead>
                <tbody>
                    @foreach($exams as $exam)
                    <tr>

                            <td class="border px-4 py-2">
                                {{ $exam->exam->name }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ $exam->created_at }}
                            </td>
                            <td class="border px-4 py-2">
                            {{ $exam->result }}
                            </td>
                            <td class="border px-4 py-2">
                                <a href="{{ action('StudentController@showExamProfileResult',[$exam->id]) }}">
                                    Ver examen
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

@endsection
