@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Examenes</div>
                <div class="card-body">
                    @include('examns.partials.form')
                    {!! Form::model($examn, ['examn' => ['examns.update', $examn->id],
                    'method' => 'PUT']) !!}
                        @include('examns.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection