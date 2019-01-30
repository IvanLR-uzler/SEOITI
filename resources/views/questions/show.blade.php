@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Preguntas</div>
                <div class="card-body">
                    <p><strong>Contexto</strong> {{ $question->context }} </p>
                    <p><strong>Respuesta A</strong> {{ $question->ansA }} </p>
                    <p><strong>Respuesta B</strong> {{ $question->ansB }} </p>
                    <p><strong>Respuesta C</strong> {{ $question->ansC }} </p>
                    <p><strong>Respuesta D</strong> {{ $question->ansD }} </p>
                    <p><strong>Respuesta correcta</strong> {{ $question->correctAns }} </p>
                    <p><strong>Reactivo</strong> {{ $question->reactive }} </p>
                    <p><strong>Area del conocimiento</strong> {{ $question->know_id }} </p>
                    <p><strong>Usuario creador</strong> {{ $question->usuario_id }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection