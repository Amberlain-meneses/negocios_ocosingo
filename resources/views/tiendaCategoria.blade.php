<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Coleccion de tiendas por categorías</h1>
    @foreach($bussiness as $businessCategory)
    <h5>{{$businessCategory->name}}</h5>
    <h5>{{($businessCategory->category->category_name)}}</h5>
    <h5></h5>
    <h5></h5>
    <h5></h5>
    <h5></h5>
    @endforeach
</body>
</html>