@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuario</div>
                <div class="card-body">
                    <p><strong>Nombre</strong> {{ $user->name }} </p>
                    <p><strong>Apellido paterno</strong> {{ $user->app }} </p>
                    <p><strong>Apellido materno</strong> {{ $user->apm }} </p>
                    <p><strong>Email</strong> {{ $user->email }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection