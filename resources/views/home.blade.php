@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Dashboard</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Sesión iniciada satisfactoriamente</h3>
                    <br>
                    <br>
                    <br>
                    <h3>Selecciona una opción para continuar:</h3>
                    <div class="links">
                        <h4><a href="dashboard/paciente">Pacientes</a></h4>
                        <h4><a href="dashboard/paciente">Medicos</a></h4>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
