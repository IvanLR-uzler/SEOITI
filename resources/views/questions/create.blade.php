@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pregunta</div>
                <div class="card-body">
                    {!! Form::open(['route' => 'questions.store']) !!}
                        @include('questions.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection