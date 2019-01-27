@extends('layouts.original')

@section('content')
<br>
        <div class="container">
                <div class="justify-content-center">
                    <div class="col-md-12">
                        <div class="card text-center">
                            <div class="h1" style="margin-top:20px">
                                SEOITI
                            </div>
                            <div class="card-body">
                                <h3>Bienvenido al sistema de examenes online</h3>
                                <p>Para comenzar puedes darle click a la opción "Ayuda", el cual te dará instrucciones de como realizar tu examen.</p>
                                <p>O darle a "Realizar Examen" para comenzar.</p>
                                <br><br>
                                <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Realizar Examen') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
@endsection
