@csrf
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
               value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="app" class="col-md-4 col-form-label text-md-right">{{ __('Apellido paterno') }}</label>

    <div class="col-md-6">
        <input id="app" type="text" class="form-control{{ $errors->has('app') ? ' is-invalid' : '' }}" name="app"
               value="{{ old('app') }}" required autofocus>

        @if ($errors->has('app'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('app') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="apm" class="col-md-4 col-form-label text-md-right">{{ __('Apellido materno') }}</label>
    <div class="col-md-6">
        <input id="apm" type="text" class="form-control{{ $errors->has('apm') ? ' is-invalid' : '' }}" name="apm"
               value="{{ old('apm') }}" required autofocus>
        @if ($errors->has('apm'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('apm') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row"><label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>
    <div class="col-md-6"><input id="email" type="email"
                                 class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                 value="{{ old('email') }}" required>
        @if ($errors->has('email'))<span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>@endif</div>
</div>


<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
    <div class="col-md-6">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
               name="password" required>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>
    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
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