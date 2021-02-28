<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $business->name }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Foto de negocio:') !!}
    <p>{{ $business->image }}</p>
</div>

<!-- Adress Field -->
<div class="col-sm-12">
    {!! Form::label('adress', 'Dirección:') !!}
    <p>{{ $business->adress }}</p>
</div>

<!-- Location Field -->
<div class="col-sm-12">
    {!! Form::label('location', 'Ubicación:') !!}
    <p>{{ $business->location }}</p>
</div>

<!-- Schedule Field -->
<div class="col-sm-12">
    {!! Form::label('schedule', 'Horario de atención:') !!}
    <p>{{ $business->schedule }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Número de teléono:') !!}
    <p>{{ $business->phone }}</p>
</div>

<!-- Service Id Field -->
<div class="col-sm-12">
    {!! Form::label('service_id', 'Tipo de servicio:') !!}
    <p>{{ $business->service_id }}</p>
</div>

<!-- Category Id Field -->
<div class="col-sm-12">
    {!! Form::label('category_id', 'Categoría:') !!}
    <p>{{ $business->category_id }}</p>
</div>

<!-- References Field -->
<div class="col-sm-12">
    {!! Form::label('references', 'Referencias:') !!}
    <p>{{ $business->references }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Registrado el:') !!}
    <p>{{ $business->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{{ $business->updated_at }}</p>
</div>

