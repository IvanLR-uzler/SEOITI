@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pregunta</div>
                <div class="card-body">
                    @include('questions.partials.error')
                    {!! Form::open(['route' => 'questions.store']) !!}
                        @include('questions.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection