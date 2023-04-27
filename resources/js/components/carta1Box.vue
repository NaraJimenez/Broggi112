<template>
    <div>
    <div>
        <div id="botonesConjunto" class="mt-3 mb-1 d-flex justify-content-center">
            <div id="boton1">
                <a href="" id="linkMenuCarta1">
                    <div id="div" class="text-center mt-2"><b>1<br>Incidencias</b></div>
                </a>
            </div>

        <div id="boton2">
            <a href="" id="linkMenuCarta2">
                <div id="div" class="text-center mt-2"><b>2<br>Localización</b></div>
            </a>
        </div>

        <div id="boton3" >
            <a href="" id="linkMenuCarta3">
                <div id="div" class="text-center mt-2"><b>3<br>Agencias</b></div>
            </a>
        </div>
        </div>
    </div>

    <div id="primerRectangulo" class="mt-4 ms-5">
        <form></form>


        <div id="contenidoPrimerRectangulo" class="mt-2">
            <div id="numTelf" class="mt-4 ms-4 text-muted">Núm. Telf</div>
            <div id="codigoLlamada" class="mt-4 text-muted">Código Llamada</div>
            <div id="tiempoLlamada" class="text-muted text-center"> TIEMPO LLAMADA
                <!--<p class="">Temps de trucada: {{ formattedElapsedTime }}</p>-->
            </div>
            <div id="" class="text-muted" >
                <textarea name="notaComunaInput" id="notaComunaInput" cols="10" rows="10" class="form-control"
                placeholder="Nota Comuna"
                v-model="trucada.notaComunaInput"></textarea>
            </div>
        </div>

        <!--<input type="hidden" name="tempsTrucada" id="tempsTrucada" v-model="trucada.tempsTrucada">
        <input type="hidden" name="usuaris_id" id="usuaris_id" v-model="trucada.usuaris_id">
        <input type="hidden" name="codiTrucada" id="codiTrucada" v-model="this.codigoTrucada">-->
    </div>
</div>
</template>
<script>
//import de componenetes hermanos
export default {
    data(){
        return {
        elapsedTime: 0,
        timer: undefined,
        //provincies: [],
        //municipis: [],
        //comarques: [],
        //tipusIncidents: [],
        //incidents: [],
        agencies: [],

        trucada: {
            //selectComarca: "",
            //tipusIncident: "",
           // procedenciaInput: '',
            //localitzacio: "",
            phoneInput: '',
            adreca: '',
            antecedents: '',
            tempsTrucada: 0,
            nomIntelocutor: '',
            //selectMunicipi: '',
            //selectProvincia: "",
            tipusLoc: '',
            tipusVia: '',
            nomVia: '',
            numVia: '',
            escala: '',
            pis: '',
            porta: '',
            nomPunt: '',
            nomCarretera: '',
            puntKilometric: '',
            sentitCarretera: '',
            //incident: '',
            notaComunaInput: '',
            codiTrucada: '',
            agencia: ''
            }
        }
    },
    props:{
      numTelefon: String,
      useridm: Number,
      codigoTrucada: Number,
    },
    computed: {
        formattedElapsedTime() {
        const date = new Date(null);
        date.setSeconds(this.elapsedTime / 1000);
        const utc = date.toUTCString();
        this.trucada.tempsTrucada = this.elapsedTime / 1000;
        //return utc.substr(utc.indexOf(":") - 2, 8);
        },
    },
    methods: {
        start() {
            this.trucada.codiTrucada = this.codigoTrucada;
            this.timer = setInterval(() => {
                this.elapsedTime += 1000;
            }, 1000);
            },
            stop(e) {
            clearInterval(this.timer);
            this.elapsedTime = 0;
            if (e === 0) {
                this.$emit('status', 'Declined');
            } else {
                this.$emit('status', 'Accepted');
            }
            this.currentDateTime();
        },
        currentDateTime(){
            const current = new Date();
            const date = current.getFullYear()+'-'+(current.getMonth()+1)+'-'+current.getDate();
            const time = current.getHours() + ":" + current.getMinutes() + ":" + current.getSeconds();
            const dateTime = date +' '+ time;
            trucada.dataCreacio = dateTime;
        },

    },

    mounted() {

    }
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
#boton1{
    width: 170px;
    height: 70px;
    background: #025D73;
    border-radius: 10px;
    transform: rotate(0.26deg);
}

#boton2{
    width: 170px;
    height: 70px;
    margin-left: 18px;
    background: #EBEFEF;
    border-radius: 10px;
    transform: rotate(0.26deg);
}

#boton3{
    width: 170px;
    height: 70px;
    background: #EBEFEF;
    border-radius: 10px;
    margin-left: 18px;
    transform: rotate(0.26deg);
}

</style>
