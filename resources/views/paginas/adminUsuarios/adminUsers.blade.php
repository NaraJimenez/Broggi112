
@extends('layout.plantilla')


@section('css-pagina')
<link  href="{{asset('css/adminU.css')}}" rel="stylesheet" type="text/css"> <!-- Estilos CSS para la página -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
@endsection

@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Usuarios</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <div class="page-container">
        <div class="card p-4 mx-auto align-self-center" style="background-color: #11ADC4; color: #fff; border-color:transparent">
                <h1 class="text-start" style="color: #025D73;">Administración de Usuarios</h1>
                <a href="{{ route('usuarios.agregar.mostrar') }}" id="addUser" class="btn btn-primary"><i class="bi bi-plus"></i> Agregar usuario</a>
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
                            <div class="d-flex justify-content-start">
                                <button class="btn btn-primary d-inline-block editar-btn me-2" id="edit" type="button"
                                data-id="{{ $usuario->id }}" data-username="{{ $usuario->username }}"
                                data-nombre="{{ $usuario->nom }}" data-apellido="{{ $usuario->cognoms }}"
                                data-tipo="{{ $usuario->tipus_usuaris_id }}" onclick="window.location.href='{{ route('usuarios.editar', $usuario->id) }}'">
                               <i class="bi bi-pencil"></i> Editar
                               </button>
                                <form method="POST" action="{{ route('usuarios.eliminar', ['id' => $usuario->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $usuario->id }}">
                                    <button class="btn btn-danger d-inline-block" id="delete" type="submit">
                                        <i class="bi bi-trash"></i> Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="button-container">
            <div class="buttons">
                {{-- El botón de Expedientes aparece seleccionado por defecto --}}
                <a class="button"  href="{{ url('/expedientes') }}">Expedientes</a>
                <a class="button-selected" href="{{ url('/adminuser') }}">Usuario</a>
                <a class="button">Agencias</a>
            </div>
          </div>
</body>
</html>
@endsection
