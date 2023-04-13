<template>
    <div class="tab">
        <label for="tipoVia" class="ms-2 mt-3">Tipo vía</label>
        <input id="inputVia" class="ms-2 mt-3" type="text" name="tipoVia" placeholder="Introduce Vía">
        <br>
        <label for="nombreCalle" class="ms-2 mt-3">Nombre Calle</label>
        <input id="inputCalle" class="ms-2 mt-3" type="text" name="nombreCalle" placeholder="Introduce Calle">
        <br>
        <label for="numCasa" class="ms-2 mt-3">Número</label>
        <input id="inputCasa" class="ms-2 mt-3" type="text" name="numCasa" placeholder="Introduce Casa">
        <br>
        <label for="numEscalera" class="ms-2 mt-3">Escalera</label>
        <input id="inputEscalera" class="ms-2 mt-3" type="text" name="numEscalera" placeholder="Introduce Escalera">
        <br>
        <label for="numPiso" class="ms-2 mt-3">Piso</label>
        <input id="inputPiso" class="ms-2 mt-3" type="text" name="numPiso" placeholder="Introduce Piso">
        <br>
        <label for="numPuerta" class="ms-2 mt-3 mb-4">Puerta</label>
        <input id="inputPuerta" class="ms-2 mt-3 mb-4" type="text" name="numPuerta" placeholder="Introduce Puerta">
    </div>
</template>
<script>
export default {
    
}
</script>
<style>
    #inputVia, #inputCalle, #inputCasa, #inputEscalera, #inputPiso, #inputPuerta {
        box-sizing: border-box;
        position: absolute;
        width: 220px;
        height: 34px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px; 
    }
</style>
