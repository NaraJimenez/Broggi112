<template>
    <div>
        <div class="container">
            <div class="row">

              <div class="col mt-2" id="rec1">
                <div id="codExpediente">codigoExp</div>
                <div id="codLlamda">codigoLlamda</div>
                <div id="telefono">telefono</div>
                <div id="fecha"> fecha</div>
                <div id="nota">nota</div>
              </div>

              <div class="col" id="rec2">Column2</div>
              <div class="w-100"></div>
              <div class="col mt-2" id="rec3">Column3</div>
              <div class="col" id="rec4">Column4</div>
              <div class="w-100"></div>
              <div class="col" id="rec5">Column5</div>

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
        width: 400px;
        height: 195px;
        left: 193px;
       /* top: 186px;*/
        border: 2px solid #025D73;
        border-radius: 10px;
    }
    #rec3 {
        box-sizing: border-box;
        /*position: absolute;*/
        width: 400px;
        height: 169px;
        left: 192px;
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
        /*left: 212px;
        top: 207px;*/
        background: #FFFFFF;
        /* Bordes CLTTT */
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }

    #codLlamda{
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
</style>