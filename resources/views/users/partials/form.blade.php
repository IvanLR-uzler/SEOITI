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

<hr>
<h3>Listado de roles</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach ($roles as $role)
            <li>
                <label>
                    {{ Form::checkbox('roles[]', $role->id, null) }}
                    {{ $role->name }}
                    <em>({{ $role->description ?: 'N/A' }})</em>
                </label>
            </li>
        @endforeach
    </ul>
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>