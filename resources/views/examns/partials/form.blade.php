<div class="float-left col-md-2">
        <div class="form-group">
                <strong>{{ Form::label('created','Fecha de creación:') }}</strong>
                <em>{{ Form::label('created', $examn->created_at ?: 'Sin asignar') }}</em>
        </div>
        <div class="form-group">
                <strong>{{ Form::label('updated','Fecha de actualización:') }}</strong>
                <em>{{ Form::label('updated', $examn->updated_at) ?: 'Sin asignar'}}</em>
        </div>
        <div class="form-group">
            <strong>{{ Form::label('user_id','ID Usuario creador:') }}</strong>
            {!! Form::text('user_id', $user->id, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
        </div>        
        <div class="form-group">
                {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
        </div>
</div>
<div class="float-left col-md-5">
        <h4>Preguntas Generales</h4>
        <hr>
        <div class="form-group">
        <ul class="list-unstyled">
                @foreach ($knowGenerals as $knowGeneral)
                        <li>
                                <label>
                                        {{ Form::checkbox('questions[]', $knowGeneral->id, null) }}
                                        {{ $knowGeneral->context }}
                                        <em> - Reactivos ({{ $knowGeneral->reactive ?: 'N/A' }})</em>
                                </label>
                        </li>
                @endforeach
        </ul>
        </div>
</div>
<div class="float-right col-md-5">
        <h4>Preguntas por área</h4>
        <div class="form-group">
                        <select name="know_id" class="custom-select">
                                <option value="0">Selecciona una opción</option>
                                @foreach ($knowledgementAreas as $knowledgementArea)
                                        <option value="{{$knowledgementArea->id}}">{{$knowledgementArea->name}}</option>
                                @endforeach
                        </select>
                </div>        
        <hr>
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