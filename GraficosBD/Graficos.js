let url = ''

let i = 0;
// Obtener una referencia al elemento canvas del DOM
const $grafica = document.querySelector("#grafica");
// Las etiquetas son las que van en el eje X. 
const etiquetas = ["Llamadas total", "Incidentes total", "Llamadas perdidas", "Abandonadas total"]
// Podemos tener varios conjuntos de datos. Comencemos con uno
const TipusIncident1 = {
    label: "Llamadas de Incidente 1",
    data: [8000, 7102, 3000, 4500], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(53, 181, 201, 0.2)', // Color de fondo
    borderColor: 'rgba(21, 104, 151, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};

const TipusIncident2 = {
    label: "Llamadas de Incidente 2",
    data: [5000, 6500, 1200, 1050], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(253, 198, 24, 0.2)', // Color de fondo
    borderColor: 'rgba(250, 168, 41, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};

const TipusIncident3 = {
    label: "Llamadas de Incidente 3",
    data: [7000, 2500, 6200, 5050], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(286, 234, 16, 0.2)', // Color de fondo
    borderColor: 'rgba(250, 168, 41, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const TipusIncident4 = {
    label: "Llamadas de Incidente 4",
    data: [4000, 3102, 5600, 1500], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(247, 19, 2, 0.2)', // Color de fondo
    borderColor: 'rgba(196, 15, 0, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};

const TipusIncident5 = {
    label: "Llamadas de Incidente 5",
    data: [4600, 2800, 7200, 4050], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(0, 233, 250, 0.2)', // Color de fondo
    borderColor: 'rgba(0, 171, 184, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};

const TipusIncident6 = {
    label: "Llamadas de Incidente 6",
    data: [7000, 2500, 6200, 5050], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(168, 0, 240, 0.2)', // Color de fondo
    borderColor: 'rgba(168, 0, 240, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const TipusIncident7 = {
    label: "Llamadas de Incidente 7",
    data: [7000, 8500, 6200, 5050], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(240, 104, 0, 0.2)', // Color de fondo
    borderColor: 'rgba(240, 104, 0, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const TipusIncident8 = {
    label: "Llamadas de Incidente 8",
    data: [4000, 3102, 5600, 1500], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(5, 184, 2, 0.2)', // Color de fondo
    borderColor: 'rgba(5, 184, 2, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};

const TipusIncident9 = {
    label: "Llamadas de Incidente 9",
    data: [4600, 7800, 7200, 4050], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(232, 37, 167, 0.2)', // Color de fondo
    borderColor: 'rgba(232, 37, 167, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};

const TipusIncident10 = {
    label: "Llamadas de Incidente 10",
    data: [8620, 6900, 6200, 6050], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(102, 93, 66, 0.2)', // Color de fondo
    borderColor: 'rgba(102, 93, 66, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};



document.getElementById("grafico1").addEventListener("click", function () {
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
});

window.onload = function(){  
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
});

document.getElementById("grafico3").addEventListener("click", function () {
    i = 2;
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
});

document.getElementById("grafico4").addEventListener("click", function () {
    i = 3;
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




// NECESITAMOS UNA API Y UN CONTROLADOR