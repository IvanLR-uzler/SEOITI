@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuarios</div>
                <div class="card-body">
                    {!! Form::model($aspirant, ['route' => ['aspirants.update', $aspirant->id],
                    'method' => 'PUT']) !!}
                        @include('aspirants.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection