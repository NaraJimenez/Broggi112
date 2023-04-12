<template>

    <div id="primerRectangulo" class="mt-4 ms-5">
        <form>


        <div id="contenidoPrimerRectangulo" class="mt-2">
            <div id="numTelf" class="mt-4 ms-4 text-muted">Núm. Telf</div>
            <div id="codigoLlamada" class="mt-4 text-muted">Código Llamada</div>
            <div id="tiempoLlamada" class="text-muted text-center" > TIEMPO LLAMADA</div>
            <div id="">
                <textarea name="" id="notaComuna" cols="10" rows="10"
                v-model="elementosGuardar.nota_comuna" class="text-muted">Nota Comuna</textarea>
            </div>
        </div>
        </form>
    </div>
</template>
<script>
export default {
    data (){
        return{
           //Objeto de elementos a guardar
            elementosGuardar:[],
        }


    }
}
</script>
<style>

</style>
