@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        {!! Form::open(['examn' => 'examns.store']) !!}
                            @include('examns.partials.form_questions')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection