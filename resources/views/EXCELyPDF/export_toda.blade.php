<table>
@if(isset($tablaa[0]))
    @if(($nombre_t=='equipos'))

        <thead>
        <tr><th>Equipos</th></tr>
        </thead>
        <tbody>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>serial</th>
            <th>aquien_vendio</th>
            <th>foto_plaqueta</th>
            <th>al_dia</th>
            <th>fecha_ultimo_mant</th>
        </tr>
        @foreach($tablaa as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->serial }}</td>
                <td>{{ $user->aquien_vendio }}</td>
                <td>{{ $user->foto_plaqueta }}</td>
                <td>{{ $user->al_dia }}</td>
                <td>{{ $user->fecha_ultimo_mant }}</td>
            </tr>
        @endforeach
        </tbody>

    @endif
    @if(($nombre_t=='equipos_mantenimientos'))
        <thead>
        <tr><th>equipos_mantenimientos</th></tr>
        </thead>
        <tbody>
        <tr>
            <th>id</th>
            <th>fecha</th>
            <th>equipo_id</th>
            <th>mantenimiento_id</th>
        </tr>
        @foreach($tablaa as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->fecha }}</td>
                <td>{{ $user->equipo_id }}</td>
                <td>{{ $user->mantenimiento_id }}</td>
            </tr>
        @endforeach
        </tbody>
    @endif
    @if(($nombre_t=='mantenimientos'))
        <thead>
        <tr><th>mantenimientos</th></tr>
        </thead>
        <tbody>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>fecha_programada</th>
            <th>tipo</th>
            <th>procedimiento</th>
            <th>insumos</th>
            <th>repuestos</th>
            <th>activo</th>
        </tr>
        @foreach($tablaa as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->fecha_programada }}</td>
                <td>{{ $user->tipo }}</td>
                <td>{{ $user->procedimiento }}</td>
                <td>{{ $user->insumos }}</td>
                <td>{{ $user->repuestos }}</td>
                <td>{{ $user->activo }}</td>
            </tr>
        @endforeach
        </tbody>
    @endif
    @if(($nombre_t=='mantenimientos_users'))
        <thead>
        <tr><th>mantenimientos</th></tr>
        </thead>
        <tbody>
        <tr>
            <th>id</th>
            <th>equipo_id</th>
            <th>mantenimiento_id</th>
        </tr>
        @foreach($tablaa as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->equipo_id }}</td>
                <td>{{ $user->mantenimiento_id }}</td>
            </tr>
        @endforeach
        </tbody>
    @endif

    @if(($nombre_t=='users'))

        <thead>
        <tr><th>Users</th></tr>
        </thead>
        <tbody>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>email</th>
            <th>creado</th>
            <th>actualizado</th>
        </tr>
        @foreach($tablaa as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
    @endif
@else
    <tr>no hay registros</tr>
@endif
</table>
