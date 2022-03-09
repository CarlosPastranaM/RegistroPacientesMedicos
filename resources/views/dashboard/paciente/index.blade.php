@extends('dashboard.master')

@section('content')

    <a class="btn btn-success mt-4 mb-4" href="{{ route('paciente.create') }}">Crear</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido paterno</th>
            <th scope="col">Apellido materno</th>
            <th scope="col">Edad</th>
            <th scope="col">Médico tratante</th>
            <th scope="col">Actions</th>
            
        </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
            <tr>
                <th scope="row">{{ $paciente->id }}</th>
                <td>{{ $paciente->nombre }}</td>
                <td>{{ $paciente->apellido_p }}</td>
                <td>{{ $paciente->apellido_m }}</td>
                <td>{{ $paciente->edad }}</td>
                <td>{{ $paciente->medico_id }}</td>
                <td>
                    <a href="{{ route('paciente.show', $paciente->id) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('paciente.edit', $paciente->id) }}" class="btn btn-primary">Editar</a>
                   
                        <button data-toggle="modal" data-target="#deleteModal" data-whatever="@mdo" data-id="{{ $paciente->id }}"class="btn btn-danger" type="submit">Borrar</a>
                    
                    
                </td>
            </tr>
            @endforeach
            
            
        
        </tbody>
    </table>

    

    {{$pacientes->links()}}

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p> ¿Está seguro que desea eliminar el registro del paciente?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form id="formDelete" action="{{ route('paciente.destroy', $paciente->id) }}" data-action="{{ route('paciente.destroy', 0) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" >Delete</button>
                </form>
              
            </div>
          </div>
        </div>
      </div>

      <script>
        $('#deleteModal').on('show.bs.modal', function (event) {
            
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            action = $('#formDelete').attr('data-action').slice(0, -1);
            action += id;
            $('#formDelete').attr('action', action);
            var modal = $(this)
            modal.find('.modal-title').text('Eliminar el registro ' + id)
          })
      </script>

@endsection