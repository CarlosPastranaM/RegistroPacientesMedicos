
@extends('dashboard.master')

@section('content')

    <form action="{{ route("medico.store") }}" method="post">
        @include('dashboard/medico/_form')
    </form>
   
@endsection


