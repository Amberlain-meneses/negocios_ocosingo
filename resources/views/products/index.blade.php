@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        @if(!Auth::user()->business)
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Hola {{Auth::user()->name}} !</strong> Para agregar productos primero debes registrar tu negocio
            <a href="{{route('businesses.create')}}" class="alert-link">da click aquí</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Productos</h1>
            </div>
            <div class="col-sm-6">
                @can('products.create')
                <a class="btn btn-success float-right" href="{{ route('products.create') }}">
                    Registrar Producto
                </a>
                @endcan
            </div>
        </div>
    </div>
</section>

<div class="content px-3">

    @include('flash::message')

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body p-0">
            @include('products.table')

            <div class="card-footer clearfix float-right">
                <div class="float-right">

                </div>
            </div>
        </div>

    </div>
</div>

@endsection