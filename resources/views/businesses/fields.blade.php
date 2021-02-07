<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('image', ['class' => 'custom-file-input']) !!}
            {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Adress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adress', 'Adress:') !!}
    {!! Form::text('adress', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- Schedule Field -->
<div class="form-group col-sm-6">
    {!! Form::label('schedule', 'Schedule:') !!}
    {!! Form::time('schedule', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 10,'minlength' => 10]) !!}
</div>

<!-- Service Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_id', 'Service Id:') !!}
    {!! Form::select('service_id', $type_serviceItems, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::select('category_id', $categoryItems, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- References Field -->
<div class="form-group col-sm-6">
    {!! Form::label('references', 'References:') !!}
    {!! Form::text('references', null, ['class' => 'form-control']) !!}
</div>

<!-- Owner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('owner', 'Owner:') !!}
    {!! Form::text('owner', null, ['class' => 'form-control']) !!}
</div>