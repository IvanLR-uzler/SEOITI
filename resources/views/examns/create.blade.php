@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        @include('examns.partials.error')
                        {!! Form::open(['route' => 'examns.store']) !!}
                            @include('examns.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection