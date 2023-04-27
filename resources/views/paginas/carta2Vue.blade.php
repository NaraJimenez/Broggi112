@extends('plantilla.principal')

@section('titulo', 'Broggi - Carta Trucada')

@section('content')

    <div >
        <h2 id="titulo">Carta de Trucada Guardada</h2>
    </div>

    <div class="card mt-2 mx-auto" id="CartaIncidencia2">
        <div class="card-body">

        <div>
            @foreach ($cartasllamadas as $cartallamada )
                
            
            <div id="primero">
                <div>
                    <div id="ExpeCodigo">{{$cartallamada -> codi_trucada}}</div>
                    <div id="ExpeLlamada">{{$cartallamada -> codi_trucada}}</div>
                </div>
                
                <div>
                    <div id="ExpeTelefono">telefono</div>
                    <div id="ExpeFecha"> fecha</div>
                </div>

                <div id="ExpeNota">nota</div>
            
            </div>
            <div id="segundo">
                <div><select name="" id="ExpeAgencia">Agencia</select></div>
                <div><select name="" id="ExpeEstado">Estado</select></div>
            </div>
            <div id="tercero">
                <div><select name="" id="ExpeTipo">Tipo Incidencia</select></div>
                <div><select name="" id="ExpeIncidencia">Incidencia</select></div>
                <div id="ExpeDefinicion">Definicion</div>
                <div id="ExpeInstrucciones">Instrucciones</div>

            </div>
            <div id="cuarto">
                <div>
                    <div id="ExpeCat">cataluña?</div>
                    <div>
                        <div id="ExpeProvincia">Provincia</div>
                        <div id="ExpeComarca">Comarca</div>
                        <div id="ExpeMunicipi">Municipi</div>
                    </div>
                </div>
            </div>
            <div id="quinto">
                <div class="" >
                    <!--Tipo Localización-->
                    <div class="container" >
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills mt-3">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="pill" value="1" href="#carretera" role="tab" @click="handleNavItemSelection">Carretera</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" value="2" href="#calle" role="tab" @click="handleNavItemSelection">Calle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" data-bs-toggle="pill" value="3" href="#singular" @click="handleNavItemSelection" role="tab">Punto <br>Singular</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#poblacion" value="4" @click="handleNavItemSelection" role="tab">Población</a>
                            </li>
                        </ul>

                        <!-- Tab/Pestañas Localización-->
                        <div class="tab-content" id="tabOpciones">
                            <!--CARRETERA-->
                            <div class="tab-pane container active" id="carretera">
                                <div class="ms-1 mt-3">
                                    <label for="inputCarretera" > Nombre Carretera</label>
                                    <input id="inputCarretera" class="form-control" type="text" name="inputCarretera"
                                    placeholder="Introduce Carretera" v-model="formData.inputCarretera">
                                </div>

                                <br>
                                <div class="ms-1 mt-3">
                                    <label for="inputpuntoKM">Punto Km</label>
                                    <input id="inputpuntoKM" class="form-control" type="text" name="inputpuntoKM"
                                    placeholder="Introduce Kilometro" v-model="formData.inputpuntoKM">
                                </div>
                                <br>
                                <div class="ms-1 mt-3 mb-4">
                                    <label for="inputSentido">Sentido</label>
                                    <input id="inputSentido" class="form-control" type="text" name="inputSentido"
                                    placeholder="Introduce Sentido" v-model="formData.inputSentido">
                                </div>

                            </div>

                            <!--CALLE-->
                            <div class="tab-pane container fade" id="calle">
                                <br>
                                <label for="ExpinputVia"  >Tipo vía</label>
                                <input id="ExpinputVia" type="text" name="ExpinputVia"
                                placeholder="Introduce Vía" v-model="formData.inputVia">
                                <br>
                                <label for="ExpinputCalle"  >Nombre Calle</label>
                                <input id="ExpinputCalle"   type="text" name="ExpinputCalle"
                                placeholder="Introduce Calle" v-model="formData.inputCalle">
                                <br>
                                <label for="ExpExpinputCasa">Número</label>
                                <input id="ExpinputCasa"   type="text" name="ExpinputCasa"
                                placeholder="Introduce Casa" v-model="formData.inputCasa">
                                <br>
                                <label for="ExpinputEscalera" >Escalera</label>
                                <input id="ExpinputEscalera"  type="text" name="ExpinputEscalera"
                                placeholder="Introduce Escalera" v-model="formData.inputEscalera">
                                <br>
                                <label for="ExpinputPiso" >Piso</label>
                                <input id="ExpinputPiso"   type="text" name="ExpinputPiso"
                                placeholder="Introduce Piso" v-model="formData.inputPiso">
                                <br>
                                <label for="ExpinputPuerta" >Puerta</label>
                                <input id="ExpinputPuerta" type="text" name="ExpinputPuerta"
                                placeholder="Introduce Puerta" v-model="formData.inputPuerta">
                            </div>

                            <!--PUNTO SINGULAR-->
                            <div class="tab-pane container fade mt-3" id="singular">
                                <div class="form-group">
                                    <label for="inputPS">Punto Singular</label>
                                    <input id="inputPS" class="form-control" type="text" name="inputPS"
                                    placeholder=" Introduce Punto" v-model="formData.inputPS">
                                </div>
                            </div>

                            <!--POBLACION inputPoblacionNombre-->
                            <div class="tab-pane container fade mt-3" id="poblacion">
                                <div class="form-group">
                                    <label for="inputPob">Nombre Población</label>
                                    <input id="inputPob" class="form-control" type="text"
                                    name="inputPob" placeholder="Introduce Poblacion"
                                    v-model="formData.inputPob">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            @endforeach
        </div>

    </div>



@endsection
