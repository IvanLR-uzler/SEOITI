@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="card">
                <div class="card-header">
                   Aspirante
                    @can('aspirants.create')
                        <a href="{{route('aspirants.create')}} "
                           class="btn btn-sm btn-primary float-right">Aspirates</a>
                    @endcan
                </div>

            </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="12px">ID</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Paterno</th>
                                <th>Edad</th>
                                <th>Sexo</th>
                                <th>Direccion</th>
                                <th>Fecha de nacimiento</th>
                                <th>Telefono</th>
                                <th>Email </th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aspirants as $aspirant)
                                <tr>
                                    <td>{{$aspirant->id}}</td>
                                    <td>{{$aspirant->name}}</td>
                                    <td>{{$aspirant->app}}</td>
                                    <td>{{$aspirant->apm}}</td>
                                    <td>{{ $aspirant->age}}</td>
                                    <td>{{ $aspirant->genre }}</td>
                                    <td>{{ $aspirant->direction }}</td>
                                    <td>{{ $aspirant->bornDate }}</td>
                                    <td>{{ $aspirant->cellphone}}</td>
                                    <td>{{ $aspirant->email }}</td>

                                    <td>
                                        @can('aspirants.show')
                                            <a href="{{route("aspirants.show", $aspirant->id)}}" class="btn btn-sm btn-default">
                                                Ver
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('aspirants.edit')
                                            <a href="{{route("aspirants.edit", $aspirant->id)}}" class="btn btn-sm btn-default">
                                                Editar
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('aspirants.destroy')
                                            {!! Form::open(['route' => ['aspirants.destroy', $aspirant->id],
                                            'method' => 'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$aspirants->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
