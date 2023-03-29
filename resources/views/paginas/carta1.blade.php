
@extends('plantilla.principal')

@section('titulo', 'Broggi - Carta Trucada')
  
@section('content')

@section('css.carta1')


          <div class="text-center mt-5 mb-5" id="titulo">
            <h2>Carta de Trucada</h2>
          </div>

          <div class="card mt-3 mx-auto" id="CartaIncidencia">
            <div class="card-body">

              <!--BOTONES OPCIONES DE RELLENO-->
              <div id="botonesConjunto" class="mt-3 mb-1 d-flex justify-content-center">
                <div id="boton1"> 
                  <a href="{{ url("carta1") }}" id="linkMenuCarta1">
                    <div id="div" class="text-center mt-2"><b>1<br>Incidencias</b></div>
                  </a>
                </div>

                <div id="boton2">  
                  <a href="{{ url("carta2") }}" id="linkMenuCarta2">
                    <div id="div" class="text-center mt-2"><b>2<br>Localización</b></div>
                  </a>
                </div>
              
                <div id="boton3" >
                  <a href="{{ url("carta3") }}" id="linkMenuCarta3">
                    <div id="div" class="text-center mt-2"><b>3<br>Agencias</b></div>
                  </a>
                </div>
              </div>

          <!--PRIMER RECTANGULO:-->
            <div>    
              <div id="primerRectangulo" class="mt-4 ms-5">
                <div id="contenidoPrimerRectangulo" class="mt-2">
                  <div id="numTelf" class="mt-4 ms-4 text-muted">Núm. Telf</div>
                  <div id="codigoLlamada" class="mt-4 text-muted">Código Llamada</div>
                  <div id="tiempoLlamada" class="text-muted text-center"> TIEMPO LLAMADA</div>
                  <div id="notaComuna" class="text-muted">Nota Comuna</div>
                </div>
              </div>

             

              <!--SEGUNDO RECTANGULO-->
              <div id="segundoRectangulo" class="mt-4">
                <select id="tipoInci" class="form-select form-select-sm" aria-label=".form-select-lg example">
                  <option selected>Tipo</option>
                  <option value="1">One</option>
                </select>
                
                <select id="incidenciaInci" class="form-select form-select-sm"  aria-label=".form-select-sm example">
                  <option selected>Incidencia</option>
                  <option value="1">One</option>
                </select>
                
                <div id="definicionInci" class="text-muted "> Definición</div>
                <div id="indicacionesInci" class="text-muted">Indicaciones</div>
                
                <!--Buscador de Expediente-->
                <div id="buscadorExpe"></div>

                <!--HelpBox-->
                
                <div id="helper">
                  <a href="#">
                    <img src="{{ asset("img/HelpBox.png") }}" alt="helpBox" >
                  </a>
                </div>
            </div>
            </div> 
              
              
            </div>
          </div>

          