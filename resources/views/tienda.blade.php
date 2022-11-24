@extends('layouts.fronttienda')
@section('content')
  
<div>
    <h2 class="text-center">Nuestras Tiendas</h2>
</div>
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
                        <div>
                            <a class="btnViewBusinnes" href="{{route('productByBusiness', $rules->name)}}">Ver prouctos</a>
                        </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
    @endsection