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

      <div id="popup" class="popup">
        <div class="popup-content">
          <span class="close" onclick="ocultarPopup()">&times;</span>
          <p>Selecciona un color:</p>
          @foreach ($estados as $estado)
          <div class="popup-color">
            <span id="popUp" class="popupCircle" style="background-color:  {{$estado->colors}}" onclick="cambiarEstado(this)"></span>
            <span class="popUpestat">{{ $estado->estat}}</span>
          </div>
        @endforeach
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
                <tr>
                  <td>{{$expediente->id}}</td>
                  <td><span>{{$expediente->codi}}</span></td>
                  <td colspan="2" class="estados">
                    <span class="circle" data-id="{{ optional($expediente->estat_expedient)->id }}" style="background-color: {{ optional($expediente->estat_expedient)->colors }}" onclick="mostrarPopup()" ></span>
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
