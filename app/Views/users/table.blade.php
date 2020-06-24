<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Correo electrónico</th>
                <th>Estado</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['surnames'] }}</td>
                <td>{{ $user['phone'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>
                    @if ($user['status'] == true)
                        <span class="label label-success">Activo</span>
                    @else
                        <span class="label label-danger">Desactivo</span>
                    @endif
                </td>
                <td>
                    <form action="{{ base_url('users/destroy') }}/{{ $user['id'] }}" method="POST">
                        <div class='btn-group'>
                            <a href="{{ base_url('users/show') }}/{{ $user['id'] }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ base_url('users/edit') }}/{{ $user['id'] }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('¿Está seguro que desea eliminar el Cliente?"><i class="glyphicon glyphicon-trash"></i></button>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
