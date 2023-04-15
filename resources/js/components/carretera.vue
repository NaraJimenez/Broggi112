<template>
    <div class="tab">
        <label for="inputCarretera" class="ms-2 mt-3"> Nombre Carretera</label>
        <input id="inputCarretera" class="ms-2 mt-3" type="text" name="inputCarretera" placeholder="Introduce Carretera">
        <br>
        <label for="inputpuntoKM" class="ms-2 mt-3">Punto Km</label>
        <input id="inputpuntoKM" class="ms-2 mt-3" type="text" name="inputpuntoKM" placeholder="Introduce Kilometro">
        <br>
        <label for="inputSentido" class="ms-2 mt-3 mb-4">Sentido</label>
        <input id="inputSentido" class="ms-2 mt-3 mb-4" type="text" name="inputSentido" placeholder="Introduce Sentido" >

    </div>
</template>
<script>
export default {

}
</script>
<style>
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
