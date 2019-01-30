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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection