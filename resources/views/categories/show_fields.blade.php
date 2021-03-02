<!-- Category Name Field -->
<div class="col-sm-12">
    {!! Form::label('category_name', 'Categoría:') !!}
    <p>{{ $category->category_name }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{{ $category->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{{ $category->updated_at }}</p>
</div>

