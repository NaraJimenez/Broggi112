<template>

    <div id="primerRectangulo" class="mt-4 ms-5">
        <div id="contenidoPrimerRectangulo" class="mt-2">
            <div id="numTelf" class="mt-4 ms-4 text-muted">Núm. Telf</div>
            <div id="codigoLlamada" class="mt-4 text-muted">Código Llamada</div>
            <div id="tiempoLlamada" class="text-muted text-center"> TIEMPO LLAMADA</div>
            <div id="" class="text-muted" >
                <textarea name="" id="notaComuna" cols="10" rows="10" class="text-muted">Nota Comuna</textarea> 
            </div>
        </div>
    </div>
</template>
<script>
export default {

}
</script>
<style>
#numTelf{
    box-sizing: border-box;
    position: absolute;
    width: 186px;
    height: 49px;
    background: #FFFFFF;
    border: 3px solid #76DAE4;
    border-radius: 10px;
}

#codigoLlamada{
    box-sizing: border-box;
    position: absolute;
    width: 186px;
    height: 49px;
    left: 285px;


    background: #FFFFFF;
    /* Bordes CLTTT */

    border: 3px solid #76DAE4;
    border-radius: 10px;
}
#tiempoLlamada{
    box-sizing: border-box;

    position: absolute;
    width: 385px;
    height: 47px;
    left: 87px;
    top: 230px;
    background: #FFFFFF;
    border: 3px solid #76DAE4;
    border-radius: 10px;
}
#notaComuna{
    box-sizing: border-box;
    position: absolute;
    width: 385px;
    height: 148px;
    left: 87px;
    top: 300px;
    background: #FFFFFF;
    border: 3px solid #76DAE4;
    border-radius: 10px;
}
</style>
