<div class="table-responsive">
    <table class="table" id="businesses-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Foto</th>
        <th>Dirección</th>
        <th>Ubicación</th>
        <th>Horario</th>
        <th>Numero de celular</th>
        <th>Tipo de servicio</th>
        <th>Categoría</th>
        <th>Referencias</th>
        <th>Proietario</th>
                <th colspan="3">Opción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($businesses as $business)
            <tr>
                <td>{{ $business->name }}</td>
            <td>{{ $business->image }}</td>
            <td>{{ $business->adress }}</td>
            <td>{{ $business->location }}</td>
            <td>{{ $business->schedule }}</td>
            <td>{{ $business->phone }}</td>
            <td>{{ $business->service->service_type}}</td>
            <td>{{ $business->category->category_name }}</td>
            <td>{{ $business->references }}</td>
            <td>{{ $business->owner }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['businesses.destroy', $business->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('businesses.show', [$business->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('businesses.edit', [$business->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Desea eliminar el registro')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
