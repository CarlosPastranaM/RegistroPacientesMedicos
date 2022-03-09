
@extends('dashboard.master')

@section('content')

    <form action="{{ route("paciente.store") }}" method="post">
        @include('dashboard/paciente/_form')
    </form>
   
@endsection


