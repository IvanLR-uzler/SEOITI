@extends('layouts.original')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Listado de schools
                        @can('schools.create')
                            <a href="{{route('schools.create')}} "
                               class="btn btn-sm btn-primary float-right">Crear</a>
                        @endcan
                    </div>

                    <div class="panel-body">

                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($schools as $school)
                                <tr>
                                    <td>{{ $school->id}}</td>
                                    <td>{{ $school->nameSchool}}</td>
                                    <td width="10px">
                                        @can('schools.show')
                                            <a href="{{route('schools.show', $school->id)}}"
                                               class="btn btn-sm btn-secondary">Ver</a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('schools.edit')
                                            <a href="{{route('schools.edit', $school->id)}}"
                                               class="btn btn-sm btn-secondary">Editar</a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('schools.destroy')
                                            {!! Form::open(['route'=>['schools.destroy', $school->id],
                                            'method'=>'DELETE'])!!}

                                            <button class="btn btn-sm btn-danger">Eliminar</button>

                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$schools->render()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
