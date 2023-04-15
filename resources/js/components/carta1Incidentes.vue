<template>
    <div>
        <form>
            <select id="tipusIncident"
            v-model="incidentes.tipusIncident"
            name="tipusIncident"
            class="form-select ms-3 mt-3"
            aria-label="tipusIncident"
            @change="selectIncidents()" >
                <option value="" disabled>Tipo de Incidencia</option>
                <option v-for="tipusIncident in tipusIncidents" :key="tipusIncident.id" :value="tipusIncident.id">{{tipusIncident.nom}}</option>
            </select>

            <select id="incident"
            name="incident"
            v-model="incidentes.incident"
            class="form-select ms-3 mt-3"
            aria-label="incident">
                <option value="" disabled>Incidencia</option>
                <option v-for="incident in incidents" :key="incident.id" :value="incident.id">{{incident.nom}}</option>
            </select>

            <div v-for="incident in incidents">
               <div id="definicionInci"  type="text" name="nomSentido"
               placeholder="Definición" class="ms-3  mt-3"> {{incident.definicio}}</div>
                <div id="indicacionesInci" type="text" name="nomSentido"
                placeholder="Instrucciones" class="ms-3  mt-3" >{{incident.instruccions}}</div>
            </div>

        </form>
    </div>
</template>
<script>
export default {
    data(){
        return {
            /*
            tipoSeleccionado: {},//<-- el seleccionado estará aquí*/
            //tipus_incidents: [],
            incidents: [],
            tipusIncidents: [],

            incidentes: {
                tipusIncident: '',
                incident: '',
            }
        }
    },
    created(){

        this.selectTipusIncident();


    },
    methods: {
    selectTipusIncident() {
        let me = this;
          axios.get('tipusincidents')
          .then((response) => {
              me.tipusIncidents = response.data;
          })
          .catch((err) => {
              console.log(err);
          })
          .finally(() => (this.loading = false));
    },
    selectIncidents() {
        let me = this;
        let tipusIncident = this.tipusIncident;
          axios.get('incidents/' + tipusIncident)
          .then((response) => {
              me.incidents = response.data;
          })
          .catch((err) => {
              console.log(err);
          })
          .finally(() => (this.loading = false));
    },/*
    currentDateTime(){
        const current = new Date();
        const date = current.getFullYear()+'-'+(current.getMonth()+1)+'-'+current.getDate();
        const time = current.getHours() + ":" + current.getMinutes() + ":" + current.getSeconds();
        const dateTime = date +' '+ time;
        trucada.dataCreacio = dateTime;
    },*/
    }
}
</script>
<style>
#tipusIncident, #incident, #definicionInci, #indicacionesInci {
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

#tipusIncident {
   /* top: 5px;*/
   height: 38px;
}

#incident{
   top: 42px;
   height: 38px;
}

#definicionInci{
    top: 85px;
}

#indicacionesInci{
    top: 128px;
}

</style>
