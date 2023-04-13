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
//import de componenetes hermanos
export default {
    data (){
        return{
           //Objeto de elementos a guardar
            elementosGuardar:[],
            elapsedTime: 0,
            timer: undefined,

            trucada: {
      usuaris_id: this.useridm,
      selectComarca: "",
      tipusIncident: "",
      procedenciaInput: '',
      localitzacio: "",
      phoneInput: '',
      adreca: '',
      antecedents: '',
      tempsTrucada: 0,
      nomIntelocutor: '',
      selectMunicipi: '',
      selectProvincia: "",
      tipusLoc: '',
      tipusVia: '',
      nomVia: '',
      numVia: '',
      escala: '',
      pis: '',
      porta: '',
      referenciesLoc1: '',
      nomPunt: '',
      referenciesLoc2: '',
      referenciesLoc3: '',
      nomCarretera: '',
      puntKilometric: '',
      sentitCarretera: '',
      referenciesLoc4: '',
      referenciesLoc5: '',
      incident: '',
      notaComunaInput: '',
      codiTrucada: '',
      agencia: ''
      }
        };


    },
    computed: {
    formattedElapsedTime() {
      const date = new Date(null);
      date.setSeconds(this.elapsedTime / 1000);
      const utc = date.toUTCString();
      this.trucada.tempsTrucada = this.elapsedTime / 1000;
      return utc.substr(utc.indexOf(":") - 2, 8);
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
#notaComuna{
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
</style>
