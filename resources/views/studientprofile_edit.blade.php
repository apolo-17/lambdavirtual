@extends('layouts.dashboard.app')

@section('content')
<section>
    <p>Configuraciones</p>
    <h3 class="content__title">Registro de usuario</h3>
    <form class="content__formUsers" action="{{ action('StudentProfileController@store') }}" method="POST">
        @csrf
        <div class="contentFormUser__wrap">
            <div class="contentFormUser__item">
                <label for="name" class="contentFormUser__label">Nombre:</label><br />
                <input type="text" name="name" id="name" value="" required maxlength="20"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="last_name" class="contentFormUser__label">Apellido:</label><br />
                <input type="text" name="last_name" id="name" value="" required maxlength="20"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="email" class="contentFormUser__label">Email:</label><br />
                <input type="email" name="email" id="email" value="" required maxlength="50"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="movil" class="contentFormUser__label">Celular:</label><br />
                <input type="number" name="phone_number" id="phone_number"  value="" required maxlength="9"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="paistitle">Pais</label><br />
                <select name="country_id" class="listaform">
                <option value="">Seleccione un pais</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach

                </select>
            </div>
            <div class="contentFormUser__item">
                <label for="departamento" class="formuser__label">Departamento:</label><br />
                <input type="text" name="department" id="departamento"  value="" required><br />
            </div>
            <div class="contentFormUser__item">
                <label for="province" class="formuser__label">Provincia:</label><br />
                <input type="text" name="province" id="province"  value="" maxlength="20"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="district" class="formuser__label">Distrito:</label><br />
                <input type="text" name="district" id="district"  value="" maxlength="20"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="day" class="formuser__label">Fecha de nacimiento:</label><br />
                <input type="date" name="born_date" id="district"  value="" ><br />
            </div>
            <div class="contentFormUser__item">
                <label for="gender" class="formuser__label">Genero:</label><br />
                <select name="gender" class="listaform">
                    <option value="">Selecciona un genero</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>
            <div class="contentFormUser__item">
                <label for="dni" class="formuser__label">DNI:</label><br />
                <input type="number" name="dni" id="dni"  value="" maxlength="8" required><br />
            </div>
            <div class="contentFormUser__item">
                <label for="unititle">Universidad:</label><br />
                    <select name="university_id" class="listaform">
                        <option value="">Selecciona una opción</option>
                        @foreach ($universities as $university)
                            <option value="{{ $university->id }}">{{ $university->name }}</option>
                        @endforeach

                    </select>
            </div>
            <div class="contentFormUser__item">
                <label for="ciclotitle">Ciclo:</label><br />
                    <select name="school_cycle_id" class="listaform">
                        <option value="">Seleccione una opción</option>
                        @foreach ($school_ciclies as $school_cycle)
                            <option value="{{ $school_cycle->id }}">{{ $school_cycle->name }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="contentFormUser__item">
                <label for="gradotitle">Grado Academico:</label><br />
                    <select name="academic_degree_id" class="listaform">
                        <option value="">Selecciona una opción</option>
                        @foreach ($academic_degrees as $academic_degree)
                            <option value="{{ $academic_degree->id }}">{{ $academic_degree->name }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="contentFormUser__item">
                <label for="inglestitle">Nivel de inglés:</label><br />
                    <select name="english_level_id" class="listaform">
                        <option value="">Selecciona una opción</option>
                        @foreach ($english_levels as $english_level)
                            <option value="{{ $english_level->id }}">{{ $english_level->level }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="contentFormUser__item">
                <label for="jobtitle">Labora:</label><br />
                    <select name="work" class="listaform">
                        <option value="">Selecciona una opción</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
            </div>
            <label><input type="radio" name="terms" value="true" required>Acepto las condiciones de tratamiento para mis datos personales. <a href="#" target="_blank">(Ver términos)</a></label>
            <br />	<br />
            <br />	<br />

            <button type="submit" name="" value="Guardar" class="btn-formUser">Guardar</button>
        </div>
    </form>
</section>
@endsection
