
@extends('plantilla.principal')

@section('titulo', 'Broggi - Carta Trucada')
  
@section('content')

@section('css.carta2')

          <div class="text-center mt-5 mb-5" id="titulo">
            <h2>Carta de Trucada</h2>
          </div>

          <div class="card mt-3 mx-auto" id="CartaIncidencia">
            <div class="card-body">

              <!--BOTONES OPCIONES DE RELLENO-->
              <div id="botonesConjunto" class="mt-3 mb-1 d-flex justify-content-center">
                <div id="boton1c2"> 
                  <a href="{{ asset("carta1") }}" id="linkMenuCarta1c2">
                    <div id="div" class="text-center mt-2"><b>1<br>Incidencias</b></div>
                  </a>
                </div>

                <div id="boton2c2">  
                  <a href="{{ asset("carta2") }}" id="linkMenuCarta2c2">
                  <a href="{{ url("carta2") }}" id="linkMenuCarta2c2">
                    <div id="div" class="text-center mt-2"><b>2<br>Localización</b></div>
                  </a>
                </div>
              
                <div id="boton3c2" >

                  <a href="{{ url("carta3") }}" id="linkMenuCarta3c2">
                    <div id="div" class="text-center mt-2"><b>3<br>Agencias</b></div>
                  </a>
                </div>
              </div>

            <div>
              <!--PRIMER RECTANGULO:-->
              <div id="primerRectangulo2" class="mt-4 ms-5">
                <div id="contenidoPrimerRectangulo2" class="mt-2">
                  <div id="catalunya" class="mt-4 ms-4 text-center"> Cataluña?</div>
                  <div>
                    <label id="checkboxCat" >
                      <input type="checkbox" id="checkCarta2" />
                      <span>Si</span>
                      <input type="checkbox" id="checkCarta2" />
                      <span>No</span>
                  </label>
                  </div>
                  <select id="provinciaSelect" class="form-select form-select-sm text-center" aria-label=".form-select-lg example">
                    <option selected>Provincia</option>
                    <option value="1">One</option>
                  </select>
                </div>
              </div>
              
              <!--Buscador de Expediente-->
              <div id="buscadorExpe2"></div>

              <!--SEGUNDO RECTANGULO-->
              <div id="segundoRectangulo2" class="mt-4">

                <!--Botones opciones localización-->
                <div id="botonesLocalizacion" class=" d-flex justify-content-center">
                  <div id="botonLoc1">
                    <a href="#" id="botonCarta2">
                      <div id="div" class="text-center mt-2"><b>Carretera</b></div>
                    </a>
                  </div>

                  <div id="botonLoc2">
                    <a href="#" id="botonCarta2">
                      <div id="div" class="text-center mt-2"><b>Calle</b></div>
                    </a>
                  </div>

                  <div id="botonLoc3">
                    <a href="#" id="botonCarta2">
                      <div id="div" class="text-center mt-2"><b> Punto Singular</b></div>
                    </a>
                  </div>

                  <div id="botonLoc4">
                    <a href="#" id="botonCarta2">
                      <div id="div" class="text-center mt-2"><b> Población</b></div>
                    </a>
                  </div>
                </div>



                <!--Opciones que apareceran segun el boton escogido-->
                <div id="opcionesCarta2" class="text-muted text-center">
                  <p class="mt-5">Opciones <br> de localización</p>
                  </div>
                
                
            </div>
            <!--FINAL SEGUNDO RECTANGULO-->

            </div> 
              
              
            </div> <!--FINAL CARD BODY-->
          </div> <!--FINAL CARD -->

          <div id="helper">
            <a href="#">
                <img src="{{ asset("img/HelpBox.png") }}" alt="HTML tutorial">
                </a>
          </div>