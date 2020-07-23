@extends('layouts.dashboard.app')

@section('content')
<section>
    <p>Configuraciones</p>
    <h3 class="content__title">Registro de usuario</h3>
    <div class="content__formUsers" >
        <div class="contentFormUser__wrap">
            <div class="contentFormUser__item">
                <label for="name" class="contentFormUser__label">Nombre:</label><br />
                <input type="text" name="name" id="name" value="{{ $student->name }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="last_name" class="contentFormUser__label">Apellido:</label><br />
                <input type="text" name="last_name" id="name" value="{{ $student->last_name }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="email" class="contentFormUser__label">Email:</label><br />
                <input type="email" name="email" id="email" value="{{ $student->user->email }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="movil" class="contentFormUser__label">Celular:</label><br />
                <input type="number" name="phone_number" id="phone_number"  value="{{ $student->phone_number }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="paistitle">Pais</label><br />
                <input type="text" name="country_id" id="country_id"  value="{{ $student->country->name }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="departamento" class="formuser__label">Departamento:</label><br />
                <input type="text" name="department" id="departamento"  value="{{ $student->department }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="province" class="formuser__label">Provincia:</label><br />
                <input type="text" name="province" id="province"  value="{{ $student->province }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="district" class="formuser__label">Distrito:</label><br />
                <input type="text" name="district" id="district"  value="{{ $student->district }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="day" class="formuser__label">Fecha de nacimiento:</label><br />
                <input type="text" name="born_date" id="district"  value="{{ $student->born_date }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="gender" class="formuser__label">Genero:</label><br />
                <input type="text" name="gender" id="district"  value="{{ $student->gender }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="dni" class="formuser__label">DNI:</label><br />
                <input type="number" name="dni" id="dni"  value="{{ $student->dni }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="unititle">Universidad:</label><br />
                <input type="text" name="university_id" id="university_id"  value="{{ $student->university->name }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="ciclotitle">Ciclo:</label><br />
                <input type="text" name="school_cycle_id" id="school_cycle_id"  value="{{ $student->schoolCycle->name }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="gradotitle">Grado Academico:</label><br />
                <input type="text" name="academic_degree_id" id="academic_degree_id"  value="{{ $student->academicDegree->name }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="inglestitle">Nivel de inglés:</label><br />
                <input type="text" name="english_level_id" id="english_level_id"  value="{{ $student->englishLevel->level }}" readonly><br />
            </div>
            <div class="contentFormUser__item">
                <label for="jobtitle">Labora:</label><br />
                <input type="text" name="work" id="work"  value="{{ $student->work }}" readonly><br />
            </div>
            <br />	<br />
            <br />	<br />
        </div>
        <div class="btnwrap">
            <a href="{{ action('StudentProfileController@Edit') }}">
                <button type="submit" name="" value="Editar" class="btn-formUser">Editar</button>
            </a>
        </div>
    </div>
</section>
@endsection
