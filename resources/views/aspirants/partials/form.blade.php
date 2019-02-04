<div class="form-group">
    {{ Form::label('name', 'Nombre(s)') }}
    {{ Form::text('name',null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
        {{ Form::label('app', 'Apellido paterno') }}
        {{ Form::text('app',null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
        {{ Form::label('apm', 'Apellido materno') }}
        {{ Form::text('apm',null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('age', 'Edad') }}
    {{ Form::text('age',null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('genre', 'Sexo') }}
    {{ Form::text('genere',null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('direction', 'Direccion') }}
    {{ Form::text('direction',null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('bornDate', 'Fecha de nacimienrto') }}
    {{ Form::text('bornDate',null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('cellphone', 'Numero De Telefono') }}
    {{ Form::text('cellphone',null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email',null, ['class' => 'form-control']) }}

</div>
    <div class="form-group">
        {{ Form::label('password', 'Contraseña') }}
        {{ Form::text('password',null, ['class' => 'form-control']) }}
    </div>

<div class="form-group">
    {{ Form::label('password', 'Confimar contraseña') }}
    {{ Form::text('password',null, ['class' => 'form-control']) }}

    @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
