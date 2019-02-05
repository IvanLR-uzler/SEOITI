@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Examenes</div>
                <div class="card-body">
                    <p><strong>Fecha de creación:</strong> {{ $examn->created_at }} </p>
                    <hr>
                    <p><strong>Fecha de actualización:</strong> {{ $examn->updated_at }} </p>
                    <hr>
                    <p><strong>ID Usuario creador:</strong> {{ $examn->user_id }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection