@extends('layouts.original')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Roles</div>

                    <div class="panel-body">
                        <p><strong>Nombre: </strong>{{$school->nameSchool}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
