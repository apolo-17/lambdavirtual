@extends('layouts.dashboardAdmin.app')

@section('content')

<div class="mt-6">
    <div>
        <table class="table-fixed">
            <thead>
                <th class="w-1/4 px-4 py-2">Nombre</th>
                <th class="w-1/4 px-4 py-2">Email</th>
                <th class="w-1/4 px-4 py-2">Telefono</th>
                <th class="w-1/4 px-4 py-2">Universidad</th>
                <th class="w-1/4 px-4 py-2">Opciones</th>

            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td class="border px-4 py-2">
                        {{ $student->full_name }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ $student->user->email }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ $student->phone_number }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ $student->university->name }}
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ action('StudentController@show',[$student->id]) }}">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
