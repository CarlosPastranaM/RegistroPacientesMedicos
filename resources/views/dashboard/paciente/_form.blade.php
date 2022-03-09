@csrf

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
function onSuccess(data, status)
{
let dropdown = $('#selectColonia');
dropdown.empty();
dropdown.prop('selectedIndex', 0);

jQuery(data).each(function(i, item){	
    dropdown.append($('<option></option>').attr('value', item.response.asentamiento).text(item.response.asentamiento));
    document.getElementById('estado').value=item.response.estado;
    document.getElementById('ciudad').value=item.response.ciudad;
    document.getElementById('delegacion').value=item.response.municipio;
})
}
function onError(data, status)
{
alert('error code:  ');
// handle an error
}
$(document).ready(function() {
	$("#submit").click(function(){
		var cpValue = document.getElementById('cp1').value;
        var formData = $("#callAjaxForm").serialize();
		$.ajax({
		type: "POST",
		url: "http://api-sepomex.hckdrk.mx/query/info_cp/"+cpValue,
		cache: false,
		data: formData,
		success: onSuccess,
		error: onError
		});
	return false;
	});
});
</script>

<form  class="form-group col-md-3" method="POST" id="callAjaxForm">


<div class="form-row">
    
    <div class="form-group col-md-12">
        <label>
            <h4 class="card-title"> <b> Información general </b> </h4>
        </label>
    </div>
    <br>

    <div class="form-group col-md-4">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $paciente->nombre) }}">
    </div>

    <div class="form-group col-md-4">
        <label for="apellido_p">Apellido paterno</label>
        <input type="text" class="form-control" name="apellido_p" id="apellido_p" value="{{ old('apellido_p', $paciente->apellido_p) }}">
    </div>

    <div class="form-group col-md-4">
        <label for="apellido_m">Apellido materno</label>
        <input type="text" class="form-control" name="apellido_m" id="apellido_m" value="{{ old('apellido_m', $paciente->apellido_m) }}">
    </div>

    <div class="form-group col-md-2">
        <label for="edad">Edad</label>
        <input type="text" class="form-control " name="edad" id="edad" value="{{ old('edad', $paciente->edad) }}">
    </div>
</div>
<div class="form-row">

    <div class="form-group col-md-2">
        <label for="cp">Código postal</label>
        <input type="text" maxlength="5" class="form-control " name="codigo_postal" id="cp1" value="" pattern="[0-9]{5}">
		<button class="btn btn-info" id="submit" type="submit">Buscar</button>
		
    </div>
	
    
    <div class="form-group col-md-3">
        <label for="colonia">Colonia</label>
        <select name="colonia" class="dropdown-item" id="selectColonia">
            <option value="0">Seleccione una colonia</option>
        </select>       
    </div>
    

    <div class="form-group col-md-3">
        <label for="estado">Estado</label>
        <input type="text" name="estado" class="form-control" id="estado" value="{{ old('estado', $paciente->estado) }}">
        </select>   
    </div>

    <div class="form-group col-md-3">
        <label for="ciudad">Ciudad</label>
        <input type="text" class="form-control " name="ciudad" id="ciudad" value="{{ old('ciudad', $paciente->ciudad) }}">
    </div>

    <div class="form-group col-md-3">
        <label for="delegacion">Delegación/Alcaldía/Municipio</label>
        <input type="text" class="form-control " name="delegacion" id="delegacion" value="{{ old('delegacion', $paciente->delegacion) }}">
    </div>

</div>

<br>
<div class="form-row">
    
    <div class="form-group col-md-12">
        <label>
            <h4 class="card-title"><b> Historia clínica </b> </h4>
        </label>
    </div>
    <br>

    <div class="form-group col-md-5">
        <label for="padecimiento ">Padecimiento</label>
        <input type="text" class="form-control " name="padecimiento" id="padecimiento" value="{{ old('padecimiento', $paciente->padecimiento) }}">
    </div>

    <div class="form-group col-md-4">
        <label for="medicamento">Medicamento</label>
        <input type="text" class="form-control " name="medicamento" id="medicamento" value="{{ old('medicamento', $paciente->medicamento) }}">
    </div>

    <div class="form-group col-md-3">
        <label for="fecha_inicio">Fecha de inicio del tratamiento</label>
        <input type="text" class="form-control " name="fecha_inicio" id="fecha_inicio" value="{{ old('fecha_inicio', $paciente->fecha_inicio) }}">
    </div>
    @if($medicos != null)
        
    
        <div class="form-group col-md-3">
            <label for="medico_id">Seleccionar médico</label>
            <select name="medico_id" class="dropdown-item">
                <option value="">Seleccione un médico</option>
                @foreach ($medicos as $medico)
                    <option value="{{ $medico->id }}">{{$medico->nombre.' '.$medico->apellido_p.' '.$medico->apellido_m}}</option> 
                @endforeach
                    
            </select>
            
        </div>        
    @endif
    <div class="form-group col-md-2">
        <label for="medico_tratante"></label>
        <a class="btn btn-primary mt-4 mb-4" href="" data-toggle="modal" data-target="#medicoModal" data-id="medicoModal">Agregar médico</a> 
        
    </div>
    
    
</div>



<input style="margin: 50px" type="submit" value="Guardar paciente" class="btn btn-success">
</form>

<div class="modal" id="medicoModal" tabindex="-1" role="dialog" aria-labelledby="medicoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="medicoModalLabel">Agregar médico</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @csrf
            <form action="{{ route("medico.store") }}" method="post">
                @include('dashboard/medico/_form')
            </form>
        </div>
    </div>
  </div>
</div>  



 
