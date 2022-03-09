
@extends('dashboard.master')

@section('content')


<form action="{{ route("paciente.store") }}" method="post">
        @csrf
        <div class="form-row">

            <div class="form-group col-md-12">
                <label>
                    <h4 class="card-title"> <b> Información general </b> </h4>
                </label>
            </div>
            <br>

            <div class="form-group col-md-4">
                <label for="nombre">Nombre</label>
                <input disabled type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $paciente->nombre) }}">
            </div>
        
            <div class="form-group col-md-4">
                <label for="apellido_p">Apellido paterno</label>
                <input disabled type="text" class="form-control" name="apellido_p" id="apellido_p" value="{{ old('apellido_p', $paciente->apellido_p) }}">
            </div>
        
            <div class="form-group col-md-4">
                <label for="apellido_m">Apellido materno</label>
                <input disabled type="text" class="form-control" name="apellido_m" id="apellido_m" value="{{ old('apellido_m', $paciente->apellido_m) }}">
            </div>
        
            <div class="form-group col-md-2">
                <label for="edad">Edad</label>
                <input disabled type="text" class="form-control " name="edad" id="edad" value="{{ old('edad', $paciente->edad) }}">
            </div>
        </div>
        <div class="form-row">
        
            <div class="form-group col-md-2">
                <label for="codigo_postal">Código postal</label>
                <input disabled type="text" class="form-control " name="codigo_postal" id="codigo_postal" value="{{ old('codigo_postal', $paciente->codigo_postal) }}">
            </div>
        
            <div class="form-group col-md-5">
                <label for="estado">Estado</label>
                <input disabled type="text" class="form-control " name="estado" id="estado" value="{{ old('estado', $paciente->estado) }}">
            </div>
        
            <div class="form-group col-md-5">
                <label for="ciudad">Ciudad</label>
                <input disabled type="text" class="form-control " name="ciudad" id="ciudad" value="{{ old('ciudad', $paciente->ciudad) }}">
            </div>
        
            <div class="form-group col-md-4">
                <label for="delegacion">Delegación</label>
                <input disabled type="text" class="form-control " name="delegacion" id="delegacion" value="{{ old('delegacion', $paciente->delegacion) }}">
            </div>
        
            <div class="form-group">
                <label for="colonia">Colonia</label>
                <input disabled type="text" class="form-control " name="colonia" id="colonia" value="{{ old('colonia', $paciente->colonia) }}">
            </div>
        </div>
        <div class="form-row">

            <div class="form-group col-md-12">
                <label>
                    <h4 class="card-title"><b> Historia clínica </b> </h4>
                </label>
            </div>
            <br>
        
            <div class="form-group col-md-5">
                <label for="padecimiento ">Padecimiento</label>
                <input disabled type="text" class="form-control " name="padecimiento" id="padecimiento" value="{{ old('padecimiento', $paciente->padecimiento) }}">
            </div>
        
            <div class="form-group col-md-4">
                <label for="medicamento">Medicamento</label>
                <input disabled type="text" class="form-control " name="medicamento" id="medicamento" value="{{ old('medicamento', $paciente->medicamento) }}">
            </div>
        
            <div class="form-group col-md-3">
                <label for="fecha_inicio">Fecha de inicio del tratamiento</label>
                <input disabled type="text" class="form-control " name="fecha_inicio" id="fecha_inicio" value="{{ old('fecha_inicio', $paciente->fecha_inicio) }}">
            </div>
        
            <div class="form-group col-md-5">
                <label for="medico_tratante">Médico tratante</label>
                <input disabled type="text" class="form-control " name="medico_id" id="medico_id" value="{{ old('medico_id', $paciente->medico_id) }}">
            </div>
        
        </div>
        

    </form>
   
@endsection


