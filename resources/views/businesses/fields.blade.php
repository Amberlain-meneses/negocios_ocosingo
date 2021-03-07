<input id="user_id" name="user_id" type="hidden" value="{{Auth::user()->id}}">

<!-- Name Field -->
<div class="form-group col-sm-3">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-3">
    {!! Form::label('image', 'Foto de portada:') !!}
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
<div class="form-group col-sm-4">
    {!! Form::label('location', 'Ubicación:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- Schedule Field -->
<div class="form-group col-sm-8">
    {!! Form::label('schedule', 'Horario de atención:') !!}
    <input id="schedule" name="schedule" type="hidden"/>
    <div class="container">
        <div class="row">
            <div class="col">
                <input type="text" id="hour_start" class="form-control" />
            </div>
            <div class="col">
                <input type="text" id="hour_end" class="form-control" />
            </div>
        </div>
    </div>
</div>

<!-- Phone Field -->
<div class="form-group col-sm-4">
    {!! Form::label('phone', 'Número de teléfono:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 10,'minlength' => 10]) !!}
</div>

<!-- Service Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('service_id', 'Tipo de servicio:') !!}
    {!! Form::select('service_id', $type_serviceItems, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Category Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('category_id', 'Categoría:') !!}
    {!! Form::select('category_id', $categoryItems, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- References Field -->
<div class="form-group col-sm-12">
    {!! Form::label('references', 'Referencias:') !!}
    {!! Form::text('references', null, ['class' => 'form-control']) !!}
</div>