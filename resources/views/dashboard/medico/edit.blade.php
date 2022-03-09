@extends('dashboard.master')

@section('content')


<form action="{{ route("medico.update", $medico->id) }}" method="POST">
    @method('PUT')
    @include('dashboard/medico/_form')
</form>

   
@endsection