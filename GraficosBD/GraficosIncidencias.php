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
  <link rel="stylesheet" href="estilo.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
  <title>Página de administración</title>
</head>

<body>
  <div class="row row-cols-1 row-cols-md-4 g-5" style="width: auto;">
    <div class="col" id="grafico1">
      <div class="card w-50 border-estilo2 btn">
        <div class="card-body">
          <h5 class="card-title">Llamadas total <strong><span id="totales">0</span></strong></h5>
        </div>
      </div>
    </div>
    <div class="col" id="grafico2">
      <div class="card w-50 border-estilo2 btn">
        <div class="card-body">
          <h5 class="card-title">Incidentes total <strong><span id="incidentes">0</span></strong></h5>
        </div>
      </div>
    </div>
    <div class="col" id="grafico3">
      <div class="card w-50 border-estilo2 btn">
        <div class="card-body">
          <h5 class="card-title">Llamadas perdidas <strong><span id="perdidas">0</span></strong></h5>
        </div>
      </div>
    </div>
    <div class="col" id="grafico4">
      <div class="card w-50 border-estilo2 btn">
        <div class="card-body">
          <h5 class="card-title">Total abandonadas <strong><span id="abandonadas">0</span></strong></h5>
        </div>
      </div>
    </div>
  </div>
  <div class="posgrafica">
    <canvas id="grafica"></canvas>
  </div>
  <script src="Graficos.js"> 
  // Cambiar archivo por el de BBDD
  </script>
</body>


</html>