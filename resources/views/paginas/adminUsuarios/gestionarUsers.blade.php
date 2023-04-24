<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if ($editar == 1)
        <title>Editar usuario</title>
    @elseif($editar == 0)
        <title>Crear usuario</title>
    @endif
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        /* Agregamos un estilo para el color del título */
        .titulo {
            color: white;
        }

        .campos {
            border: 1px solid black;
            border-radius: 20px;
            padding: 10px;
        }

        .img-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="card mx-auto" style="background-color: #025D73; padding: 20px;">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center p-3">
                    <img src="{{ asset('/img/perfiladm.png') }}" alt="Imagen de usuario"
                        style="width: 250px; height: 250px;">
                </div>
                <div class="col-md-8">
                    @if ($editar == 1)
                        <h1 class="titulo">@yield('titulo', 'Editar usuario')</h1>
                        <div class="campos">
                            <form action="{{ route('usuarios.actualizar', $usuario->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="nom" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nom" name="nom"
                                        value="{{ $usuario->nom }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="cognoms" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="cognoms" name="cognoms"
                                        value="{{ $usuario->cognoms }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Nombre de usuario</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        value="{{ $usuario->username }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tipus_usuaris_id" class="form-label">Tipo de usuario</label>
                                    <select class="form-select" aria-label="Tipo de usuario" name="tipus_usuaris_id"
                                        id="tipus_usuaris_id" required>
                                        @foreach ($roles as $rol)
                                            <option value="{{ $rol->id }}"
                                                @if ($usuario->tipus_usuaris_id == $rol->id) selected @endif>
                                                {{ $rol->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">@yield('boton', 'Actualizar')</button>
                                <a href="{{ route('adminUser') }}" class="btn btn-secondary">Volver</a>
                            </form>
                        </div>
                    @elseif($editar == 0)
                        <h1 class="titulo">@yield('titulo', 'Crear usuario')</h1>
                        <div class="campos">
                            <form action="{{ route('usuarios.agregar') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nom" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nom" name="nom" required>
                                </div>
                                <div class="mb-3">
                                    <label for="cognoms" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="cognoms" name="cognoms" required>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Nombre de usuario</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tipus_usuaris_id" class="form-label">Tipo de usuario</label>
                                    <select class="form-select" aria-label="Tipo de usuario" name="tipus_usuaris_id"
                                        id="tipus_usuaris_id" required>
                                        @foreach ($roles as $rol)
                                            <option value="{{ $rol->id }}">{{ $rol->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Agregar</button>
                                <a href="{{ route('adminUser') }}" class="btn btn-secondary">Volver</a>
                            </form>
                        </div>
                    @endif
</body>

</html>
