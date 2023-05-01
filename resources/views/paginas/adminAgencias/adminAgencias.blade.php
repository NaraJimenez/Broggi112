<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administración de Agencias</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        .card {
            background-color: #025D73;
            color: #fff;
        }

        .scroll {
            overflow-y: scroll;
            height: 645px;
        }
        td{
            background-color: lightgrey !important;
            color: black !important;
        }
    </style>
</head>

<body>
    <div class="card mx-auto my-4">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="my-0 font-weight-bold">Administración de Agencias</h2>
                <a href="{{ route('agencias.crear') }}" class="btn btn-primary">Administrar Agencias</a>
            </div>
        </div>
        <div class="scroll">
            <table class="table table-striped table-bordered">
                <thead class="text-dark fw-bold">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Calle</th>
                        <th>Código Postal</th>
                        <th>Correo</th>
                        <th>Municipio ID</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agencies as $agencia)
                        <tr>
                            <td>{{ $agencia->id }}</td>
                            <td>{{ $agencia->nom }}</td>
                            <td>{{ $agencia->carrer }}</td>
                            <td>{{ $agencia->codi_postal }}</td>
                            <td>{{ $agencia->correu }}</td>
                            <td>{{ $agencia->municipis_id }}</td>
                            <td>
                                <div class="d-flex justify-content-start">
                                    <form method="POST"
                                        action="{{ route('agencias.eliminar', ['id' => $agencia->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $agencia->id }}">
                                        <button class="btn btn-danger d-inline-block" type="submit">
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
    </div>
</body>

</html>
