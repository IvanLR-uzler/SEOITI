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
    <h3>Areas del conocimiento</h3>
<div class="form-group">
        <select name="know_id" class="custom-select">
            <option value="0" selected="selected">Selecciona una opción</option>
            @foreach ($knowledgementAreas as $knowledgementArea)
                <option value="{{$knowledgementArea->id}}">{{$knowledgementArea->name}}</option>
            @endforeach
        </select>
</div>
<div class="form-group">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
</div>