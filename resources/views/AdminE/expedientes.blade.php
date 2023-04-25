@extends('layout.plantilla')

@section('title')
  Expedientes
@endsection

@section('css-pagina')
<link  href="{{asset('css/expedientes.css')}}" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="admin-background">
      <div id="popup" class="popup"  data-expediente-id="">
        <div class="popup-content">
          <span class="close" onclick="ocultarPopup()">&times;</span>
          <form action="/expedientes/update" method="POST">
            @method('POST')
          <p>Selecciona un color:</p>
          {{-- Ciclo foreach para mostrar los colores --}}
          @foreach ($estados as $estado_opcion)
          <div class="popup-color">
            <span class="popupCircle color-circle" style="background-color:  {{$estado_opcion->colors}}" onclick="setColor(this)" data-color="{{ $estado_opcion->colors }}"></span>
            <span class="popUpestat">{{ $estado_opcion->estat}}</span>
          </div>
          @endforeach
          <input type="hidden" name="expediente_id" value="">
          <input type="hidden" id="color-input" name="color_id" value="">
          <button type="submit" id="actualizar-btn">Actualizar</button>
</form>
        </div>
      </div>

      <div class="header-file">
        <p class="title"> Administración de expedientes</p>
        <input type="text" id="searchInput" onkeyup="buscar()" placeholder="Buscar...">
      </div>
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
            @foreach ($expedientes as $expediente)
            @php
              $expediente_id = $expediente->id;
            @endphp
                <tr>
                  <td>{{$expediente->id}}</td>
                  <td><span>{{$expediente->codi}}</span></td>
                  <td colspan="2" class="estados">
                    <span class="circle" data-id="{{ optional($expediente->estat_expedient)->id }}" style="background-color: {{ optional($expediente->estat_expedient)->colors ?? '#ccc' }}" onclick="mostrarPopup()" ></span>
                    <span class="estat">{{ optional($expediente->estat_expedient)->estat }}</span>
                  </td>
                  <td><img src="./img/Carta.png" alt="Carta"></td>
                </tr> 
            @endforeach
          </tbody>
        </table>        
      </div>
    </div>

    <div class="button-container">
      <div class="buttons">
        <button class="button">Usuario</button>
        <button class="button-selected">Expedientes</button>
        <button class="button">Agencias</button>
      </div>
  </div>
@endsection

@section('scripts')
  <script>
  function mostrarPopup(element) {
      var popup = document.getElementById("popup");
      popup.style.display = "flex";
      popup.dataset.expedienteId = element.parentNode.parentNode.firstElementChild.innerHTML;

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
    }

  function setColor(element) {
  var colorInput = document.getElementById('color-input');
  colorInput.value = element.getAttribute('data-color');
  
  var colorCircles = document.querySelectorAll('.color-circle');
  for (var i = 0; i < colorCircles.length; i++) {
    colorCircles[i].style.backgroundColor = '';
  }
  element.style.backgroundColor = element.getAttribute('data-color');
}
    

    function ocultarPopup() {
      var popup = document.getElementById("popup");
      popup.style.display = "none";
    }

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
