<div class="float-left col-md-4">
        <div class="form-group">
                {{ Form::label('created','Fecha de creación:') }}
                <em>{{ Form::label('created','Sin asignar') }}</em>
        </div>
        <div class="form-group">
                {{ Form::label('updated','Fecha de actualización:') }}
                <em>{{ Form::label('updated','Sin asignar') }}</em>
        </div>
        <div class="form-group">
                        {{ Form::label('user_id','ID Usuario creador:') }}
                        <em>{{ $user_id }}</em>
                </div>        
        <div class="form-group">
                {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
        </div>
</div>
<div class="float-right col-md-8">
        <h3>Listado de preguntas</h3>
        <div class="form-group">
        <ul class="list-unstyled">
                @foreach ($questions as $question)
                        <li>
                                <label>
                                        {{ Form::checkbox('questions[]', $question->id, null) }}
                                        {{ $question->context }}
                                        <em> - Reactivos ({{ $question->reactive ?: 'N/A' }})</em>
                                </label>
                        </li>
                @endforeach
        </ul>
        </div>
</div>