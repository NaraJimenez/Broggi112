@extends('layout.plantilla')
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
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
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
          <h5 class="card-title">Llamadas Barcelona <strong><span id="perdidas">0</span></strong></h5>
        </div>
      </div>
    </div>
    <div class="col" id="grafico4">
      <div class="card w-50 border-estilo2 btn">
        <div class="card-body">
          <h5 class="card-title">Llamadas otras provincias <strong><span id="abandonadas">0</span></strong></h5>
        </div>
      </div>
    </div>
  </div>
  <div class="posgrafica">
    <canvas id="grafica"></canvas>
  </div>

  <script src="{{ asset('js/Graficos.js') }}">

document.getElementById("grafico1").addEventListener("click", function () {
    i = 0;
    let grafico1 = new Chart($grafica, {
        type: 'bar',// Tipo de gráfica
        data: {
            label: etiquetas[i],
            datasets: [
                label: nombres,
                datasets: [{
                    label: "Incidentes totales",
                    data: datos,

                }]
            ]
        },
    });
});

window.onload = function () {
    i = 0;
    new Chart($grafica, {
        type: 'bar',// Tipo de gráfica
        data: {
            label: etiquetas[i],
            datasets: [
                { label: TipusIncident1.label, data: [TipusIncident1.data[i]], backgroundColor: TipusIncident1.backgroundColor, borderColor: TipusIncident1.borderColor, borderWidth: TipusIncident1.borderWidth },
                { label: TipusIncident2.label, data: [TipusIncident2.data[i]], backgroundColor: TipusIncident2.backgroundColor, borderColor: TipusIncident2.borderColor, borderWidth: TipusIncident2.borderWidth },
                { label: TipusIncident3.label, data: [TipusIncident3.data[i]], backgroundColor: TipusIncident3.backgroundColor, borderColor: TipusIncident3.borderColor, borderWidth: TipusIncident3.borderWidth },
                { label: TipusIncident4.label, data: [TipusIncident4.data[i]], backgroundColor: TipusIncident4.backgroundColor, borderColor: TipusIncident4.borderColor, borderWidth: TipusIncident4.borderWidth },
                { label: TipusIncident5.label, data: [TipusIncident5.data[i]], backgroundColor: TipusIncident5.backgroundColor, borderColor: TipusIncident5.borderColor, borderWidth: TipusIncident5.borderWidth },
                { label: TipusIncident6.label, data: [TipusIncident6.data[i]], backgroundColor: TipusIncident6.backgroundColor, borderColor: TipusIncident6.borderColor, borderWidth: TipusIncident6.borderWidth },
                { label: TipusIncident7.label, data: [TipusIncident7.data[i]], backgroundColor: TipusIncident7.backgroundColor, borderColor: TipusIncident7.borderColor, borderWidth: TipusIncident7.borderWidth },
                { label: TipusIncident8.label, data: [TipusIncident8.data[i]], backgroundColor: TipusIncident8.backgroundColor, borderColor: TipusIncident8.borderColor, borderWidth: TipusIncident8.borderWidth },
                { label: TipusIncident9.label, data: [TipusIncident9.data[i]], backgroundColor: TipusIncident9.backgroundColor, borderColor: TipusIncident9.borderColor, borderWidth: TipusIncident9.borderWidth },
                { label: TipusIncident10.label, data: [TipusIncident10.data[i]], backgroundColor: TipusIncident10.backgroundColor, borderColor: TipusIncident10.borderColor, borderWidth: TipusIncident10.borderWidth },
            ]
        },
    });
};


document.getElementById("grafico2").addEventListener("click", function () {
    i = 1;
    let grafico2 = new Chart($grafica, {
        type: 'bar',// Tipo de gráfica
        data: {
            label: etiquetas[i],
            datasets: [
                { label: TipusIncident1.label, data: [TipusIncident1.data[i]], backgroundColor: TipusIncident1.backgroundColor, borderColor: TipusIncident1.borderColor, borderWidth: TipusIncident1.borderWidth },
                { label: TipusIncident2.label, data: [TipusIncident2.data[i]], backgroundColor: TipusIncident2.backgroundColor, borderColor: TipusIncident2.borderColor, borderWidth: TipusIncident2.borderWidth },
                { label: TipusIncident3.label, data: [TipusIncident3.data[i]], backgroundColor: TipusIncident3.backgroundColor, borderColor: TipusIncident3.borderColor, borderWidth: TipusIncident3.borderWidth },
                { label: TipusIncident4.label, data: [TipusIncident4.data[i]], backgroundColor: TipusIncident4.backgroundColor, borderColor: TipusIncident4.borderColor, borderWidth: TipusIncident4.borderWidth },
                { label: TipusIncident5.label, data: [TipusIncident5.data[i]], backgroundColor: TipusIncident5.backgroundColor, borderColor: TipusIncident5.borderColor, borderWidth: TipusIncident5.borderWidth },
                { label: TipusIncident6.label, data: [TipusIncident6.data[i]], backgroundColor: TipusIncident6.backgroundColor, borderColor: TipusIncident6.borderColor, borderWidth: TipusIncident6.borderWidth },
                { label: TipusIncident7.label, data: [TipusIncident7.data[i]], backgroundColor: TipusIncident7.backgroundColor, borderColor: TipusIncident7.borderColor, borderWidth: TipusIncident7.borderWidth },
                { label: TipusIncident8.label, data: [TipusIncident8.data[i]], backgroundColor: TipusIncident8.backgroundColor, borderColor: TipusIncident8.borderColor, borderWidth: TipusIncident8.borderWidth },
                { label: TipusIncident9.label, data: [TipusIncident9.data[i]], backgroundColor: TipusIncident9.backgroundColor, borderColor: TipusIncident9.borderColor, borderWidth: TipusIncident9.borderWidth },
                { label: TipusIncident10.label, data: [TipusIncident10.data[i]], backgroundColor: TipusIncident10.backgroundColor, borderColor: TipusIncident10.borderColor, borderWidth: TipusIncident10.borderWidth },
            ]
        },
    });
});

document.getElementById("grafico3").addEventListener("click", function () {
    i = 2;
    let grafico3 = new Chart($grafica, {
        type: 'bar',// Tipo de gráfica
        data: {
            label: etiquetas[i],
            datasets: [
                { label: TipusIncident1.label, data: [TipusIncident1.data[i]], backgroundColor: TipusIncident1.backgroundColor, borderColor: TipusIncident1.borderColor, borderWidth: TipusIncident1.borderWidth },
                { label: TipusIncident2.label, data: [TipusIncident2.data[i]], backgroundColor: TipusIncident2.backgroundColor, borderColor: TipusIncident2.borderColor, borderWidth: TipusIncident2.borderWidth },
                { label: TipusIncident3.label, data: [TipusIncident3.data[i]], backgroundColor: TipusIncident3.backgroundColor, borderColor: TipusIncident3.borderColor, borderWidth: TipusIncident3.borderWidth },
                { label: TipusIncident4.label, data: [TipusIncident4.data[i]], backgroundColor: TipusIncident4.backgroundColor, borderColor: TipusIncident4.borderColor, borderWidth: TipusIncident4.borderWidth },
                { label: TipusIncident5.label, data: [TipusIncident5.data[i]], backgroundColor: TipusIncident5.backgroundColor, borderColor: TipusIncident5.borderColor, borderWidth: TipusIncident5.borderWidth },
                { label: TipusIncident6.label, data: [TipusIncident6.data[i]], backgroundColor: TipusIncident6.backgroundColor, borderColor: TipusIncident6.borderColor, borderWidth: TipusIncident6.borderWidth },
                { label: TipusIncident7.label, data: [TipusIncident7.data[i]], backgroundColor: TipusIncident7.backgroundColor, borderColor: TipusIncident7.borderColor, borderWidth: TipusIncident7.borderWidth },
                { label: TipusIncident8.label, data: [TipusIncident8.data[i]], backgroundColor: TipusIncident8.backgroundColor, borderColor: TipusIncident8.borderColor, borderWidth: TipusIncident8.borderWidth },
                { label: TipusIncident9.label, data: [TipusIncident9.data[i]], backgroundColor: TipusIncident9.backgroundColor, borderColor: TipusIncident9.borderColor, borderWidth: TipusIncident9.borderWidth },
                { label: TipusIncident10.label, data: [TipusIncident10.data[i]], backgroundColor: TipusIncident10.backgroundColor, borderColor: TipusIncident10.borderColor, borderWidth: TipusIncident10.borderWidth },
            ]
        },
    });
});

document.getElementById("grafico4").addEventListener("click", function () {
    i = 3;
    // Asignar nombre de grafico 4 para cogerlo para la BD
    let grafico4 = new Chart($grafica, {
        type: 'bar',// Tipo de gráfica
        data: {
            label: etiquetas[i],
            datasets: [
                { label: TipusIncident1.label, data: [TipusIncident1.data[i]], backgroundColor: TipusIncident1.backgroundColor, borderColor: TipusIncident1.borderColor, borderWidth: TipusIncident1.borderWidth },
                { label: TipusIncident2.label, data: [TipusIncident2.data[i]], backgroundColor: TipusIncident2.backgroundColor, borderColor: TipusIncident2.borderColor, borderWidth: TipusIncident2.borderWidth },
                { label: TipusIncident3.label, data: [TipusIncident3.data[i]], backgroundColor: TipusIncident3.backgroundColor, borderColor: TipusIncident3.borderColor, borderWidth: TipusIncident3.borderWidth },
                { label: TipusIncident4.label, data: [TipusIncident4.data[i]], backgroundColor: TipusIncident4.backgroundColor, borderColor: TipusIncident4.borderColor, borderWidth: TipusIncident4.borderWidth },
                { label: TipusIncident5.label, data: [TipusIncident5.data[i]], backgroundColor: TipusIncident5.backgroundColor, borderColor: TipusIncident5.borderColor, borderWidth: TipusIncident5.borderWidth },
                { label: TipusIncident6.label, data: [TipusIncident6.data[i]], backgroundColor: TipusIncident6.backgroundColor, borderColor: TipusIncident6.borderColor, borderWidth: TipusIncident6.borderWidth },
                { label: TipusIncident7.label, data: [TipusIncident7.data[i]], backgroundColor: TipusIncident7.backgroundColor, borderColor: TipusIncident7.borderColor, borderWidth: TipusIncident7.borderWidth },
                { label: TipusIncident8.label, data: [TipusIncident8.data[i]], backgroundColor: TipusIncident8.backgroundColor, borderColor: TipusIncident8.borderColor, borderWidth: TipusIncident8.borderWidth },
                { label: TipusIncident9.label, data: [TipusIncident9.data[i]], backgroundColor: TipusIncident9.backgroundColor, borderColor: TipusIncident9.borderColor, borderWidth: TipusIncident9.borderWidth },
                { label: TipusIncident10.label, data: [TipusIncident10.data[i]], backgroundColor: TipusIncident10.backgroundColor, borderColor: TipusIncident10.borderColor, borderWidth: TipusIncident10.borderWidth },
            ]
        },
    });
});


//    Cambiar archivo por el de BBDD
    let prueba;
    let nombres[];
    let datos [];

fetch('/EMT/public/api/graficos')
    .then(response => response.json())
    .then(data => {
        prueba = data;

        prueba.forEach(function(prueba){
            nombres.push(prueba.nom);  //datos de la API
            datos.push(prueba.numeros);
        });
    }
    )
const mostrar = (incidencias) => {
    incidencias.forEach(element => {
        grafica1.data['labels'].push(element.definicio)
        // CAMBIAR LOS ELEMENTOS QUE COGE. Y el myChart deberia asignarse el nombre de grafica directamente
        grafica1.data['datasets'][0].data.push(element.nom)
    });
    console.log(grafica1.data)
}
  </script>
</body>


</html>
