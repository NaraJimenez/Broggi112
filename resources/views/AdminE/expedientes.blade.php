
@extends('layout.plantilla') <!-- Se extiende de la plantilla base -->

@section('title')
  Expedientes <!-- El título de la página -->
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
            <span class="popupCircle color-circle" style="background-color:  {{$estado_opcion->colors}}" onclick="setColor(this)" data-color="{{ $estado_opcion->colors }}" data-id="{{ $estado_opcion->id }}"></span>
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
      
     {{-- En esta sección contiene un formulario de búsqueda para buscar expedientes según el código de expedientes --}}
<div class="header-file">
  <p class="title"> Administración de expedientes</p>
  <input type="text" id="searchInput" onkeyup="buscar()" placeholder="Buscar por expediente...">
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
                  <span class="circle" data-id="{{ optional($expediente)->id }}" data-id_color="{{ optional($expediente->estat_expedient)->id }}" style="background-color: {{ optional($expediente->estat_expedient)->colors ?? '#ccc' }}" onclick="mostrarPopup()" ></span>
                  {{-- Se muestra el estado actual del expediente --}}
                  <span class="estat">{{ optional($expediente->estat_expedient)->estat }}</span>
              </td>
              {{-- Se muestra una imagen de una carta que abrirá un popup con expedientes --}}
              <td><img src="./img/Carta.png" alt="Carta"></td>
          </tr> 
          @endforeach
      </tbody>
  </table>        
</div>

{{-- Esta sección muestra los botones de navegación de la página --}}
<div class="button-container">
  <div class="buttons">
      <a class="button" href="{{ url('/adminuser') }}">Usuario</a>
      {{-- El botón de Expedientes aparece seleccionado por defecto --}}
      <a class="button-selected"  href="{{ url('/expedientes') }}">Expedientes</a>
      <button class="button">Agencias</button>
  </div>
</div>
@endsection


@section('scripts')
  <script>
  function mostrarPopup(element) {
      var popup = document.getElementById("popup");
      popup.style.display = "flex";
      // popup.dataset.expedienteId = element.parentNode.parentNode.firstElementChild.innerHTML;

       // Establecer el color seleccionado actualmente en el popup
       var colorInput = document.getElementById('color-input');
       var expediente_id = document.getElementById('expediente_id');
       expediente_id.value = element.getAttribute('data-id');
      var colorCircles = document.querySelectorAll('.color-circle');
      for (var i = 0; i < colorCircles.length; i++) {
        if (colorCircles[i].getAttribute('data-color') === colorInput.value) {
          colorCircles[i].style.backgroundColor = colorInput.value;
        } else {
          colorCircles[i].style.backgroundColor = '';
        }
      }
    }

  function setColor(element) {
  var colorInput = document.getElementById('color-input');
  colorInput.value = element.getAttribute('data-id');
  var colorInput = document.getElementById('color-input');
  colorInput.value = element.getAttribute('data-id');

  var colorCircles = document.querySelectorAll('.color-circle');
  for (var i = 0; i < colorCircles.length; i++) {
    colorCircles[i].style.backgroundColor = '';
  }
  element.style.backgroundColor = element.getAttribute('data-color');
}
    
//Se oculta el popup
    function ocultarPopup() {
      var popup = document.getElementById("popup");
      popup.style.display = "none";
    }

    // Filtra el expediente según el código
    function buscar() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.querySelector("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1]; // Filtrar por la segunda columna (Codigo Expediente)
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

  </script>
@endsection

