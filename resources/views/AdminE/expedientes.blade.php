
@extends('layout.plantilla') <!-- Se extiende de la plantilla base -->

@section('title')
  Expedientes 
@endsection

@section('css-pagina')
<link  href="{{asset('css/expedientes.css')}}" rel="stylesheet" type="text/css"> <!-- Estilos CSS para la página -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
@endsection

@section('content')
<div class="admin-background">
  <!-- Popup para actualizar el estado de un expediente -->
  <div id="popup" class="popup"  data-expediente-id="">
    <div class="popup-contents">
      <span class="close" onclick="ocultarPopup()">&times;</span>
      <form action="{{ url ('/expedientes/update')}}" method="POST" class="popup-content">
          @csrf
           <p>Selecciona un color:</p>
          {{-- Ciclo foreach para mostrar los colores --}}
          @foreach ($estados as $estado_opcion)
          <div class="popup-color">
            <span class="popupCircle color-circle" style="background-color:  {{$estado_opcion->colors}}" onclick="setColor(event)" data-color="{{ $estado_opcion->colors }}" data-id="{{ $estado_opcion->id }}"></span>
            <span class="popUpestat">{{ $estado_opcion->estat}} </span>
          </div>
          @endforeach
          {{-- Inputs para enviar los datos del formulario --}}
          <input type="hidden"  id="expediente_id" name="expediente_id" value="">
          <input type="hidden" id="color-input" name="color_id" value="">
          {{-- Envía los datos --}}
          <button type="submit" id="actualizar-btn">Actualizar</button>
      </form>
    </div>
  </div>

  <div id="popupC" class="popup"  data-expediente-id="">
    <div class="popup-contents">
      <span class="close" onclick="ocultarPopup()">&times;</span>
      <p style="color: azure; font-size:20px">Poner foreach y poner todas las cartass de llamada del expediente.</p>
    </div>
  </div>

       {{-- En esta sección contiene un formulario de búsqueda para buscar expedientes según el código de expedientes  --}}
  <div class="header-file">
    <p class="title"> Administración de expedientes</p>
    <input type="text" id="searchInput" onkeyup="buscar()" placeholder="Buscar por estado...">
  </div>

  {{-- Esta sección muestra la tabla con los expedientes --}}
  <div class="admin-content" >
    <table style="border-spacing: 10px 0">
      <thead>
          <tr>
              <th>Id</th>
              <th>Codigo Expediente</th>
              <th colspan="2">Estado</th>
              <th>Carta</th>
          </tr>
      </thead>
      <tbody>
        {{-- Se itera sobre cada expediente para mostrarlos en la tabla --}}
        @foreach ($expedientes as $expediente)
          {{-- Se obtiene el id del expediente --}}
          @php
          $expediente_id = $expediente->id;
          @endphp
          <tr>
            {{-- Se muetra el id del expediente --}}
            <td>{{$expediente->id}}</td>
            {{-- Se muestra el código del expediente --}}
            <td><span>{{$expediente->codi}}</span></td>
            <td colspan="2" class="estados">
              {{-- Se muestra un círculo con el color del estado del expediente y un popup para cambiar el estado --}}
                <span class="circle" data-id="{{ optional($expediente)->id }}" data-id_color="{{ optional($expediente->estat_expedient)->id }}" style="background-color: {{ optional($expediente->estat_expedient)->colors ?? '#ccc' }}" onclick="mostrarPopup(event)" ></span>
              {{-- Se muestra el estado actual del expediente --}}
                <span class="estat">{{ optional($expediente->estat_expedient)->estat }}</span>
            </td>
            {{-- Se muestra una imagen de una carta que abrirá un popup con expedientes --}}
            <td><span  data-idC="{{ optional($expediente)->id }}" onclick="mostrarPopupC(event)"><img src="./img/Carta.png" alt="Carta"></span></td>
          </tr> 
        @endforeach
      </tbody>
    </table>   
</div>
<div class="pagination pagination-style">
  {{ $expedientes->links('pagination::default') }}
</div>
</div> 


{{-- Esta sección muestra los botones de navegación de la página --}}
<div class="button-container">
  <div class="buttons">
      <a class="button" href="{{ url('/adminuser') }}">Usuario</a>
      {{-- El botón de Expedientes aparece seleccionado por defecto --}}
      <a class="button-selected"  href="{{ url('/expedientes') }}">Expedientes</a>
      <a class="button">Agencias</a>
  </div>
</div>

  
@endsection


@section('scripts')
  <script>

//Que no se abra el popup, al abrir la página
window.onload = function() {
  var popup = document.getElementById("popup");
  popup.style.display = "none";
  var popupC = document.getElementById("popupC");
  popupC.style.display = "none";
};


 function mostrarPopup(element) {   
    var popup = document.getElementById("popup");
    popup.style.display = "flex";
    
    // Establecer el expediente_id seleccionado en el popup
    var expediente_id = document.getElementById('expediente_id');
    expediente_id.value = element.target.getAttribute('data-id');
    
    // Establecer el color seleccionado actualmente en el popup
    var colorInput = document.getElementById('color-input');
    var colorCircles = document.querySelectorAll('.color-circle');
    for (var i = 0; i < colorCircles.length; i++) {
      if (colorCircles[i].getAttribute('data-color') === colorInput.value) {
        colorCircles[i].style.backgroundColor = colorInput.value;
      } else {
        colorCircles[i].style.backgroundColor = '';
      }
    }
    
    // Establecer el color en cada circunferencia de color
    var colorCircles = document.querySelectorAll('.color-circle');
    for (var i = 0; i < colorCircles.length; i++) {
      colorCircles[i].style.backgroundColor = colorCircles[i].getAttribute('data-color');
    }
}


  function setColor(element) {
  var circle = event.target;
  var colorInput = document.getElementById('color-input');
  colorInput.value = element.target.getAttribute('data-id');

  var colorCircles = document.querySelectorAll('.color-circle');
  for (var i = 0; i < colorCircles.length; i++) {
    if (colorCircles[i] === element.target) {
      colorCircles[i].style.backgroundColor = element.target.getAttribute('data-color');
    } else {
      colorCircles[i].style.backgroundColor = '';
    }
  }
}
    
//Se oculta el popup
    function ocultarPopup() {
      var popup = document.getElementById("popup");
      popup.style.display = "none";
      var popupC = document.getElementById("popupC");
      popupC.style.display = "none";
    }

    // Filtra el expediente según el código
   
function buscar() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.querySelector("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
  td = tr[i].getElementsByTagName("td")[2];

   // Filtrar por la cuarta columna (Estado del Expediente)
  if (td) {
  txtValue = td.textContent || td.innerText;
  if (txtValue.toUpperCase().indexOf(filter) > -1) {
  tr[i].style.display = "";
  } else {
  tr[i].style.display = "none";
  }
  }
  }
}



function mostrarPopupC(element) {   

  var popupC = document.getElementById("popupC");
    popupC.style.display = "flex";
    
  // Establecer el expediente_id seleccionado en el popup
  var expediente_id = document.getElementById('expediente_id');
    expediente_id.value = element.target.getAttribute('data-idC');
}
  </script>
@endsection

