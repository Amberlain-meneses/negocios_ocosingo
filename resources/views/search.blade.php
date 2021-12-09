@extends('layouts.front')
@section('content')

    @if($search)
        <div>
            <h2 class="text-center">Nuestras Tiendas</h2>
        </div>
    @endif       
<!-- Aqui visualizaremos los negocios -->
    <div class="py-5">
        <div class="container">
                @if($search)
                <div class="alert alert-success" role="alert">
                Los resultados de tu busqueda'{{$search}}' son:
                </div>
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
                                <a href="https://wa.me/52{{$rules->phone}}?text=Solicito%20más%20información" target="_blank">{{$rules->phone}}</a>
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

                @else
                <div class="alert alert-danger" role="alert">
                No se encontraron resultados de tu busqueda '{{$search}}' 
                </div>
                @endif
                
             
            </div>
           
        </div>
        
    </div>
   
   
<!-- termina negocios -->

<!-- Fin de los produtos -->
@endsection