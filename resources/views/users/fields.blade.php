<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Teléfono:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Contraseña:') !!}
    {!! Form::password('password', ['class' => 'form-control','minlength' => 6]) !!}
</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', 'Rol:') !!}
    <!-- isset($user) Indicamos que el usuario seleccionado nos muestre el rol que tiene-->
    {!! Form::select('role', $roleItems, isset($user) ? $user->roles()->pluck('name'):[], ['class' => 'form-control custom-select']) !!}
</div>
