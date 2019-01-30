<div class="form-group">
    {{ Form::label('context','Pregunta') }}
    {{ Form::text('context',null, ['class' => 'form-control']) }}
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
    {{ Form::text('correctAns',null, ['class' => 'form-control float-left']) }}
</div>
<div>
    {{ Form::label('raective', 'Reactivo') }}
    {{ Form::text('reactive',null, ['class' => 'form-control float-right']) }}
</div>
<hr>
<h3>Listado de areas del conocimiento</h3>
<div class="form-group">
        <ul class="list-unstyled">
                @foreach ($knowledgementAreas as $knowledgementArea)
                    <li>
                            <label>
                                {{ Form::checkbox('knowledgementAreas[]', $knowledgementArea->id, null) }}
                                {{ $knowledgementArea->name }}
                            </label>
                    </li>
                @endforeach
        </ul>
</div>
<div class="form-group">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>