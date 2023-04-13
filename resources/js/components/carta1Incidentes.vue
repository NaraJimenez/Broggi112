<template>
    <div>
        <form>
            <!-- <div class="form-group">-->
            <!--<label for="docente">Tipo Incidente</label>-->
            <select v-model="TipoSeleccionado" id="tipoInci" class="ms-3 mt-3">
                <option value="" disabled>Tipo de Incidencia</option>
                <option v-for="tipus_incident in tipus_incidents" :key="tipo.id" :value="tipus_incident">
                    {{ tipus_incidents.nom }}
                </option>
            </select>

            <select v-model="TipoSeleccionado" id="incidenciaInci" class="ms-3  mt-3">
                <option value="" disabled>Incidencia</option>
                <option v-for="incidencia in incidencies" :key="incidenciaInci" :value="tipus_incident">
                    {{ tipus_incidents.nombre }}
                </option>
            </select>
            <!--
            <select id="incidenciaInci" class="form-select form-select-sm"  aria-label=".form-select-sm example">
            <option v-for="incidencia in incidencies" :value="incidenciaInci">{{tipus_incidents.nombre}}</option>
            </select>-->

            <!--<div id="definicionInci" class="text-muted "> {{incidents.definicio}}</div>-->
            <!--<div id="indicacionesInci" class="text-muted">{{incidents.intruccions}}</div>-->
            <input id="definicionInci"  type="text" name="nomSentido" placeholder="Definición" class="ms-3  mt-3">
            <input id="indicacionesInci" type="text" name="nomSentido" placeholder="Instrucciones" class="ms-3  mt-3" >
        </form>
    </div>
</template>
<script>
export default {/*
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
    },*/

}
</script>
<style>
#tipoInci, #incidenciaInci, #definicionInci, #indicacionesInci {
    box-sizing: border-box;
    position: absolute;
    width: 376px;
    height: 35px;
    left: 8px;/*
    top: 20px;*/
    background: #FFFFFF;
    border: 3px solid #76DAE4;
    border-radius: 10px;
}

/*#tipoInci {
    top: 5px;
}*/

#incidenciaInci{
   top: 42px;
}

#definicionInci{
    top: 85px;
}

#indicacionesInci{
    top: 128px;
}

</style>
