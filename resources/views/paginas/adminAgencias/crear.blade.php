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
    <div class="card mx-auto" style="max-width: 500px;display: flex; justify-content:center; margin-top:100px;border-radius:5%; border-color:black">
        <div class="card-body p-3" style="max-width: 500px;  background-color: #76DAE4; border-radius:5%;">
            <h5 class="card-title" style="display: flex; justify-content:center; color:white;">Agregar Agencia</h5>
            <form method="GET" action="{{ route('agencias.afegir') }}">
                @csrf
                <div class="form-group" style="margin-bottom: 20px; color:white; font-weight:bolder">
                    <label for="nom">Nombre</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group" style="margin-bottom: 20px; color:white; font-weight:bolder">
                    <label for="carrer">Calle</label>
                    <input type="text" name="carrer" class="form-control">
                </div>
                <div class="form-group" style="margin-bottom: 20px; color:white; font-weight:bolder">
                    <label for="codi_postal">Código Postal</label>
                    <input type="text" name="codi_postal" class="form-control">
                </div>
                <div class="form-group" style="margin-bottom: 20px; color:white; font-weight:bolder">
                    <label for="correu">Correo</label>
                    <input type="email" name="correu" class="form-control">
                </div>
                <div class="form-group" style="margin-bottom: 20px; color:white; font-weight:bolder">
                    <label for="municipis_id">Municipio</label>
                    <select name="municipis_id" class="form-control">
                        @foreach ($municipis as $municipi)
                        <option value="{{ $municipi->id }}">{{ $municipi->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <button style="background-color: #E33386; color:white;" type="submit" class="btn">Agregar Agencia</button>
                <a  style="background-color: white; border-color:#E33386; border: solid 1px; color:#E33386" href="{{ route('adminagencias') }}" class="btn" role="button">Cerrar</a>
            </form>
        </div>
    </div>

</body>
</html>
