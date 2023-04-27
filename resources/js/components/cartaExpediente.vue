<template>
    <div>
        <div class="container">
            <div class="row">
                <!--Datos Personales - METER COSAS DE LOS INTERLOCUTORES-->
              <div class="col mt-2" id="rec1">
                <div class="d-flex justify-content-center">
                  <div  id="codExpediente">codigoExp</div>
                  <div id="codLlamada" >codigoLlamda</div>
                </div>
                
                <div class="d-flex justify-content-center">
                  <div id="telefono">telefono</div>
                <div id="fecha"> fecha</div>
                </div>

                <div id="nota">nota</div>
              </div>

              <!--Agencias-->
              <div class="col" id="rec2">
                <div  class="d-flex justify-content-center">
                  <select name="" id="" class="mt-2">
                    <option disabled selected value="" class="text-center">Agencies</option>
                </select> <br> 
                <select name="" id="" class="mt-2">
                    <option disabled selected value="" class="text-center">Estados</option>
                </select>
                </div>
                
              </div>
              
              <div class="w-100"></div>

              <!--Tipus de Incidentes-->
              <div class="col mt-2" id="rec3">
                <div>
                    <div type="text" name="definicion"
                    placeholder="Definición" class="ms-3  mt-3">Tipo Incidente</div>
                    <div type="text" name="instrucciones"
                    placeholder="Instrucciones" class="ms-3  mt-3">Incidentes</div>
                </div>
              </div>

              <!--Localización-->
              <div class="col" id="rec4">
                <div id="catalunya" class="mt-2 ms-3 text-center mb-2"> Cataluña?</div>
                <!--Checkbox-->
                <div>
                  <label id="selectCat" >
                      <input type="radio" id="Si" value="0" v-model="picked" />
                      <label for="Si">Si</label>
                      <input type="radio" id="No" value="1" v-model="picked" class="ms-2"/>
                      <label for="No">No</label>
                  </label>
                </div>
                <!--Mostrar elementos-->
                <div class="d-flex justify-content-center">
                    <div type="text" name="definicion"
                    placeholder="Definición" class="ms-3  mt-3">Provincia</div>
                    <div type="text" name="instrucciones"
                    placeholder="Instrucciones" class="ms-3  mt-3">Comarca</div>
                    <div type="text" name="instrucciones"
                    placeholder="Instrucciones" class="ms-3  mt-3">Municipio</div>
                </div>
              </div>
              <!--Separacion de columnas-->
              <div class="w-100"></div>
              <!--MENU de Localización-->
              <div class="col" id="rec5">
                <div class="d-flex align-items-start">
                  <div class="nav flex-column nav-pills me-3 ms-3" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-carretera-tab" data-bs-toggle="pill" 
                    data-bs-target="#v-pills-carretera" type="button" role="tab" aria-controls="v-pills-carretera" aria-selected="true">Carretera</button>
                    <button class="nav-link" id="v-pills-calle-tab" data-bs-toggle="pill" 
                    data-bs-target="#v-pills-calle" type="button" role="tab" aria-controls="v-pills-calle" aria-selected="false">Calle</button>
                    <button class="nav-link" id="v-pills-singular-tab" data-bs-toggle="pill" 
                    data-bs-target="#v-pills-singular" type="button" role="tab" aria-controls="v-pills-singular" aria-selected="false">Punto Singular</button>
                    <button class="nav-link" id="v-pills-poblacion-tab" data-bs-toggle="pill" 
                    data-bs-target="#v-pills-poblacion" type="button" role="tab" aria-controls="v-pills-poblacion" aria-selected="false">Población</button>
                  </div>
                  <!--Opciones Menú-->
                  <div class="tab-content ms-3" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-carretera" role="tabpanel" aria-labelledby="v-pills-carretera-tab">
                      <!--CARRETERA-->
                        <label for="inputCarretera" class="ms-1 mt-3"> Nombre Carretera</label>
                        <input id="inputCarretera" class="ms-1 mt-3" type="text" name="inputCarretera" placeholder="Introduce Carretera">
                        <br>
                        <label for="inputpuntoKM" class="ms-1 mt-3">Punto Km</label>
                        <input id="inputpuntoKM" class="ms-1 mt-3" type="text" name="inputpuntoKM" placeholder="Introduce Kilometro">
                        <br>
                        <label for="inputSentido" class="ms-1 mt-3 mb-4">Sentido</label>
                        <input id="inputSentido" class="ms-1 mt-3 mb-4" type="text" name="inputSentido" placeholder="Introduce Sentido" >
                    </div>
                    <div class="tab-pane fade" id="v-pills-calle" role="tabpanel" aria-labelledby="v-pills-calle-tab">
                      <!--CALLE-->
                        <label for="inputVia" class=" mt-2 ">Tipo vía</label>
                        <input id="inputVia" class="ms-1 mt-1" type="text" name="inputVia" placeholder="Introduce Vía">
                        <br>
                        <label for="inputCalle" class="mt-3">Nombre Calle</label>
                        <input id="inputCalle" class="ms-1 mt-2" type="text" name="inputCalle" placeholder="Introduce Calle">
                        <br>
                        <label for="inputCasa" class="mt-3">Número</label>
                        <input id="inputCasa" class=" ms-1 mt-2" type="text" name="inputCasa" placeholder="Introduce Casa">
                        <br>
                        <label for="inputEscalera" class="mt-3">Escalera</label>
                        <input id="inputEscalera" class="ms-1 mt-2" type="text" name="inputEscalera" placeholder="Introduce Escalera">
                        <br>
                        <label for="inputPiso" class="mt-3">Piso</label>
                        <input id="inputPiso" class="ms-1 mt-2" type="text" name="ninputPiso" placeholder="Introduce Piso">
                        <br>
                        <label for="inputPuerta" class=" mt-3 ">Puerta</label>
                        <input id="inputPuerta" class="ms-1 mt-2" type="text" name="inputPuerta" placeholder="Introduce Puerta">
                    </div>
                    <div class="tab-pane fade" id="v-pills-singular" role="tabpanel" aria-labelledby="v-pills-singular-tab">
                      <!--PUNTO SINGULAR-->
                      <div  id="singular">
                        <label for="inputPS" class="mt-1">Punto Singular</label>
                        <input id="inputPS" class="ms-1" type="text" name="inputPS" placeholder=" Introduce Punto">
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-poblacion" role="tabpanel" aria-labelledby="v-pills-poblacion-tab">
                      <!--POBLACION inputPoblacionNombre-->
                      <div class=" mt-3" id="poblacion">
                        <label for="inputPob" class="">Nombre Población</label>
                        <input id="inputPob" class="" type="text"
                        name="inputPob" placeholder="Introduce Poblacion">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style>
    /*.row{
        display: grid;
    }*/
    #rec1 {
        box-sizing: border-box;
        /*position: absolute;*/
        width: 300px;
        height: 195px;
        left: 193px;
       /* top: 186px;*/
        border: 2px solid #025D73;
        border-radius: 10px;
    }
    #rec3 {
        box-sizing: border-box;
        /*position: absolute;*/
        width: 300px;
        height: 169px;
        left: 192px;
        /*top: 396px;*/
        /* Boton principal Hover */
        border: 2px solid #025D73;
        border-radius: 10px;
    }

    #rec2 {
        box-sizing: border-box;
        /*position: absolute;*/
        width: 300px;
        height: 169px;
        left: 192px;
        /*top: 396px;*/
        /* Boton principal Hover */
        border: 2px solid #025D73;
        border-radius: 10px;
    }

    #rec4 {
        box-sizing: border-box;
        /*position: absolute;*/
        width: 300px;
        height: 169px;
        left: 192px;
        /*top: 396px;*/
        /* Boton principal Hover */
        border: 2px solid #025D73;
        border-radius: 10px;
    }

    #rec5 {
        box-sizing: border-box;
        /*position: absolute;*/
        width: 400px;
        height: 169px;
        left: 2px;
        /*top: 396px;*/
        /* Boton principal Hover */
        border: 2px solid #025D73;
        border-radius: 10px;
    }

    /*DENTRO DE LOS RECTANGULOS*/

    /*RECTANGULO 1*/
    #codExpediente{
        box-sizing: border-box;
        /*position: absolute;*/
        width: 166px;
        height: 34px;
        left: 212px;/*
        top: 207px;*/
        background: #FFFFFF;
        /* Bordes CLTTT */
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }

    #codLlamada{
        box-sizing: border-box;
        /*position: absolute;*/
        width: 166px;
        height: 34px;
        /*left: 402px;
        top: 207px;*/
        background: #FFFFFF;
        /* Bordes CLTTT */
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }

    #telefono {
        box-sizing: border-box;
       /* position: absolute;*/
        width: 166px;
        height: 35px;
        /*left: 212px;
        top: 249px;*/

        background: #FFFFFF;
        /* Bordes CLTTT */

        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
    #fecha{
        box-sizing: border-box;
        /* position: absolute;*/
         width: 166px;
         height: 35px;
         /*left: 212px;
         top: 249px;*/
 
         background: #FFFFFF;
         /* Bordes CLTTT */
 
         border: 3px solid #76DAE4;
         border-radius: 10px;}
    #nota { 
        box-sizing: border-box;
        position: absolute;
        width: 355px;
        height: 64px;
        /*left: 213px;
        top: 293px;*/

        background: #FFFFFF;
        /* Bordes CLTTT */

        border: 3px solid #76DAE4;
        border-radius: 10px;
    }

    #inputPob{
      box-sizing: border-box;
      /*position: absolute;*/
      width: 220px;
      height: 34px;
      background: #FFFFFF;
      border: 3px solid #76DAE4;
      border-radius: 10px;
  }
  #inputPS{
      box-sizing: border-box;
      /*position: absolute;*/
      width: 220px;
      height: 34px;
      background: #FFFFFF;
      border: 3px solid #76DAE4;
      border-radius: 10px;
  }

  #inputVia, #inputCalle, #inputCasa, #inputEscalera, #inputPiso, #inputPuerta {
      box-sizing: border-box;
      position: absolute;
      width: 220px;
      height: 34px;
      background: #FFFFFF;
      border: 3px solid #76DAE4;
      border-radius: 10px;
  }
  #inputCarretera, #inputpuntoKM, #inputSentido{
      box-sizing: border-box;
      position: absolute;
      width: 220px;
      height: 34px;
      background: #FFFFFF;
      border: 3px solid #76DAE4;
      border-radius: 10px;
  }

</style>