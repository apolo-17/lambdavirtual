@extends('layouts.dashboard.app')

@section('content')
<section>
    <p>Configuraciones</p>
    <h3 class="content__title">Registro de usuario</h3>
    <form class="content__formUsers" action="{{ action('StudentProfileController@update') }}" method="POST">
        @csrf
        <div class="contentFormUser__wrap">
            <div class="contentFormUser__item">
                <label for="name" class="contentFormUser__label">Nombre:</label><br />
                <input type="text" name="name" id="name" value="{{ old('name',$student->name) }}" required maxlength="20"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="last_name" class="contentFormUser__label">Apellido:</label><br />
                <input type="text" name="last_name" id="name" value="{{ old('last_name',$student->last_name) }}" required maxlength="20"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="email" class="contentFormUser__label">Email:</label><br />
                <input type="email" name="email" id="email" value="{{ old('email',auth()->user()->email) }}" required maxlength="50"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="movil" class="contentFormUser__label">Celular:</label><br />
                <input type="number" name="phone_number" id="phone_number"  value="{{ old('phone_number',$student->phone_number) }}" required maxlength="9"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="paistitle">Pais</label><br />
                <select name="country_id" class="listaform">
                <option value="{{ $student->country->id }}">{{ $student->country->name }}</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach

                </select>
            </div>
            <div class="contentFormUser__item">
                <label for="departamento" class="formuser__label">Departamento:</label><br />
                <input type="text" name="department" id="departamento"  value="{{ $student->department }}" required><br />
            </div>
            <div class="contentFormUser__item">
                <label for="province" class="formuser__label">Provincia:</label><br />
                <input type="text" name="province" id="province"  value="{{ $student->province }}" maxlength="20"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="district" class="formuser__label">Distrito:</label><br />
                <input type="text" name="district" id="district"  value="{{ $student->district }}" maxlength="20"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="day" class="formuser__label">Fecha de nacimiento:</label><br />
                <input type="date" name="born_date" id="born_date"  value="{{ $student->born_date }}" ><br />
            </div>
            <div class="contentFormUser__item">
                <label for="gender" class="formuser__label">Genero:</label><br />
                <select name="gender" class="listaform">
                    @if($student->gender == 'M')
                        <option value="{{ $student->gender }}">Masculino</option>
                    @else
                        <option value="{{ $student->gender }}">Femenino</option>
                    @endif
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>
            <div class="contentFormUser__item">
                <label for="dni" class="formuser__label">DNI:</label><br />
                <input type="number" name="dni" id="dni"  value="{{ $student->dni }}" maxlength="8" required><br />
            </div>
            <div class="contentFormUser__item">
                <label for="unititle">Universidad:</label><br />
                    <select name="university_id" class="listaform">
                        <option value="{{ $student->university->id }}">{{ $student->university->name }}</option>
                        @foreach ($universities as $university)
                            <option value="{{ $university->id }}">{{ $university->name }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="contentFormUser__item">
                <label for="ciclotitle">Ciclo:</label><br />
                    <select name="school_cycle_id" class="listaform">
                        <option value="{{ $student->schoolCycle->id }}">{{ $student->schoolCycle->name }}</option>
                        @foreach ($school_ciclies as $school_cycle)
                            <option value="{{ $school_cycle->id }}">{{ $school_cycle->name }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="contentFormUser__item">
                <label for="gradotitle">Grado Academico:</label><br />
                    <select name="academic_degree_id" class="listaform">
                        <option value="{{ $student->academicDegree->id }}">{{ $student->academicDegree->name }}</option>
                        @foreach ($academic_degrees as $academic_degree)
                            <option value="{{ $academic_degree->id }}">{{ $academic_degree->name }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="contentFormUser__item">
                <label for="inglestitle">Nivel de inglés:</label><br />
                    <select name="english_level_id" class="listaform">
                        <option value="{{ $student->englishLevel->id }}">{{ $student->englishLevel->level }}</option>
                        @foreach ($english_levels as $english_level)
                            <option value="{{ $english_level->id }}">{{ $english_level->level }}</option>
                        @endforeach
                    </select>
            </div>
            <br />	<br />
            <br />	<br />
        </div>
        <div class="btnwrap">
            <button type="submit" name="" value="Guardar" class="btn-formUser">Actualizar</button>
        </div>
    </form>
</section>
@endsection
