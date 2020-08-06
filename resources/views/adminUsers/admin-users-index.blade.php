@extends('layouts.dashboardAdmin.app')

@section('content')

<div class="mt-6">
    <div class="adminReport">
        <table class="adminReport__table">
            <thead class="adminReport__tablehead">
                <td>Nombre</td>
                <td>Email</td>
                <td>Telefono</td>
                <td>Pais</td>
                <td>Opciones</td>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td class="adminReport__table-td"><img src="{{ asset('images/avatar2.png') }}" >
                        {{ $student->full_name }}
                    </td>
                    <td class="adminReport__table-td">
                        {{ $student->user->email }}
                    </td>
                    <td class="adminReport__table-td">
                        {{ $student->phone_number }}
                    </td>
                    <td class="adminReport__table-td">
                        {{ $student->country->name }}
                    </td>
                    <td class="adminReport__table-td">
                        <a href="{{ action('StudentController@show',[$student->id]) }}" class="adminReport__btn">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
