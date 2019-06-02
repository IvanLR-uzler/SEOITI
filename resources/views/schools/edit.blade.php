@extends('layouts.original')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Escuela</div>
                    <div class="panel-body">
                        @include('schools.partials.error')
                        {!! Form::model($school,['route' => ['schools.update', $school->id],
                        'method'=> 'PUT']) !!}
                        @include('schools.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection