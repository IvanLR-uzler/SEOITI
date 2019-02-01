<div class="float-left col-md-8">
    <div class="form-group">
        {{ Form::label('context','Pregunta') }}
        {!! Form::text('context',null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {{ Form::label('ansA', 'Respuesta A') }}
        {{ Form::text('ansA',null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('ansB', 'Respuesta B') }}
        {{ Form::text('ansB',null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('ansC', 'Respuesta C') }}
        {{ Form::text('ansC',null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('ansD', 'Respuesta D') }}
        {{ Form::text('ansD',null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('correctAns', 'Respuesta Correcta', ) }}
        {{ Form::text('correctAns',null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('raective', 'Reactivo') }}
        {{ Form::text('reactive',null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('user_id', 'Usuario creador') }}
        {!! Form::text('user_id', $user_id, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
    </div>
</div>
<div class="float-right col-md-4">
    <h3>Listado de areas del conocimiento</h3>
<div class="form-group">
        {!! Form::select('knowledgementAreas', ['Selecciona una opción', $knowledgementAreas], null, ['class' => 'custom-select', 'name' => 'know_id'] ) !!}
</div>
<div class="form-group">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
</div>