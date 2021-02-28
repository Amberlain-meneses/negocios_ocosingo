<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Registro</title>

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
    
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />      

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
                <!--------->
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                
                    <div class="carousel-inner">
                      <div class="carousel-item img-register min-vh-100 d-none d-sm-none d-md-block  active">
                       
                        <div class="carousel-caption d-none d-md-block">
                       
                          <h5 class="titleCarousel">Bienvenido</h5>

                          <p class="">Clic para iniciar sesión</p>
                          <a href="{{ route('login') }}" class="btn btn-outline-success" id="btnReturnLogin">Ya tengo una cuenta</a>
                        </div>
                       
                      </div>
                    
                     
                    </div>
    
                  </div>
            </div>
            <div class="col-lg-6">
                <!---Form--->
                <div class="px-lg-5 py-lg-4 p-4">
                    <div class="input-group justify-content-center">
                        <h2 class="titleFormRegistrer ">Registrar</h2>
                        <h1 class="tileNegocios mb-4">Negocios Ocosingo</h1>
                    </div>

                    <form method="post" action="{{ route('register') }}">
                        @csrf
        
                        <div class="input-group mb-3">
                            <input type="text"
                                   name="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name') }}"
                                   placeholder="Nombre completo">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-user"></span></div>
                            </div>
                            @error('name')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="input-group mb-3">
                            <input type="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   class="form-control @error('email') is-invalid @enderror"
                                   placeholder="Correo electrónico">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                            @error('email')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="text"
                                   name="phone"
                                   value="{{ old('phone') }}"
                                   class="form-control @error('phone') is-invalid @enderror"
                                   placeholder="Teléfono (opcional)">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-phone"></span></div>
                            </div>
                            @error('phone')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="input-group mb-3">
                            <input type="password"
                                   name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   placeholder="Contraseña">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-lock"></span></div>
                            </div>
                            @error('password')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="input-group mb-3">
                            <input type="password"
                                   name="password_confirmation"
                                   class="form-control"
                                   placeholder="Confirmar contraseña">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-lock"></span></div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="input-group mb-4 justify-content-center">
                                <button type="submit" class="btn" id="btnAccess">Registrar</button>
                            </div>
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms">
                                        Acepto los  <a href="#">terminos</a>
                                    </label>
                                </div>
                             
                            </div>
                          
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"
        integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA=="
        crossorigin="anonymous"></script>

</body>
</html>
