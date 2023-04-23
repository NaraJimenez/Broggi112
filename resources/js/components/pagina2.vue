<template>
    <div>
        <!--Elementos Carta-->
        <div class=" ms-3 mt-2">
            <form>
                <!--Elementos Tercer Rectangulo-->
                <div class="col ms-3" id="rectangulo3">
                    <div id="catalunya" class="mt-2 ms-3 text-center mb-2"> Cataluña?</div>
                        <div>
                            <label id="selectCat" >
                                <input type="radio" id="Si" value="0" v-model="picked" />
                                <label for="Si">Si</label>
                                <input type="radio" id="No" value="1" v-model="picked" class="ms-2"/>
                                <label for="No">No</label>
                            </label>
                        </div>
                        <!--DEPENDE DE LA OPCION-->
                        <!--SI ES CATALUÑA-->
                        <div v-if="picked === '0' ">
                            <!--Provincia-->
                            <select id="selectProvincia" name="selectProvincia" class="form-select mt-2 ms-3"
                            v-model="formData.selectedProvincia" @change="fetchComarques()" required>
                                <option disabled selected value="" class="text-center">Provincia</option>
                                <option v-for="provincia in provincies" :key="provincia.id" :value="provincia.id" class="text-center">
                                    {{ provincia.nom }}
                                </option>

                            </select>

                            <!--Comarca-->
                            <select id="selectComarca" name="selectComarca" class="form-select mt-2 ms-3"
                            v-model="formData.selectedComarca" @change="fetchMunicipis()" :disabled="!selectedProvincia" required>
                                <option disabled selected  value="" class="text-center">Comarca</option>
                                <option v-for="comarca in comarques" :key="comarca.id" :value="comarca.id" class="text-center">
                                    {{ comarca.nom }}
                                </option>

                            </select>
                            <!--Municipi-->
                            <select id="selectMunicipi" name="selectMunicipi" class="form-select mt-2 ms-3"
                            v-model="formData.selectedMunicipi" :disabled="!selectedComarca" required>
                                <option disabled selected value="" class="text-center">Municipi</option>
                                <option v-for="municipi in municipis" :key="municipi.id" :value="municipi.id" class="text-center">
                                    {{ municipi.nom }}
                                </option>

                            </select>
                        </div>
                        <!--NO ES CATALUÑA-->
                        <div v-else>
                            <!--Input Provincia-->
                            <input  id="provinciaInput"  placeholder="Introduce Provincia"
                            class="form-control text-center mt-2 ms-4" type="text" name="provinciaInput"
                            v-model="formData.provinciaInput" @input="validateForm">
                            <!--v-model="trucada.provincia" -Nombre en API a recoger-->

                            <!--Input Municipi - OPCIONAL-->
                            <input id="municipioInput" placeholder="Introduce Municipio"
                            class="form-control text-center mt-5 ms-4" type="text" name="municipioInput"
                            v-model="formData.municipioInput" @input="validateForm">
                        </div>

                </div>
                <div class="col mt-3 ms-1" id="rectangulo4">
                    <!--Tipo Localización-->
                    <div class="container mt-3" >
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="pill" href="#carretera" role="tab" @click="setActiveElement('1')">Carretera</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#calle" role="tab" @click="setActiveElement('2')">Calle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" data-bs-toggle="pill" href="#singular" @click="setActiveElement('3')" role="tab">Punto <br>Singular</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#poblacion" @click="setActiveElement('4')" role="tab">Población</a>
                            </li>
                        </ul>

                        <!-- Tab/Pestañas Localización-->
                        <div class="tab-content" id="tabOpciones">
                            <!--CARRETERA-->
                            <div class="tab-pane container active" id="carretera" value="1" >
                                <label for="inputCarretera" class="ms-1 mt-3"> Nombre Carretera</label>
                                <input id="inputCarretera" class="form-control ms-1 mt-3" type="text" name="inputCarretera"
                                placeholder="Introduce Carretera" v-model="formData.inputCarretera">
                                <br>
                                <label for="inputpuntoKM" class="ms-1 mt-3">Punto Km</label>
                                <input id="inputpuntoKM" class="form-control ms-1 mt-3" type="text" name="inputpuntoKM"
                                placeholder="Introduce Kilometro" v-model="formData.inputpuntoKM">
                                <br>
                                <label for="inputSentido" class="ms-1 mt-3 mb-4">Sentido</label>
                                <input id="inputSentido" class="form-control ms-1 mt-3 mb-4" type="text" name="inputSentido"
                                placeholder="Introduce Sentido" v-model="formData.inputSentido">
                            </div>

                            <!--CALLE-->
                            <div class="tab-pane container fade" id="calle" value="2" >
                                <label for="inputVia" class=" mt-2 ">Tipo vía</label>
                                <input id="inputVia" class="form-control ms-1 mt-1" type="text" name="inputVia"
                                placeholder="Introduce Vía" v-model="formData.inputVia">
                                <br>
                                <label for="inputCalle" class="mt-3">Nombre Calle</label>
                                <input id="inputCalle" class="form-control ms-1 mt-2" type="text" name="inputCalle"
                                placeholder="Introduce Calle" v-model="formData.inputCalle">
                                <br>
                                <label for="inputCasa" class="mt-3">Número</label>
                                <input id="inputCasa" class="form-control ms-1 mt-2" type="text" name="inputCasa"
                                placeholder="Introduce Casa" v-model="formData.inputCasa">
                                <br>
                                <label for="inputEscalera" class="mt-3">Escalera</label>
                                <input id="inputEscalera" class="form-control ms-1 mt-2" type="text" name="inputEscalera"
                                placeholder="Introduce Escalera" v-model="formData.inputEscalera">
                                <br>
                                <label for="inputPiso" class="mt-3">Piso</label>
                                <input id="inputPiso" class="form-control ms-1 mt-2" type="text" name="ninputPiso"
                                placeholder="Introduce Piso" v-model="formData.inputPiso">
                                <br>
                                <label for="inputPuerta" class=" mt-3 ">Puerta</label>
                                <input id="inputPuerta" class="form-control ms-1 mt-2" type="text" name="inputPuerta"
                                placeholder="Introduce Puerta" v-model="formData.inputPuerta">
                            </div>

                            <!--PUNTO SINGULAR-->
                            <div class="tab-pane container fade mt-3" id="singular" value="3">
                                <label for="inputPS" class="mt-1">Punto Singular</label>
                                <input id="inputPS" class="form-control ms-1" type="text" name="inputPS"
                                placeholder=" Introduce Punto" v-model="formData.inputPS">
                            </div>

                            <!--POBLACION inputPoblacionNombre-->
                            <div class="tab-pane container fade mt-3" id="poblacion" value="4" >
                                <label for="inputPob" class=" ms-1">Nombre Población</label>
                                <input id="inputPob" class="form-control  ms-1" type="text"
                                name="inputPob" placeholder="Introduce Poblacion"
                                v-model="formData.inputPob">
                            </div>
                        </div>
                        <p id="activeElement" name="activeElement" > {{ activeElement }}</p>
                    </div>
                </div>
                <!--EXPEDIENTES-FILTRO-->
                <div class=" ms-3 mt-4" id="expedientes2">Expedientes</div>

            </form>


        </div> <!--FINAL DIV ROW-->
            <button :disabled="!formValid" @click="submitForm" style="margin-top:140px">Enviado</button>
    </div>
</template>
<script>
export default {
    props: {},
    data() {
        return {
            //ESTE HAY QUE PONERLO DENTRO DE LA CARTA
            activeElement: '1',
            formValid: false,
            //Este objeto de datos se pasará al padre una vez relleno
            formData: {
                //Si es o no de Cat
                provinciaInput: '',
                municipioInput: '',
                selectedProvincia: "",
                selectedComarca: "",
                selectedMunicipi: "",

                //
                //Carretera
                inputCarretera: '',
                inputpuntoKM:'',
                inputSentido:'',
                //Calle
                inputVia:'',
                inputCalle: '',
                inputCasa:'',
                inputEscalera: '',
                inputPiso: '',
                inputPuerta: '',
                //Punto Singular
                inputPS: '',
                //Población
                inputPob: '',
            },

            //METER TODOS LOS INPUTS EN UNA SOLA ARRAY O OBJETO Y METERLO EN EL FORM COMO LOALIZACIÓN
            //HA DE RECIBIR LA INFO DEL FILTRO



            //Esto se pone dentro de la carta
            picked:[],
            provincies: [],
            provincia: {},
            comarques: [],
            comarca: {},
            municipis: [],
            /*selectedProvinciaTrucada: "",
            selectedComarcaTrucada: "",
            selectedMunicipiTrucada: "",
            selectedProvincia: "",
            selectedComarca: "",
            selectedMunicipi: "",*/
        };
    },
    created() {
    },
    mounted() {
        console.log('Carta2 montada');
        this.fetchProvincies();
        this.validateForm();
    },
    methods: {
        //Select tab este guardara el tipo de localizacion
        setActiveElement(value) {
      const element = document.querySelector(`.tab-pane.container.active[value="${value}"]`);
      if (element) {
        this.activeElement = value;
      }
    },
        validateForm() {
            //La doble negación !! convierte el resultado en un valor booleano --METER CAMPOS OBLIGATORIOS
            this.formValid = !!this.formData.provinciaInput && !!this.formData.municipioInput;
            console.log(this.formValid);
            if (this.formValid == true) {
                //se envia al componente padre, pasamos el objeto lleno
                this.$emit('enviar-objeto', this.formData);
                //console.log(this.formData);
            }
        },
        fetchProvincies() {
            axios
                .get('/api/provincies')
                .then((response) => {
                    this.provincies = response.data;
                    this.comarques = [];
                    console.log(response.data);
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        fetchComarques() {
            axios
                .get('/api/provincies/' + this.selectedProvincia)
                .then((response) => {
                    this.provincia = response.data;
                    console.log(response.data);
                    this.comarques = this.provincia.comarques;
                    this.selectedComarca = "";
                    this.municipis = [];
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        fetchMunicipis() {
            axios
                .get('/api/comarques/' + this.selectedComarca)
                .then((response) => {
                    this.comarca = response.data;
                    console.log(response.data);
                    this.municipis = this.comarca.municipis;
                    //this.municipis = response.data;
                    this.selectedMunicipi = "";
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        //Al finalizar la llamada se para el tiempo, aparece el modal y se quedan los datos guardados en un objeto
        //finalizarLlamada(){
            //Mostramos modal
            /*this.myModal = new Bootstrap.Modal('#finModal')
            this.myModal.show();*/
        //}
    },
}
</script>
<style>
    /*Divs - Rectanuglos/partes de la carta*/
    #rectangulo3 {
        box-sizing: border-box;
        width: 438px;
        height: 230px;
        border: 1px solid #025D73;
        border-radius: 15px;
    }
    #rectangulo4 {
        box-sizing: border-box;
        position: absolute;
        width: 443px;
        height: 360px;
        left: 525px;
        top: 106px;
        border: 1px solid #025D73;
        border-radius: 15px;
    }
    #expedientes2 {
        box-sizing: border-box;
        position: absolute;
        width: 440px;
        height: 130px;
       /* margin-left: 47px;*/
        top: 327px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
    /*Divs dentro de los resctangulos*/
    .content:not(:first-child) {
        display: none;
    }
    #catalunya{
        box-sizing: border-box;
        position: absolute;
        width: 207px;
        height: 35px;
        left: 78px;
        top: 138px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
    #selectCat{
        margin-left: 280px;
        margin-top: 37px;
    }
    #selectProvincia {
        box-sizing: border-box;
        position: absolute;
        width: 363px;
        height: 37px;
        left: 78px;
        /*left: 100px;
        top: 213px;*/
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
    #selectComarca{
        box-sizing: border-box;
        position: absolute;
        width: 363px;
        height: 37px;
        left: 78px;
        /*left: 100px;*/
        top: 225px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
    #selectMunicipi{
        box-sizing: border-box;
        position: absolute;
        width: 363px;
        height: 37px;
        left: 78px;
        /*left: 100px;*/
        top: 270px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
    #municipioInput{
        box-sizing: border-box;
        position: absolute;
        width: 363px;
        height: 35px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
    #provinciaInput {
        box-sizing: border-box;
        position: absolute;
        width: 363px;
        height: 35px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
    /*MENU TABS LOCALIZACION*/
    #tabOpciones{
        box-sizing: border-box;
       /* position: absolute;
        width: 381px;*/
        height: 252px;/*
        left: 669px;
        top: 326px;*/
        background: #FFFFFF;
        /* Boton principal Hover */
        border: 3px solid #025D73;
        border-radius: 10px;
    }
    #inputPob{
        box-sizing: border-box;
        /*position: absolute;*/
        width: 220px;
        height: 34px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
    #inputPS{
        box-sizing: border-box;
        /*position: absolute;*/
        width: 220px;
        height: 34px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
    #inputVia, #inputCalle, #inputCasa, #inputEscalera, #inputPiso, #inputPuerta {
        box-sizing: border-box;
        position: absolute;
        width: 220px;
        height: 34px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
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
