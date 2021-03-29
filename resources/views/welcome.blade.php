@extends('layouts.front')
@section('content')
<!-- Aqui empieza el Nav bar-->
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img width="50" src="./img/logo-oficial.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categories')}}">Categorías</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscador" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</div>
<!-- aqui ermina el Nav bar -->

<!-- Aqui empieza el Slider -->
<section>
    <div class="col-lg-12">
        <div>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{asset('/img/fruteria.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>El mejor lugar para comprar</h5>
                            <p>Todos los productos en un solo lugar</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('/img/fruteria.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Lo mejor esta por llegar</h5>
                            <p>Tienes todo a la mano</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('/img/fruteria.jpg')}}" class="d-block w-100" alt="...">
                        
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Todo lo que buscabas llego</h5>
                            <p>Cotiza con nosotros</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Aqui ermina el Slider -->
<!-- Aqui visualizaremos los productos -->
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h4 class="border-bottom">Negocios</h4>
            </div>
            @foreach($bussiness as $rules)
            <div class="col-md-3">
                <div class="card">
                    <img src="images/{{$rules->image}}" alt="" style="height: 50%;">
                    <div class="card-body text-center">
                        <h3>{{$rules->name}}</h3>
                        <h6>Ubicación:</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $rules->adress }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $rules->location }}</h6>
                        <h6>Horario de Apertura:</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $rules->schedule }}</h6>
                        <h6>Número de Celular:</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $rules->phone }}</h6>
                        <h6>Referencia:</h6>
                        <p class="card-text">{{ $rules->references }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Fin de los produtos -->
@endsection