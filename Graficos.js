// Obtener una referencia al elemento canvas del DOM
const $grafica = document.querySelector("#grafica");
// Las etiquetas son las que van en el eje X. 
const etiquetas = ["Llamadas total", "Incidentes total", "Llamadas perdidas", "Abandonadas total"]
// Podemos tener varios conjuntos de datos. Comencemos con uno
const datosLlamadasFijos = {
    label: "Llamadas por mes en Fijos",
    data: [8000, 7102, 3000, 4500], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(53, 181, 201, 0.2)', // Color de fondo
    borderColor: 'rgba(21, 104, 151, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};

const datosLlamadasMobiles = {
    label: "Llamadas por mes en Mobiles",
    data: [5000, 6500, 1200, 1050], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(253, 198, 24, 0.2)', // Color de fondo
    borderColor: 'rgba(250, 168, 41, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};

new Chart($grafica, {
    type: 'bar',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosLlamadasFijos,
            datosLlamadasMobiles,
            // Aquí más datos de informacion de llamadas si es necesario...
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
});

const suma = datosLlamadasFijos.data[0] + datosLlamadasMobiles.data[0];

const elementoResultado = document.getElementById("totales");
elementoResultado.textContent = suma;


const suma2 = datosLlamadasFijos.data[1] + datosLlamadasMobiles.data[1];

const elementoResultado2 = document.getElementById("incidentes");
elementoResultado2.textContent = suma2;


const suma3 = datosLlamadasFijos.data[2] + datosLlamadasMobiles.data[2];

const elementoResultado3 = document.getElementById("perdidas");
elementoResultado3.textContent = suma3;


const suma4 = datosLlamadasFijos.data[3] + datosLlamadasMobiles.data[3];

const elementoResultado4 = document.getElementById("abandonadas");
elementoResultado4.textContent = suma4;