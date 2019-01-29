@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Preguntas
                    @can('questions.create')
                        <a href="{{route('questions.create')}}" class="btn btn-primary pull-right">
                            Crear
                        </a>
                    @endcan
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Pregunta</th>
                                <th>Respuesta A</th>
                                <th>Respuesta B</th>
                                <th>Respuesta C</th>
                                <th>Respuesta D</th>
                                <th>Respuesta correcta</th>
                                <th colspan="3">&nbsp;</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                                <tr>
                                    <td>{{$question->id}}</td>
                                    <td>{{$question->context}}</td>
                                    <td>{{ $question->ansA }}</td>
                                    <td>{{ $question->ansB }}</td>
                                    <td>{{ $question->ansC }}</td>
                                    <td>{{ $question->ansD }}</td>
                                    <td>{{ $question->correctAns }}</td>
                                    <td>
                                        @can('questions.show')
                                            <a href="{{route("questions.show", $question->id)}}" class="btn btn-sm btn-default">
                                                Ver
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
