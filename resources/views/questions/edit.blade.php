@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Preguntas</div>
                <div class="card-body">
                    @include('questions.partials.error')
                    {!! Form::model($question, ['route' => ['questions.update', $question->id],
                    'method' => 'PUT']) !!}
                        @include('questions.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection