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
                {{--  <th class="w-auto"></th>
                <th class="w-auto">Activar</th>  --}}

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
                    {{--  <td class="border px-4 py-2 adminexamen__action">
                        <div class="adminexamen__action-edit">
                            <a href="{{ route('exam-edit', $student->id ) }}">
                                <img src="{{ asset('images/edit.png') }}" alt="editar">
                            </a>
                        </div>
                        <div class="adminexamen__action-remove">
                            <delete-exam :exam_id="{{ $student->id }}" ></delete-exam>
                        </div>
                        ...
                    </td>
                    <td class="border px-4 py-2">
                        <deploy-exam
                            :exam_id="{{ $student->id }}"
                            :active="{{ $student->active }}"
                        ></deploy-exam>
                    </td>  --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
