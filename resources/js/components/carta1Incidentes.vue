<template>
    <div class="form-group">
        <!--<label for="docente">Tipo Incidente</label>-->
        <select id="tipus_incidents" class="form-select form-select-sm" aria-label=".form-select-lg example" v-model="TipoSeleccionado">
            <option v-for="tipus_incident in tipus_incidents" :value="tipus_incident">{{tipus_incidents.nombre}}</option>
          </select>

          <select id="incidenciaInci" class="form-select form-select-sm"  aria-label=".form-select-sm example">
            <option v-for="incidenciaInci in tipoInci" :value="incidenciaInci">{{tipus_incidents.nombre}}</option>
          </select>

          <div id="definicionInci" class="text-muted "> <!--{{incidents.definicio}}--></div>
          <div id="indicacionesInci" class="text-muted"><!--{{incidents.intruccions}}--></div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            tipoSeleccionado: {},//<-- el seleccionado estará aquí
            tipus_incidents: [], // <-- La lista incidentes
        }
    },
    created(){
        const inciT = this
        //Llamamos a la api/BBDD
        axios
            .get('tipusincidents')
            //si todo va bien
            .then(response => {
                inciT.tipus_incidents = response.data
            })
    },

}
</script>
<style>

</style>
