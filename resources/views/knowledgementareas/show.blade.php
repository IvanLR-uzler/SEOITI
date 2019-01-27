@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Area del conocimiento</div>
                <div class="card-body">
                    <p><strong>Nombre del area</strong> {{ $knowledgementArea->name }} </p>
                    <p><strong>Descripción</strong> {{ $knowledgementArea->description }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection