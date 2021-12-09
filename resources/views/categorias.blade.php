@extends('layouts.frontcategories')
@section('content')
<!-- Aqui empieza el card -->
<h2 class="text-center">Nuestras categorías</h2>


<div class="py-5">
    <div class="container">
        <div class="row">
            @foreach($bussiness as $category)
            <div class="col-md-3">
            <div class="card-category">
                
                <img src="../images/{{$category->image}}">
                <div class="container-category-name">
                  <h6 class="text-center"><b>{{$category->category_name}}</b></h6> 
                  
                </div>
                <div>
                   
                    <a href="{{route('businessByCategory', $category->category_name)}}" class="btnViewCategories">Ver más</a>
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

@endsection