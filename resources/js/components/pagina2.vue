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
                            v-model="selectedProvincia" @change="fetchComarques()" required>
                                <option disabled selected value="" class="text-center">Provincia</option>
                                <option v-for="provincia in provincies" :key="provincia.id" :value="provincia.id" class="text-center">
                                    {{ provincia.nom }}
                                </option>

                            </select>

                            <!--Comarca-->
                            <select id="selectComarca" name="selectComarca" class="form-select mt-2 ms-3"
                            v-model="selectedComarca" @change="fetchMunicipis()" :disabled="!selectedProvincia" required>
                                <option disabled selected  value="" class="text-center">Comarca</option>
                                <option v-for="comarca in comarques" :key="comarca.id" :value="comarca.id" class="text-center">
                                    {{ comarca.nom }}
                                </option>

                            </select>
                            <!--Municipi-->
                            <select id="selectMunicipi" name="selectMunicipi" class="form-select mt-2 ms-3"
                            v-model="selectedMunicipi" :disabled="!selectedComarca" required>
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
                            class="form-control text-center mt-2 ms-4" type="text" name="provinciaInput">
                            <!--v-model="trucada.provincia" -Nombre en API a recoger-->

                            <!--Input Municipi - OPCIONAL-->
                            <input id="muniOpcional" placeholder="Introduce Municipio"
                            class="form-control text-center mt-5 ms-4" type="text" name="muniOpcional">
                        </div>

                </div>
                <div class="col mt-3 ms-1" id="rectangulo4">
                    <!--Tipo Localización-->
                    <div class="container mt-3" >
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="pill" href="#carretera">Carretera</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#calle">Calle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" data-bs-toggle="pill" href="#singular">Punto <br>Singular</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#oblacion">Población</a>
                            </li>
                        </ul>

                        <!-- Tab/Pestañas Localización-->
                        <div class="tab-content" id="tabOpciones">
                            <!--CARRETERA-->
                            <div class="tab-pane container active" id="carretera">
                                <label for="inputCarretera" class="ms-1 mt-3"> Nombre Carretera</label>
                                <input id="inputCarretera" class="ms-1 mt-3" type="text" name="inputCarretera" placeholder="Introduce Carretera">
                                <br>
                                <label for="inputpuntoKM" class="ms-1 mt-3">Punto Km</label>
                                <input id="inputpuntoKM" class="ms-1 mt-3" type="text" name="inputpuntoKM" placeholder="Introduce Kilometro">
                                <br>
                                <label for="inputSentido" class="ms-1 mt-3 mb-4">Sentido</label>
                                <input id="inputSentido" class="ms-1 mt-3 mb-4" type="text" name="inputSentido" placeholder="Introduce Sentido" >
                            </div>

                            <!--CALLE-->
                            <div class="tab-pane container fade" id="calle">
                                <label for="inputVia" class=" mt-2 ">Tipo vía</label>
                                <input id="inputVia" class="ms-1 mt-1" type="text" name="inputVia" placeholder="Introduce Vía">
                                <br>
                                <label for="inputCalle" class="mt-3">Nombre Calle</label>
                                <input id="inputCalle" class="ms-1 mt-2" type="text" name="inputCalle" placeholder="Introduce Calle">
                                <br>
                                <label for="inputCasa" class="mt-3">Número</label>
                                <input id="inputCasa" class=" ms-1 mt-2" type="text" name="inputCasa" placeholder="Introduce Casa">
                                <br>
                                <label for="inputEscalera" class="mt-3">Escalera</label>
                                <input id="inputEscalera" class="ms-1 mt-2" type="text" name="inputEscalera" placeholder="Introduce Escalera">
                                <br>
                                <label for="inputPiso" class="mt-3">Piso</label>
                                <input id="inputPiso" class="ms-1 mt-2" type="text" name="ninputPiso" placeholder="Introduce Piso">
                                <br>
                                <label for="inputPuerta" class=" mt-3 ">Puerta</label>
                                <input id="inputPuerta" class="ms-1 mt-2" type="text" name="inputPuerta" placeholder="Introduce Puerta">
                            </div>

                            <!--PUNTO SINGULAR-->
                            <div class="tab-pane container fade mt-3" id="singular">
                                <label for="inputPS" class="mt-1">Punto Singular</label>
                                <input id="inputPS" class="ms-1" type="text" name="inputPS" placeholder=" Introduce Punto">
                            </div>

                            <!--POBLACION inputPoblacionNombre-->
                            <div class="tab-pane container fade mt-3" id="poblacion">
                                <label for="inputPob" class="">Nombre Población</label>
                                <input id="inputPob" class="" type="text"
                                name="inputPob" placeholder="Introduce Poblacion">
                            </div>
                        </div>
                    </div>
                </div>
                <!--EXPEDIENTES-FILTRO-->
                <div class=" ms-3 mt-4" id="expedientes2">Expedientes</div>
            </form>

        </div> <!--FINAL DIV ROW-->
        <!--
        <button style="margin-top: 135px;" @click="finalizarLlamada()">
                Finalizar Llamada
        </button>-->
    </div>
</template>
<script>
export default {
    data() {
        return {
            picked:[],

            provincies: [],
            provincia: {},
            
            comarques: [],
            comarca: {},

            municipis: [],

            selectedProvinciaTrucada: "",
            selectedComarcaTrucada: "",
            selectedMunicipiTrucada: "",

            selectedProvincia: "",
            selectedComarca: "",
            selectedMunicipi: "",

        };
    },
    created() {
       // this.selectProvincies();
    },
    mounted() {
        console.log('Carta2 montada');
        this.fetchProvincies();
    },
    methods: {
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

    #muniOpcional{
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
