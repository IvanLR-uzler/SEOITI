@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Examenes
                    @can('examns.create')
                        <a href="{{route('examns.create')}}" class="btn-sm btn-primary float-right">
                            Crear
                        </a>
                    @endcan
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Fecha de creación del examen</th>
                                <th>Última actualización del examen</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($examns as $examn)
                                <tr>
                                    <td>{{$examn->created_at}}</td>
                                    <td>{{$examn->updated_at}}</td>
                                    <td>
                                        @can('examns.show')
                                            <a href="{{route("examns.show", $examn->id)}}" class="btn btn-sm btn-default">
                                                Detalles
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('examns.edit')
                                            <a href="{{route("examns.edit", $examn->id)}}" class="btn btn-sm btn-default">
                                                Editar
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('examns.destroy')
                                            {!! Form::open(['route' => ['examns.destroy', $examn->id],
                                            'method' => 'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
