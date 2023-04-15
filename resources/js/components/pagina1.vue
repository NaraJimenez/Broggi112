<template>
    <div>
        <!--Elementos Carta-->
            <div class="row ms-3 mt-2">

                <!--Elementos Primer Rectangulo-->
                <div class="col" id="rectangulo1">
                    <!--Numero telefono-->
                    <div id="numTelf" class="mt-4 ms-5 text-muted">Núm. Telf</div>
                    <!--Código llamada-->
                    <div id="codigoLlamada" class="mt-4 text-muted">Código Llamada</div>
                    <!--Tiempo llamada-->
                    <div id="tiempoLlamada" class="text-muted text-center"> TIEMPO LLAMADA
                        <!--<p class="">Temps de trucada: {{ formattedElapsedTime }}</p>-->
                    </div>
                    <!--Nota Comuna-->
                    <div id="" class="text-muted" >
                        <textarea name="notaComunaInput" id="notaComunaInput" cols="10" rows="10" class="form-control"
                        placeholder="Nota Comuna"></textarea>
                    </div>
                </div>
                <!--FINAL PRIMER RECTANGULO-->

                <!--Elementos Segundo Rectangulo-->
                <div class="col" id="rectangulo2">
                    <!--Incidentes-->
                    <div class="mt-3 ms-3" id="incidentes"><!--
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
                        </div>-->
                    </div>
                    <!--FINAL INCIDENTES-->

                    <!--Expedentes - Filtro/Buscador-->
                    <div class="mt-5 ms-1" id="expedientes">Expedientes

                    </div>
                    <!--FINAL EXPEDIENTES-->
                </div>
                <!--FINAL PRIMER RECTANGULO-->

            </div> <!--FINAL DIV ROW-->
    </div>
</template>
<script>
export default {
    data() {
        return {
           /* incidents: [],
            tipusIncidents: [],

            incidentes: {
                tipusIncident: '',
                incident: '',
            }*/
        }
    },
    //Metodos
    methods: {
        //Seleccionamos de la BBDD los tipos de incidentes
        selectTipusIncident() {
            let me = this;
            axios
            .get('tipusincidents')
            .then((response) => {
                me.tipusIncidents = response.data;
            })
            .catch((err) => {
                console.log(err);
            })
            .finally(() => (this.loading = false));
        },
        //A partir de los incidentes sacamos los diferentes incidentes
        selectIncidents() {
            let me = this;
            let tipusIncident = this.tipusIncident;
            axios
            .get('incidents/' + tipusIncident)
            .then((response) => {
                me.incidents = response.data;
            })
            .catch((err) => {
                console.log(err);
            })
            .finally(() => (this.loading = false));
        },
        //De los incidentes mostramos las instrucciones y definiciones

    },
    created(){
        this.selectTipusIncident();
    },
    mounted() {
        console.log('Pagina 1 Montada')
    },
}
</script>
<style>
    /*ELEMENTOS DIVS*/
    #rectangulo1 {
        box-sizing: border-box;
        width: 438px;
        height: 360px;
        border: 1px solid #025D73;
        border-radius: 15px
    }

    #incidentes {
        box-sizing: border-box;
        position: absolute;
        width: 430px;
        height: 221px;
        left: 525px;
        top: 106px;
        border: 1px solid #025D73;
        border-radius: 15px;
    }

    #expedientes {
        box-sizing: border-box;
        position: absolute;
        width: 432px;
        height: 122px;
        /*margin: auto;*/
        top: 310px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }

    /*ELEMENTOS DENTROS DE LOS DIVS*/
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
    #notaComunaInput{
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

    /*Divs - Parte izquierda*/
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
