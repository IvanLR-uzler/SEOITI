@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Aspirantes') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="app" class="col-md-4 col-form-label text-md-right">{{ __('Apellido paterno') }}</label>

                            <div class="col-md-6">
                                <input id="app" type="text" class="form-control{{ $errors->has('app') ? ' is-invalid' : '' }}" name="app" value="{{ old('app') }}" required autofocus>

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
                                <input id="apm" type="text" class="form-control{{ $errors->has('apm') ? ' is-invalid' : '' }}" name="apm" value="{{ old('apm') }}" required autofocus>

                                @if ($errors->has('apm'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apm') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{ old('age') }}" required autofocus>

                                @if ($errors->has('age'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genre" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

                            <div class="col-md-6">
                                <input id="genre" type="text" class="form-control{{ $errors->has('genre') ? ' is-invalid' : '' }}" name="genre" value="{{ old('genre') }}" required autofocus>

                                @if ($errors->has('genre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('genre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direction" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

                            <div class="col-md-6">
                                <input id="direction type="text" class="form-control{{ $errors->has('direction') ? ' is-invalid' : '' }}" name="direction" value="{{ old('direction') }}" required autofocus>

                                @if ($errors->has('direction'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('direction') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bornDate" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de naciemiento') }}</label>

                            <div class="col-md-6">
                                <input id="bornDate" type="text" class="form-control{{ $errors->has('bornDate') ? ' is-invalid' : '' }}" name="bornDate" value="{{ old('bornDate') }}" required autofocus>

                                @if ($errors->has('bornDate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bornDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cellphone" class="col-md-4 col-form-label text-md-right">{{ __('Numero Telefonico') }}</label>

                            <div class="col-md-6">
                                <input id="cellphone" type="text" class="form-control{{ $errors->has('cellphone') ? ' is-invalid' : '' }}" name="cellphone" value="{{ old('cellphone') }}" required autofocus>

                                @if ($errors->has('cellphone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cellphone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
