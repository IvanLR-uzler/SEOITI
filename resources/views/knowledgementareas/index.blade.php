@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Areas del Conocimiento
                    @can('knowledgementareas.create')
                        <a href="{{route('knowledgementareas.create')}}" class="btn btn-sm btn-primary float-right">
                            Crear
                        </a>
                    @endcan
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($knowledgementareas as $knowledgementarea)
                                <tr>
                                    <td>{{$knowledgementarea->id}}</td>
                                    <td>{{$knowledgementarea->name}}</td>
                                    <td>
                                        @can('knowledgementareas.show')
                                            <a href="{{route("knowledgementareas.show", $knowledgementarea->id)}}" class="btn btn-sm btn-default">
                                                Ver
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('knowledgementareas.edit')
                                            <a href="{{route("knowledgementareas.edit", $knowledgementarea->id)}}" class="btn btn-sm btn-default">
                                                Editar
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('knowledgementareas.destroy')
                                            {!! Form::open(['route' => ['knowledgementareas.destroy', $knowledgementarea->id],
                                            'method' => 'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>                                
                            @endforeach
                        </tbody>
                    </table>
                    {{$knowledgementareas->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
