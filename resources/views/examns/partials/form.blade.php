<div class="float-left">
    <div class="form-group">
        {{ Form::label('date','Fecha de creación del examen') }}
    </div>
    <div>
        {{ Form::label('updated_at','Última actualización del examen') }}
    </div>
    <hr>
    <div class="form-group">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    </div>
</div>
