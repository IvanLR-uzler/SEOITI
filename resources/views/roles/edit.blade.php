@extends('layouts.original')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Roles</div>
                    <div class="panel-body">

                        {!! Form::model($role,['route' => ['roles.update', $role->id],
                        'method'=> 'PUT']) !!}
                        @include('roles.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection