<div class="form-group">
    {{ Form::label('nameSchool', 'Nombre de la escuela') }}
    {{ Form::text('nameSchool',null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
