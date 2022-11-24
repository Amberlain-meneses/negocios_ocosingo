@if (empty(Auth::user()->business->id))
<input id="business_id" name="business_id" type="hidden" value="0">
@else
<input id="business_id" name="business_id" type="hidden" value="{{Auth::user()->business->id}}">
@endif


<!-- Name Field -->
<div class="form-group col-sm-6">
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

<!-- Price Field -->
<div class="form-group col-sm-3">
    {!! Form::label('price', 'Precio:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Descripción:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}
</div>

<div class="form-group col-sm-3">
    {!! Form::label('business_id', 'Tienda:') !!}
    {!! Form::select('business_id', $storeItems, null, ['class' => 'form-control custom-select']) !!}
</div>