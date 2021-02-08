<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Foto de Negocio:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('image', ['class' => 'custom-file-input']) !!}
            {!! Form::label('image', 'Elegir foto', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Adress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adress', 'Dirección:') !!}
    {!! Form::text('adress', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Ubicación:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- Schedule Field -->
<div class="form-group col-sm-6">
    {!! Form::label('schedule', 'Horario de atención:') !!}
    {!! Form::text('schedule', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Número de teléfono:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 10,'minlength' => 10]) !!}
</div>

<!-- Service Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_id', 'Tipo de servicio:') !!}
    {!! Form::select('service_id', $type_serviceItems, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Categoría:') !!}
    {!! Form::select('category_id', $categoryItems, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- References Field -->
<div class="form-group col-sm-6">
    {!! Form::label('references', 'Referencias:') !!}
    {!! Form::text('references', null, ['class' => 'form-control']) !!}
</div>

<!-- Owner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('owner', 'Propietario:') !!}
    {!! Form::text('owner', null, ['class' => 'form-control']) !!}
</div>