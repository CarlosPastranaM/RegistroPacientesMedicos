
@csrf

<div class="form-row">

    <div class="form-group col-md-12">
        <label>
            <h4 class="card-title"> <b> Información del médico tratante </b> </h4>
        </label>
    </div>
    <br>


    <div class="form-group col-md-4">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $medico->nombre) }}">
    </div>

    <div class="form-group col-md-4">
        <label for="apellido_p">Apellido paterno</label>
        <input type="text" class="form-control" name="apellido_p" id="apellido_p" value="{{ old('apellido_p', $medico->apellido_p) }}">
    </div>

    <div class="form-group col-md-4">
        <label for="apellido_m">Apellido materno</label>
        <input type="text" class="form-control" name="apellido_m" id="apellido_m" value="{{ old('apellido_m', $medico->apellido_m) }}">
    </div>
</div>

<div class="form-row">

    <div class="form-group col-md-4">
        <label for="cedula">Cédula profesional</label>
        <input type="text" class="form-control " name="cedula" id="cedula" value="{{ old('cedula', $medico->cedula) }}">
    </div>

    <div class="form-group col-md-4">
        <label for="especialidad">Especialidad</label>
        <input type="text" class="form-control " name="especialidad" id="especialidad" value="{{ old('especialidad', $medico->especialidad) }}">
    </div>

</div>

<input type="submit" value="Guardar médico" class="btn btn-success">
