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
          <h5 class="card-title">Llamadas total <strong><span id="totales">{{ $datos }}0</span></strong></h5>
        </div>
      </div>
    </div>
    <div class="col" id="grafico2">
      <div class="card w-50 border-estilo2 btn">
        <div class="card-body">
          <h5 class="card-title">Incidentes total <strong><span id="incidentes">{{ $datostotal }}0</span></strong></h5>
        </div>
      </div>
    </div>
    <div class="col" id="grafico3">
      <div class="card w-50 border-estilo2 btn">
        <div class="card-body">
          <h5 class="card-title">Llamadas Barcelona <strong><span id="perdidas">{{ $datosBCN }}0</span></strong></h5>
        </div>
      </div>
    </div>
    <div class="col" id="grafico4">
      <div class="card w-50 border-estilo2 btn">
        <div class="card-body">
          <h5 class="card-title">Llamadas otras provincias <strong><span id="abandonadas">{{ $datosprov }}0</span></strong></h5>
        </div>
      </div>
    </div>
  </div>
  <div class="posgrafica">
    <canvas id="grafica"></canvas>
  </div>

  <script src="{{ asset('js/Graficos.js') }}">

//   LLAMADOS DESDE LA BASE DE DATOS, LOS MAS largos SON DATOS PUESTOS A MANO

document.getElementById("grafico1").addEventListener("click", function () {
    i = 0;
    let grafico1 = new Chart($grafica, {
        type: 'bar',// Tipo de gráfica
        data: {
            label: etiquetas[i],
            datasets: [
                label: nombres,
                datasets: [{
                    label: "Llamadas total",
                    data: datos,

                }]
            ]
        },
    });
});

window.onload = function () {
    i = 0;
    let grafico1 = new Chart($grafica, {
        type: 'bar',// Tipo de gráfica
        data: {
            label: etiquetas[i],
            datasets: [
                label: nombres,
                datasets: [{
                    label: "Llamadas total",
                    data: datos,

                }]
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
                label: nombres,
                datasets: [{
                    label: "Incidèncias totales",
                    data: datostotal,

                }]
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
                label: nombres,
                datasets: [{
                    label: "Llamadas Barcelona",
                    data: datosBCN,

                }]
            ]
        },
    });
});

document.getElementById("grafico4").addEventListener("click", function () {
    i = 3;
    let grafico4 = new Chart($grafica, {
        type: 'bar',// Tipo de gráfica
        data: {
            label: etiquetas[i],
            datasets: [
                label: nombres,
                datasets: [{
                    label: "Llamadas otras Provincias",
                    data: datosProv,

                }]
            ]
        },
    });
});


//    Cambiar archivo por el de BBDD
    let prueba;
    let nombres[];
    let datos [];
    let datostotal [];
    let datosBCN [];
    let datosprov [];

fetch('/Broggi112/public/api/graficos')
    .then(response => response.json())
    .then(data => {
        prueba = data;

        prueba.forEach(function(prueba){
            nombres.push(prueba.nom);  //datos de la API
            datos.push(prueba.numeros);
        });
    });


    //Graficos totales
fetch('/Broggi112/public/api/graficos')
    .then(response => response.json())
    .then(data => {
        prueba = data;

        prueba.forEach(function(prueba){
            nombres.push(prueba.nom);  //datos de la API
            datostotales.push(prueba.numeros);
        });
    });

    // Graficos de Barcelona

fetch('/Broggi112/public/api/graficos')
    .then(response => response.json())
    .then(data => {
        prueba = data;

        prueba.forEach(function(prueba){
            nombres.push(prueba.nom);  //datos de la API
            datosBCN.push(prueba.numeros);
        });
    });

    // Graficos diferentes de Barcelona

fetch('/Broggi112/public/api/graficos')
    .then(response => response.json())
    .then(data => {
        prueba = data;

        prueba.forEach(function(prueba){
            nombres.push(prueba.nom);  //datos de la API
            datosProv.push(prueba.numeros);
        });
    });



const mostrar = (incidencias) => {
    incidencias.forEach(element => {
        grafica1.data['labels'].push(element.definicio)
        // CAMBIAR LOS ELEMENTOS QUE COGE. Y el myChart deberia asignarse el nombre de grafica directamente
        grafica1.data['datasets'][0].data.push(element.nom)
    });
    console.log(grafica1.data)
}


// Grafico Incidencias totales
const mostrar0 = (incidentestotales) => {
    incidentestotales.forEach(element => {
        grafica2.data['labels'].push(element.definicio)
        // CAMBIAR LOS ELEMENTOS QUE COGE. Y el myChart deberia asignarse el nombre de grafica directamente
        grafica2.data['datasets'][0].data.push(element.nom)
    });
    console.log(grafica3.data)
}


// Grafico BCN
const mostrar1 = (incidentesBCN) => {
    incidentesBCN.forEach(element => {
        grafica3.data['labels'].push(element.definicio)
        // CAMBIAR LOS ELEMENTOS QUE COGE. Y el myChart deberia asignarse el nombre de grafica directamente
        grafica3.data['datasets'][0].data.push(element.nom)
    });
    console.log(grafica3.data)
}


// Grafico OTRAS PROVINCIAS
const mostrar2 = (incidentesProv) => {
    incidentesProv.forEach(element => {
        grafica4.data['labels'].push(element.definicio)
        // CAMBIAR LOS ELEMENTOS QUE COGE. Y el myChart deberia asignarse el nombre de grafica directamente
        grafica4.data['datasets'][0].data.push(element.nom)
    });
    console.log(grafica4.data)
}
  </script>
</body>


</html>
