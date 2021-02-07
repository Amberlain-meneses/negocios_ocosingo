<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $business->name }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $business->image }}</p>
</div>

<!-- Adress Field -->
<div class="col-sm-12">
    {!! Form::label('adress', 'Adress:') !!}
    <p>{{ $business->adress }}</p>
</div>

<!-- Location Field -->
<div class="col-sm-12">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $business->location }}</p>
</div>

<!-- Schedule Field -->
<div class="col-sm-12">
    {!! Form::label('schedule', 'Schedule:') !!}
    <p>{{ $business->schedule }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $business->phone }}</p>
</div>

<!-- Service Id Field -->
<div class="col-sm-12">
    {!! Form::label('service_id', 'Service Id:') !!}
    <p>{{ $business->service_id }}</p>
</div>

<!-- Category Id Field -->
<div class="col-sm-12">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $business->category_id }}</p>
</div>

<!-- References Field -->
<div class="col-sm-12">
    {!! Form::label('references', 'References:') !!}
    <p>{{ $business->references }}</p>
</div>

<!-- Owner Field -->
<div class="col-sm-12">
    {!! Form::label('owner', 'Owner:') !!}
    <p>{{ $business->owner }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $business->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $business->updated_at }}</p>
</div>

