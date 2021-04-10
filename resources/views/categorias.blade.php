@extends('layouts.front')
@section('content')
<!-- Aqui empieza el Nav Bar -->
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Negocios Ocosingo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('business')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('categories')}}">Categorías</a>
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
<!-- Aqui ermina el Nav Bar -->
<section class="sectionCategory">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="titleHero">Crece con <br>Nosotros</h1>
            </div>
            <div class="col">
                <img class="img-undraw-category" src="img/undraw1.svg" alt="">
            </div>
        </div>
    </div>
</section>

<!-- Aqui empieza el card -->
<h2 class="text-center">Nuestras categorías</h2>

<div class="py-5">
    <div class="container">
        <div class="row">
            @foreach($bussiness as $category)
            <div class="col-md-3">
            <div class="card-category">
                <img src="images/{{$category->image}}">
                <div class="container-category-name">
                  <h6 class="text-center"><b>{{$category->category_name}}</b></h6> 
                  
                </div>
                <div>
                   
                    <a href="{{route('business')}}" class="btnViewCategories">Ver más</a>
                </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container-footer">
        <div class="row-footer">
            <div class="footer-col">
                
                <h3 style="color: #fffff">RenderX</h3>
            </div>
            <div class="footer-col">
                <h4>Nuestros Servicios</h4>
                <ul class="ul-footer">
                    <li>Dessarrollo web</li>
                    <li>Desarrollo móvil</li>
                    <li>Modelado 3D</li>
                    <li>Landing page</li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>¿Quiénes somos?</h4>
                <p>Somos una empresa dedicada a ofrecer servicios de: Diseño gráfico, edición de
                video, creación de landing page,
                animación 2D y 3D, desarrollo de aplicaciones web y
                móviles.</p>
            </div>
            <div class="footer-col">
                <h4>Siguenos en</h4>
                    <div class="ul-footer">
                    <a href="https://www.facebook.com/renderxdigital" target="_black"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection