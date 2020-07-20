@extends('layouts.dashboard.app')

@section('content')
<section>
    <p>Configuraciones</p>
    <h3 class="content__title">Registro de usuario</h3>
    <form class="content__formUsers" action="{{}}" method="post">
        <input type='hidden' name='date' value="">
        <div class="contentFormUser__wrap">
            <div class="contentFormUser__item">
                <label for="name" class="contentFormUser__label">Nombre:</label><br />
                <input type="text" name="name" id="name" value="" required maxlength="20"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="name" class="contentFormUser__label">Apellido:</label><br />
                <input type="text" name="lastname" id="name" value="" required maxlength="20"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="email" class="contentFormUser__label">Email:</label><br />
                <input type="email" name="email" id="email" value="" required maxlength="50"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="movil" class="contentFormUser__label">Celular:</label><br />
                <input type="number" name="movil" id="movil"  value="" required maxlength="9"><br />
            </div>
            <div class="contentFormUser__item">
                <label for="paistitle">Pais</label><br />
                <select name="country" class="listaform">
                <option value="">[Cambiar por]</option>

                </select>
            </div>
            <div class="contentFormUser__item">
                <label for="departamento" class="formuser__label">Departamento:</label><br />
                <input type="text" name="departamento" id="departamento"  value="" required><br />
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
                <input type="text" name="gender" id="gender"  value="" required maxlength="9"><br />				
            </div>
            <div class="contentFormUser__item">
                <label for="dni" class="formuser__label">DNI:</label><br />
                <input type="number" name="dni" id="dni"  value="" maxlength="8" required><br />				
            </div>
            <div class="contentFormUser__item">
                <label for="unititle">Universidad:</label><br />
                    <select name="university" class="listaform">
                    <option value="">[Cambiar por]</option>

                    </select>
            </div>
            <div class="contentFormUser__item">
                <label for="ciclotitle">Ciclo:</label><br />
                    <select name="ciclo" class="listaform">
                    <option value="">[Cambiar por]</option>

                    </select>
            </div>
            <div class="contentFormUser__item">
                <label for="gradotitle">Grado Academico:</label><br />
                    <select name="degree" class="listaform">
                    <option value="">[Cambiar por]</option>

                    </select>
            </div>
            <div class="contentFormUser__item">
                <label for="inglestitle">Nivel de inglés:</label><br />
                    <select name="english" class="listaform">
                    <option value="">[Cambiar por]</option>

                    </select>
            </div>
            <div class="contentFormUser__item">
                <label for="jobtitle">Labora:</label><br />
                    <select name="job" class="listaform">
                    <option value="">[Cambiar por]</option>

                    </select>
            </div>
            <label><input type="radio" name="terms" value="acepto Terminos" required>Acepto las condiciones de tratamiento para mis datos personales. <a href="#" target="_blank">(Ver términos)</a></label>
            <br />	<br />
            <br />	<br />
            <input type="hidden" name="idunico" value="">
            <input type="submit" name="" value="Guardar" class="btn-formUser">
            
        </div>
    </form>
</section>
@endsection