<template>
    <div class="tab">
        <label for="inputVia" class="ms-2 mt-3">Tipo vía</label>
        <input id="inputVia" class="ms-2 mt-3" type="text" name="inputVia" placeholder="Introduce Vía">
        <br>
        <label for="inputCalle" class="ms-2 mt-3">Nombre Calle</label>
        <input id="inputCalle" class="ms-2 mt-3" type="text" name="inputCalle" placeholder="Introduce Calle">
        <br>
        <label for="inputCasa" class="ms-2 mt-3">Número</label>
        <input id="inputCasa" class="ms-2 mt-3" type="text" name="inputCasa" placeholder="Introduce Casa">
        <br>
        <label for="inputEscalera" class="ms-2 mt-3">Escalera</label>
        <input id="inputEscalera" class="ms-2 mt-3" type="text" name="inputEscalera" placeholder="Introduce Escalera">
        <br>
        <label for="inputPiso" class="ms-2 mt-3">Piso</label>
        <input id="inputPiso" class="ms-2 mt-3" type="text" name="ninputPiso" placeholder="Introduce Piso">
        <br>
        <label for="inputPuerta" class="ms-2 mt-3 mb-4">Puerta</label>
        <input id="inputPuerta" class="ms-2 mt-3 mb-4" type="text" name="inputPuerta" placeholder="Introduce Puerta">
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
