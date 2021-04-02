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
    <div class="col-lg-12 mb-auto">
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
                      <img src="{{asset('/img/ban1.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>El mejor lugar para comprar</h5>
                            <p>Todos los productos en un solo lugar</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('/img/ban2.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Lo mejor esta por llegar</h5>
                            <p>Tienes todo a la mano</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('/img/ban3.png')}}" class="d-block w-100" alt="...">
                        
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
<br>
<br>
<br>
<br>
<br>
<!-- Aqui ermina el Slider -->
<!-- Aqui visualizaremos los productos -->
<div class="py-5 mt-5">
    <div class="container mb-2">
        <div class="row">
              @foreach($bussiness as $rules)
            <div class="col-md-3">
                <div class="card">
                  <div class="item">
                    <div class="img-box">
                        <img src="images/{{$rules->image}}" alt="Awesome Sunglasses">
            
                    </div>
                    <div class="details">
                        <h2>Tienda <span>{{$rules->name}}</span></h2>
                        <h2>Ubicación <span>{{$rules->adress}}</span></h2>
                        <h2 class="moreDetails">Lugar <span>{{$rules->location}}</span></h2>
                        <h2 class="modeDetails">Horarios <span>{{$rules->schedule}}</span></h2>
                        <h2 class="moreDetails">Teléfono <span>{{$rules->phone}}</span></h2>
            
                        <a href="#" class="btn-warning"> Add to cart</a>
            
                    </div>
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
                <h4>Compania</h4>
                <h3>RenderX</h3>
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
                <h4>Sobre Nosotros</h4>
                <p>Somos una empresa dedicada a ofrecer servicios de: Diseño gráfico, edición de
                video, creación de landing page,
                aniamción 2D y 3D, desarrollo de aplicaciones web y
                móviles.</p>
            </div>
            <div class="footer-col">
                <h4>Siguenos en</h4>
                <div class="socialmedia">
                    <a href=""><i class="fab fa-facebook-square"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Fin de los produtos -->
@endsection