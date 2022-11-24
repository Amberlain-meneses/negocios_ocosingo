@extends('layouts.front')
@section('content')

<div class="py-5">
        <div class="container">
            
                
            <div class="row">
           
                @foreach($product as $p)
                    
                    <div class="col-md-3">
                        <div class="card-business">
                            <img src="../images/{{$p->image}}" alt="">
                            <div class="card-body-business">
                            <h4 class=" title-card-business">{{$p->name}}</h4>
                            <ul class="mb-0">
                            
                        <li>
                            <p class="text-muted">
                                <i class="fas fa-store">
                                    
                                </i>
                                {{$p->price}}
                            </p>
                        </li>
                        <li>
                            <p class="text-muted">
                                <i class="fas fa-map-marker-alt">
                                    
                                </i>
                                {{$p->description}}
                            </p>
                        </li>
                        
                        
                    </ul>
                        
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
@endsection