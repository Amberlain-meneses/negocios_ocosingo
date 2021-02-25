<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $role->name }}</p>
</div>

<!-- Permissions Field -->
<div class="col-sm-12">
    {!! Form::label('permissions', 'Permisos:') !!}
    <p>{{implode(" ", $role->getPermissionNames()->toArray())}}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{{ $role->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Modificado el:') !!}
    <p>{{ $role->updated_at }}</p>
</div>

