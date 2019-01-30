@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Examenes</div>
                <div class="card-body">
                    <p><strong>Fecha de creación</strong> {{ $examn->date }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection