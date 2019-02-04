@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Aspirantes</div>
                <div class="card-body">
                    <p><strong>Nombre</strong> {{ $aspirant->name }} </p>
                    <p><strong>Apellido paterno</strong> {{ $aspirant->app }} </p>
                    <p><strong>Apellido materno</strong> {{ $aspirant->apm }} </p>
                    <p><strong>Edad</strong> {{ $aspirant->age}} </p>
                    <p><strong>Sexo</strong> {{ $aspirant->genre }} </p>
                    <p><strong>Direccion</strong> {{ $aspirant->direction }} </p>
                    <p><strong>Fecha de nacimiento</strong> {{ $aspirant->bornDate }} </p>
                    <p><strong>Telefono</strong> {{ $aspirant->cellphone}} </p>
                    <p><strong>Email</strong> {{ $aspirant->email }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection