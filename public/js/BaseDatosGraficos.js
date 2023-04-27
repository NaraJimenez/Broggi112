let url = 'http://localhost/apirest/CartesTrucadesController.php'
// Cambiar ruta comprobando original
let i = 0;
// Obtener una referencia al elemento canvas del DOM
const $grafica = document.querySelector("#grafica");
// Las etiquetas son las que van en el eje X.
const etiquetas = ["Llamadas total", "Incidentes total", "Llamadas perdidas", "Abandonadas total"]


document.getElementById("grafico1").addEventListener("click", function () {
    i = 0;
    let grafico1 = new Chart($grafica, {
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

const suma = TipusIncident1.data[0] + TipusIncident2.data[0] + TipusIncident3.data[0] + TipusIncident4.data[0] + TipusIncident5.data[0] + TipusIncident6.data[0] + TipusIncident7.data[0] + TipusIncident8.data[0] + TipusIncident9.data[0] + TipusIncident10.data[0];

const elementoResultado = document.getElementById("totales");
elementoResultado.textContent = suma;


const suma2 = TipusIncident1.data[1] + TipusIncident2.data[1] + TipusIncident3.data[1] + TipusIncident4.data[1] + TipusIncident5.data[1] + TipusIncident6.data[1] + TipusIncident7.data[1] + TipusIncident8.data[1] + TipusIncident9.data[1] + TipusIncident10.data[1];

const elementoResultado2 = document.getElementById("incidentes");
elementoResultado2.textContent = suma2;


const suma3 = TipusIncident1.data[2] + TipusIncident2.data[2] + TipusIncident3.data[2] + TipusIncident4.data[2] + TipusIncident5.data[2] + TipusIncident6.data[2] + TipusIncident7.data[2] + TipusIncident8.data[2] + TipusIncident9.data[2] + TipusIncident10.data[2];

const elementoResultado3 = document.getElementById("perdidas");
elementoResultado3.textContent = suma3;


const suma4 = TipusIncident1.data[3] + TipusIncident2.data[3] + TipusIncident3.data[3] + TipusIncident4.data[3] + TipusIncident5.data[3] + TipusIncident6.data[3] + TipusIncident7.data[3] + TipusIncident8.data[3] + TipusIncident9.data[3] + TipusIncident10.data[3];

const elementoResultado4 = document.getElementById("abandonadas");
elementoResultado4.textContent = suma4;
