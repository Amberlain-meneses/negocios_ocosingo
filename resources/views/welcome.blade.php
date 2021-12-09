@extends('layouts.front')
@section('content')


<div>
    <h2 class="text-center">Nuestras Tiendas</h2>
</div>
<!-- Aqui visualizaremos los negocios -->
    <div class="py-5">
        <div class="container">
            <div class="row">
               
              
                @foreach($bussiness as $rules)
                    <div class="col-md-3">
                        <div class="card-business">
                            <img src="../images/{{$rules->image}}" alt="">
                            <div class="card-body-business">
                            <h4 class=" title-card-business">{{$rules->name}}</h4>
                            <ul class="mb-0">
                            
                        <li>
                            <p class="text-muted">
                                <i class="fas fa-store">
                                    
                                </i>
                                {{$rules->category->category_name}}
                            </p>
                        </li>
                        <li>
                            <p class="text-muted">
                                <i class="fas fa-map-marker-alt">
                                    
                                </i>
                                {{$rules->location}}
                            </p>
                        </li>
                        <li>
                            <p class="text-muted">
                                <i class="fas fa-road">
                                    
                                </i>
                                {{$rules->adress}}
                            </p>
                        </li>
                        
                        <li >
                            <p class="text-muted">
                                <i class="fas fa-clock">
                                    
                                </i>
                                {{$rules->schedule}}
                            </p>
                        </li>
                        <li>
                            <p class="text-muted">
                                <i class="fas fa-phone">
                                    
                                </i>
                                {{$rules->phone}}
                            </p>
                        </li>
                        <li>
                            <p class="text-muted">
                                <i class="fas fa-truck">
                                    
                                </i>
                                {{$rules->service->service_type}}
                            </p>
                        </li>
                        
                    </ul>
                        <!--div>
                            <input class="btnViewBusinnes" type="submit" value="Ver Tienda">
                        </div-->
                            </div>
                        </div>
                    </div>
                @endforeach
             
            </div>
            
             <div class="m-0 row justify-content-center align-items-center">
                <div class="col-auto justify-content-center align-items-center p-5">
                    {{$bussiness->links()}}
                </div>
            </div>
        </div>
        
    </div>
   
   
<!-- termina negocios -->

<!-- Fin de los produtos -->
@endsection