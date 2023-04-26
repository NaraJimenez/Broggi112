// //Que no se abra el popup, al abrir la página
// window.onload = function() {
//     var popup = document.getElementById("popup");
//     popup.style.display = "none";
// };


// function mostrarPopup(element) {
//     var popup = document.getElementById("popup");
//     popup.style.display = "flex";

//     // Establecer el expediente_id seleccionado en el popup
//     var expediente_id = document.getElementById('expediente_id');
//     expediente_id.value = element.target.getAttribute('data-id');

//     // Establecer el color seleccionado actualmente en el popup
//     var colorInput = document.getElementById('color-input');
//     var colorCircles = document.querySelectorAll('.color-circle');
//     for (var i = 0; i < colorCircles.length; i++) {
//         if (colorCircles[i].getAttribute('data-color') === colorInput.value) {
//             colorCircles[i].style.backgroundColor = colorInput.value;
//         } else {
//             colorCircles[i].style.backgroundColor = '';
//         }
//     }

//     // Establecer el color en cada circunferencia de color
//     var colorCircles = document.querySelectorAll('.color-circle');
//     for (var i = 0; i < colorCircles.length; i++) {
//         colorCircles[i].style.backgroundColor = colorCircles[i].getAttribute('data-color');
//     }
// }


// function setColor(element) {
//     var colorInput = document.getElementById('color-input');
//     colorInput.value = element.target.getAttribute('data-id');
//     var colorInput = document.getElementById('color-input');
//     colorInput.value = element.target.getAttribute('data-id');

//     var colorCircles = document.querySelectorAll('.color-circle');
//     for (var i = 0; i < colorCircles.length; i++) {
//         colorCircles[i].style.backgroundColor = '';
//     }
//     element.style.backgroundColor = element.target.getAttribute('data-color');
// }

// //Se oculta el popup
// function ocultarPopup() {
//     var popup = document.getElementById("popup");
//     popup.style.display = "none";
// }

// // Filtra el expediente según el código
// function buscar() {
//     var input, filter, table, tr, td, i, txtValue;
//     input = document.getElementById("searchInput");
//     filter = input.value.toUpperCase();
//     table = document.querySelector("table");
//     tr = table.getElementsByTagName("tr");
//     for (i = 0; i < tr.length; i++) {
//         td = tr[i].getElementsByTagName("td")[1]; // Filtrar por la segunda columna (Codigo Expediente)
//         if (td) {
//             txtValue = td.textContent || td.innerText;
//             if (txtValue.toUpperCase().indexOf(filter) > -1) {
//                 tr[i].style.display = "";
//             } else {
//                 tr[i].style.display = "none";
//             }
//         }
//     }
// }