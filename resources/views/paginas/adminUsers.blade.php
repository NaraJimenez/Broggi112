<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="bg-primary">
        <div>
            <div>
                <h2>Administración de Usuarios</h2>
            </div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre de usuario</th>
                            <th>Contraseña</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Tipo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <div class="alert alert-primary" role="alert">
                        <tr>
                                <td>{{ $usuario->username }}</td>
                                <td>{{ $usuario->contrasenya }}</td>
                                <td>{{ $usuario->nom }}</td>
                                <td>{{ $usuario->cognoms }}</td>
                                <td>{{ $usuario->tipus_usuaris_id }}</td>
                                <td>
                                    <button>Editar</button>
                                    <button>Eliminar</button>
                                </td>
                            </tr>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
