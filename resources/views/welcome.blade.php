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
                            @guest
                                <div class="card-body">
                                    <h3>Bienvenido al sistema de examenes online</h3>
                                    <p>Para comenzar puedes darle click a la opción "Ayuda", el cual te dará instrucciones de como realizar tu examen.</p>
                                    <p>O darle a "Realizar Examen" para comenzar.</p>
                                    <br><br>
                                    <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Realizar Examen') }}</a>
                                </div>
                            @else 
                            <div class="card-body">
                                <h3>Bienvenido al sistema de examenes online</h3>
                                <p>Puedes realizar tus actividades correspondientes a tu rol.</p>
                                <p>Se te ha designado un menú específico en la parte superior.</p>
                                <br><br>
                                <p><strong>Cualquier duda, será necesario contactar al administrador del sistema.</strong></p>
                            </div>                              
                            @endguest
                        </div>
                    </div>
                </div>
        </div>
@endsection
