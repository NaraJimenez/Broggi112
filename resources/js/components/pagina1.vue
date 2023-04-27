<template>
    <div> <form>
        <!--Elementos Carta-->
            <div class="row ms-3 mt-2">
                <!--Elementos Primer Rectangulo-->
                <div class="col" id="rectangulo1">
                    <!--Nombre Interlocutor-->
                    <input id="inputNombre" name="inputNombre" class="mt-4 ms-5 text-muted"  type="text"
                    placeholder="Nombre interlocutor" v-model="formData1.inputNombre" @input="validateForm1">
                    <!--Apellidos Interlocutor-->
                    <input id="inputApellidos" name="inputApellidos" class="mt-4 text-muted"  type="text"
                    placeholder="Apellidos interlocutor" v-model="formData1.inputApellidos" @input="validateForm1">
                    <!--Telefono-->
                    <input id="telefonoLlamada" name="telefonoLlamada" class="text-muted text-center"
                    v-model="formData1.telefonoLlamada">
                    <!--Nota Comuna-->
                    <div id="" class="text-muted" >
                        <textarea name="inputNotaComuna" id="inputNotaComuna" cols="10" rows="10" class="form-control"
                        placeholder="Nota Comuna" v-model="formData1.inputNotaComuna"></textarea>
                    </div>
                </div>
                <!----------Elementos Segundo Rectangulo------------>
                <div class="col mt-4" id="rectangulo2">
                    <!--Incidentes-->
                    <div class="mt-3 ms-3" id="incidentes">
                        <!--Tipos de Incidente aria-label="selectTipusIncident"-->
                        <select name="selectTipusIncident" id="selectTipusIncident" class="form-select ms-3 mt-3"
                        v-model="formData1.selectedTipusIncident" @change="fetchIncidents()"   required
                        >
                            <option value="" disabled selected>Tipo de Incidencia</option>
                            <option v-for="tipusIncident in tipusIncidents" :key="tipusIncident.id"
                            :value="tipusIncident.id">{{ tipusIncident.nom }}</option>
                        </select>

                        <!--Incidentes aria-label="selectedIncident"-->
                        <select name="selectedIncident" id="selectedIncident" class="form-select ms-3 mt-3"
                        v-model="formData1.selectedIncident" :disabled="!formData1.selectedTipusIncident"   required>
                            <option value="" disabled selected>Incidencia</option>
                            <option v-for="incident in incidents" :key="incident.id"
                            :value="incident.id">{{ incident.nom }}</option>
                        </select>

                        <!--Definición y Instrucciones de Incidentes-->
                        <div >
                            <div id="definicionInci"  type="text" name="definicion"
                            placeholder="Definición" class="ms-3 mt-3"> {{ selectedIncidentData.definicio }}</div> <!--{{ definicio }}-->
                            <div id="indicacionesInci" type="text" name="instrucciones"
                            placeholder="Instrucciones" class="ms-3 mt-3">{{ selectedIncidentData.instruccions }}</div><!--{{ instruccions }}-->
                        </div>
                    </div>
                    <!----------Expedentes - Filtro/Buscador------------>
                    <div class="mt-5 ms-1" id="expedientes">
                        <tr >
                            <td v-for="result in formData1.searchResults" :key="result.id" style="display: table-row;">
                                <span>Expediente ID {{ result.id }} Codigo {{ result.codi }} Estado {{result.estat_expedients_id}}</span>
                            </td>
                        </tr>
                    </div>
                </div>
                <!--FINAL PRIMER RECTANGULO-->

            </div> <!--FINAL DIV ROW-->
        </form>
        <div>
            <!--<img v-show="formValid" src="../../../public/img/cheque.png" alt="Imagen 1" />
            <img v-show="!formValid" src="../../../public/img/alerta.png" alt="Imagen 2" />-->
        </div>
            <button :disabled="!formValid" @click="submitForm" style="margin-top:15px">Enviado</button>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    //props: {},
    data() {
        return {
            formValid: false,
            //Form que se envia al padre
            formData1: {
                inputNombre: '',
                inputApellidos:'',
                inputNotaComuna:'',
                telefonoLlamada: null,
                selectedTipusIncident: "",
                selectedIncident: "",
                searchResults: [],
            },
            
            //Selects anidados
            tipusIncidents: [],
            tipusIncident: {},
            incidents: [],
            incident: {},
            IncidentEscogido:[],
            selectedTipusIncident: "",
            selectedIncident: "",
        }
    },
    created(){
        //this.selectTipusIncident();
    },
    mounted() {
        console.log('Pagina 1 Montada');
        this.fetchTipusIncidents();
        this.validateForm1();
        
    },
    computed: {
        selectedIncidentData() {
            // Obtener el incidente seleccionado
            const selectedIncident = this.formData1.selectedIncident;
            return this.incidents.find(inc => inc.id === selectedIncident) || {};
        }
    },
    methods: {
        // llamada a la API en la función getSearchResults cada vez que se actualiza el valor del input o el select.
        async getSearchResults() {
            const response = await
                axios
                .get('/Broggi112/public/api/search/' + this.formData1.telefonoLlamada + '/' + this.formData1.selectedIncident)
                .then((response) => {
                    this.formData1.searchResults = response.data;
                })
                .catch((error) => {
                    console.error(error);
                });
                
            //emitimos un evento al padre con los resultados actualizados
            this.$emit('enviar-objeto1', this.formData1);
        },
        //VALIDACION DEL FORMULARIO
        validateForm1() {
            //La doble negación !! convierte el resultado en un valor booleano --METER CAMPOS OBLIGATORIOS
            this.formValid = !!this.formData1.inputNombre && !!this.formData1.inputApellidos;
            console.log(this.formValid);
            if (this.formValid == true) {
                //se envia al componente padre, pasamos el objeto lleno
                this.getSearchResults();
                //console.log(this.formData);
            }
        },
        //Selectores de los Tipus Incidentes con los Incidentes
        fetchTipusIncidents() {
            axios
                .get('/Broggi112/public/api/tipusincidents')
                .then((response) => {
                    this.tipusIncidents = response.data;
                    this.incidents = [];
                    console.log(response.data);
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        fetchIncidents() {
            axios
                .get('/Broggi112/public/api/tipusincidents/' + this.formData1.selectedTipusIncident)
                .then((response) => {
                    //Pasamos el objeto con todos los tipos de de Incidentes
                    this.tipusIncident = response.data;
                    this.incidents = this.tipusIncident.incidents;
                    this.formData1.selectedIncident = "";
                    console.log();
                })
                .catch((error) => {
                    console.error(error);
                });
        },
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
        overflow: auto;
    }
    /*ELEMENTOS DENTROS DE LOS DIVS*/
    #inputNombre{
        box-sizing: border-box;
        position: absolute;
        width: 186px;
        height: 49px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
    #inputApellidos{
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
    #telefonoLlamada{
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
    #inputNotaComuna{
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
    #selectTipusIncident, #selectedIncident, #definicionInci, #indicacionesInci {
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
    #selectTipusIncident {
       /* top: 5px;*/
       height: 38px;
    }
    #selectedIncident{
       top: 42px;
       height: 38px;
    }
    #definicionInci{
        top: 85px;
        overflow: auto;
    }
    #indicacionesInci{
        top: 128px;
        overflow: auto;
    }

</style>