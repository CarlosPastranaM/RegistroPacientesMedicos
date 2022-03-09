
@extends('dashboard.master')

@section('content')

<div class="container">
    <table class="table" >
      <thead>
        <tr>
          <th scope="col">Modelo</th>
          <th scope="col">Acción</th>
          <th scope="col">Usuario</th>
          <th scope="col">Fecha</th>
          <th scope="col">Valor anterior</th>
          <th scope="col">Valor nuevo</th>
        </tr>
      </thead>
      <tbody id="audits">
        @foreach($audits as $audit)
          <tr>
            <td>{{ $audit->auditable_type }} (id: {{ $audit->auditable_id }})</td>
            <td>{{ $audit->event }}</td>
            <td>{{ $audit->user->name }}</td>
            <td>{{ $audit->created_at }}</td>
            <td>
              <table class="table">
                @foreach($audit->old_values as $attribute => $value)
                  <tr>
                    <td><b>{{ $attribute }}</b></td>
                    <td>{{ $value }}</td>
                  </tr>
                @endforeach
              </table>
            </td>
            <td>
              <table class="table">
                @foreach($audit->new_values as $attribute => $value)
                  <tr>
                    <td><b>{{ $attribute }}</b></td>
                    <td>{{ $value }}</td>
                  </tr>
                @endforeach
              </table>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>
   
@endsection


