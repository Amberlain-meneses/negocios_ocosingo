@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
                    <h3 class="box-title" style="padding: 2%">Veridica tu correo electrónico</h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">Se envió un nuevo enlace de veriricación
                            en su correo
                            </div>
                        @endif
                        <p>Antes de continuar verifique su correo electrónico</p>
                        <a href="{{ route('verification.resend') }}">Clic para solicitar uno nuevo'</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection