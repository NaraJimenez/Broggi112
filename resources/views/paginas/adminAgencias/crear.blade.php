<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afegir Agencia</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <div class="card mx-auto bg-light" style="max-width: 500px;">
        <div class="card-body p-3">
            <h5 class="card-title">Agregar Agencia</h5>
            <form method="GET" action="{{ route('agencias.afegir') }}">
                @csrf
                <div class="form-group">
                    <label for="nom">Nombre</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="carrer">Calle</label>
                    <input type="text" name="carrer" class="form-control">
                </div>
                <div class="form-group">
                    <label for="codi_postal">Código Postal</label>
                    <input type="text" name="codi_postal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="correu">Correo</label>
                    <input type="email" name="correu" class="form-control">
                </div>
                <div class="form-group">
                    <label for="municipis_id">Municipio</label>
                    <select name="municipis_id" class="form-control">
                        @foreach ($municipis as $municipi)
                        <option value="{{ $municipi->id }}">{{ $municipi->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Agencia</button>
                <a href="{{ route('adminagencias') }}" class="btn btn-secondary" role="button">Cerrar</a>
            </form>
        </div>
    </div>

</body>
</html>
