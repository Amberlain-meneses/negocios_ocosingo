<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="{{asset('css/main.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous"/>
    <title>Negocios Ocosingo</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <!--Navbar-->
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
                        <a class="nav-link" aria-current="page" href="{{route('business')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('categories')}}">Categorías</a>
                    </li>
                </ul>
                <form action="{{route('search')}}" class="d-flex">
                    <input class="form-control me-2" name="search" type="search" placeholder="Buscar tienda" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</div>
<!--Slider-->

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

@yield('content')

<!--Footer-->
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>


</body>

</html>