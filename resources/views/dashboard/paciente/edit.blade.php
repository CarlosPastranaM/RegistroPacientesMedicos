@extends('dashboard.master')

@section('content')


<form action="{{ route("paciente.update", $paciente->id, $medico->id) }}" method="POST">
    @method('PUT')
    @include('dashboard/paciente/_form')
</form>

   
@endsection