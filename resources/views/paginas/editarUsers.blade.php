<head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="card bg-color border border-0">
            <div class="card-header">
                <h5 class="card-title">Editar usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card-body">
                <form action="{{ route('usuarios.actualizar', ['id' => $usuario->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6 mb-3">
                        <label for="username" class="form-label">Nombre de usuario</label>
                        <input type="text" class="form-control" id="username" name="username"
                            value="{{ $usuario->username }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nom" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nom" name="nom"
                            value="{{ $usuario->nom }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cognoms" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="cognoms" name="cognoms"
                            value="{{ $usuario->cognoms }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tipus_usuaris_id" class="form-label">Tipo de usuario</label>
                        <select class="form-select" id="tipus_usuaris_id" name="tipus_usuaris_id">
                            @foreach ($roles as $rol)
                                <option value="{{ $rol->id }}"
                                    {{ $usuario->tipus_usuaris_id == $rol->id ? 'selected' : '' }}>
                                    {{ $rol->nom }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"
                            value="{{ $usuario->direccion }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="descripcion" class="form-label">Descripción del usuario</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ $usuario->descripcion }}</textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <button type="button" class="btn btn-secondary cancelar-btn"
                            data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">

</div>
</div>
</body>
