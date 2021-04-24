@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Registrar Negocio</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'businesses.store', 'enctype'=> 'multipart/form-data']) !!}

            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="card-body">
                <div class="row">
                    @include('businesses.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-success', 'id' => 'save_business']) !!}
                <a href="{{ route('businesses.index') }}" class="btn btn-outline-success">Cancelar</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
