@extends('layout.plantilla')
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Usuarios</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        table {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            overflow-y: scroll;
            max-height: 500px;
            /* ajusta esta propiedad según tus necesidades */
        }


        th,
        td {
            border: none;
        }

        tbody tr {
            background-color: #fff;
            color: #025D73;
            margin-bottom: 10px;
            /* Agregar margen inferior */
            border-radius: 10px;
        }

        th {
            background-color: #24BDFF !important;
            color: #fff !important;
        }

        tbody tr:nth-child(odd) {
            background-color: #fff;
        }

        dialog {
            background-color: #35b5c9;
        }

        .bg-color {
            background-color: #35b5c9;
        }
    </style>
</head>

<body class="bg-light">
    <div class="page-container container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="background-color: #11ADC4; color: #fff; width: 100%;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="text-start" style="color: #025D73;">Administración de Usuarios</h1>
                <button class="btn btn-primary agregar-btn" type="button">
                    <i class="bi bi-plus"></i> Agregar usuario
                </button>
            </div>
            <table class="table table-striped table-bordered">
                <thead class="bg-light text-dark fw-bold">
                    <tr>
                        <th>ID</th>
                        <th>Nombre de usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->username }}</td>
                            <td>{{ $usuario->nom }}</td>
                            <td>{{ $usuario->cognoms }}</td>
                            <td>{{ $usuario->tipus_usuaris_id }}</td>
                            <td>
                                <button class="btn btn-primary d-inline-block editar-btn" type="button"
                                    data-id="{{ $usuario->id }}" data-username="{{ $usuario->username }}"
                                    data-nombre="{{ $usuario->nom }}" data-apellido="{{ $usuario->cognoms }}"
                                    data-tipo="{{ $usuario->tipus_usuaris_id }}" data-toggle="modal"
                                    data-target="#modalEditar">
                                    <i class="bi bi-pencil"></i> Editar
                                </button>
                                <form action="{{ route('usuarios.eliminar', ['id' => $usuario->id]) }}" method="POST"
                                    class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</body>
<script></script>
</html>
