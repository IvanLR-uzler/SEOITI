@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Area del conocimiento</div>
                <div class="card-body">
                    @include('knowledgementareas.partials.error')
                    {!! Form::model($knowledgementArea, ['route' => ['knowledgementareas.update', $knowledgementArea->id],
                    'method' => 'PUT']) !!}
                        @include('knowledgementareas.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection