@extends('layout.plantilla')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
  <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
  <title>Página de administración</title>
</head>

<body>
  <br>
  <div class="row row-cols-1 row-cols-md-3 g-4 ">
    <div class="col">
      <div class="card h-100 border-estilo" style="width: 230px; height: 100px;">
        <img src="{{ asset("img/usuarios2.png") }}" class="card-img-circle w-75 p-1 rounded mx-auto d-block" alt="..." href="{{ asset('adminUsuarios/adminUsers.blade.php') }}">>
        <div class="card-body">
            <h5 class="card-title">Gestión Usuarios</h5>
            <h3 class="card-title text-warning"style="text-align: center;">{{ $num_usuaris}} Users</h3>
            <p class="card-text">View more</p>
          </div>
        </div>
    </div>
    <div class="col">
      <div class="card h-100 border-estilo" style="width: 230px">
        <img src="{{ asset("img/expedientes2.png") }}" class="card-img-circle w-75 p-1 rounded mx-auto d-block" alt="..." href="{{ asset('adminUsuarios/adminUsers.blade.php') }}">>
        <div class="card-body">
              <h5 class="card-title">Gestión Expedientes</h5>
              <h3 class="card-title text-warning" style="text-align: center;">{{ $num_expedients}} Users</h3>
              <p class="card-text">View more</p>
            </div>
          </div>
        </div>
    <div class="col">
      <div class="card h-100 border-estilo" style="width: 230px">
        <img src="{{ asset("img/agencias2.png") }}" class="card-img-circle w-75 p-1 rounded mx-auto d-block" alt="..." href="{{ asset('adminAgencias/adminUsers.blade.php') }}">>
        <div class="card-body">
          <h5 class="card-title">Gestión Agencias</h5>
          <h3 class="card-title text-warning" style="text-align: center;">{{ $num_agencies}} Users</h3>
          <p class="card-text">View more</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

@endsection