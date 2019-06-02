@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Preguntas
                    @can('questions.create')
                        <a href="{{route('questions.create')}}" class="btn-sm btn-primary float-right">
                            Crear
                        </a>
                    @endcan
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Pregunta</th>
                                <th>Respuesta correcta</th>
                                <th>Reactivos</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                                <tr>
                                    <td>{{ $question->context }}</td>
                                    <td>{{ $question->correctAns }}</td>
                                    <td>{{ $question->reactive }}</td>
                                    <td>
                                        @can('questions.show')
                                            <a href="{{route("questions.show", $question->id)}}" class="btn btn-sm btn-default">
                                                Detalles
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('questions.edit')
                                            <a href="{{route("questions.edit", $question->id)}}" class="btn btn-sm btn-default">
                                                Editar
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('questions.destroy')
                                            {!! Form::open(['route' => ['questions.destroy', $question->id],
                                            'method' => 'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$questions->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
