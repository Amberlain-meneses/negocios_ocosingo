<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
          integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q=="
          crossorigin="anonymous"/>

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css"
          integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ=="
          crossorigin="anonymous"/>

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>
    
    <link href="{{asset('css/main.css')}}" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="bg-ligth">

<section>
    <div class="row">
        <div class="col-lg-6">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                
                <div class="carousel-inner">
                  <div class="carousel-item d-none d-sm-none d-md-block  active">
                   <img loading="lazy" class="img-1  min-vh-100 w-100" src="{{asset('img/tienda.jpg')}}" alt="">
                    <div class="carousel-caption d-none d-md-block">
                   
                      <h5 class="titleCarousel">Bienvenido</h5>
                      <p class="">¿Todavía no tienes una cuenta? <br>has clic para registrarte</p>
                      <a href="{{ route('register') }}" class="btn btn-outline-success" id="btnNewAdministrator">Registrar Nuevo Administrador</a>
                    </div>
                   
                  </div>
                
                 
                </div>

              </div>
        </div>
        <div class="col-lg-6 d-flex flex-column ">
            <div class="px-lg-5 py-lg-4 p-4 ">
                
                <div class="input-group justify-content-center">
                    <h2 class="titleForm ">Iniciar sesión</h2>
                    <h1 class="tileNegocios mb-4">Negocios Ocosingo</h1>
                </div>
                
                <form method="post" action="{{ url('/login') }}">
                    @csrf
    
                    <div class="input-group mb-4 ">
                        <input type="email"
                               name="email"
                               value="{{ old('email') }}"
                               placeholder="Correo electrónico"
                               class="form-control @error('email') is-invalid @enderror">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                        </div>
                        @error('email')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
    
                    <div class="input-group mb-4">
                        <input type="password"
                               name="password"
                               placeholder="Contraseña"
                               class="form-control @error('password') is-invalid @enderror  w-50">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
    
                    </div>
    
                    <div class="row">
                        
                        <div class="input-group mb-4 justify-content-center">
                            <button type="submit" class="btn  "  id="btnAccess">Iniciar</button>
                        </div>
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">Recordar siempre</label>
                            </div>
                            <p class="mb-4">
                                <a id="forgotPassword" href="{{ route('password.request') }}" class="text-center">Olvidé mi contraseña</a>
                            </p>
                        </div>
    
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"
        integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA=="
        crossorigin="anonymous"></script>

</body>
</html>
