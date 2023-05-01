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
                                <input type="radio" id="Si" value="1" v-model="formData.catEscogido" />
                                <label for="Si">Si</label>
                                <input type="radio" id="No" value="0" v-model="formData.catEscogido" class="ms-2"/>
                                <label for="No">No</label>
                            </label>
                        </div>
                        <!--DEPENDE DE LA OPCION-->
                        <!--SI ES CATALUÑA-->
                        <div v-if=" formData.catEscogido === '1' ">
                            <!--Provincia-->
                            <select id="selectProvincia" name="selectProvincia" class="form-select mt-2 ms-3"
                            v-model="formData.selectedProvincia" @change="fetchComarques()"  @input="validateForm" required>
                                <option disabled selected value="" class="text-center" >Provincia</option>
                                <option v-for="provincia in provincies" :key="provincia.id" :value="provincia.id" class="text-center">
                                    {{ provincia.nom }}
                                </option>

                            </select>

                            <!--Comarca-->
                            <select id="selectComarca" name="selectComarca" class="form-select mt-2 ms-3"
                            v-model="formData.selectedComarca" @change="fetchMunicipis()" :disabled="!formData.selectedProvincia"
                            @input="validateForm" required>
                                <option disabled selected  value="" class="text-center">Comarca</option>
                                <option v-for="comarca in comarques" :key="comarca.id" :value="comarca.id" class="text-center">
                                    {{ comarca.nom }}
                                </option>

                            </select>
                            <!--Municipi-->
                            <select id="selectMunicipi" name="selectMunicipi" class="form-select mt-2 ms-3"
                            v-model="formData.selectedMunicipi" :disabled="!formData.selectedComarca"
                            @input="validateForm" required>
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
                            v-model="formData.municipioInput">
                        </div>

                </div>
                <div class="col mt-3 ms-1" id="rectangulo4">
                    <!--Tipo Localización-->
                    <div class="container mt-3" >
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="pill" value="1" href="#carretera" role="tab" @click="handleNavItemSelection">Carretera</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" value="2" href="#calle" role="tab" @click="handleNavItemSelection">Calle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" data-bs-toggle="pill" value="3" href="#singular" @click="handleNavItemSelection" role="tab">Punto <br>Singular</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#poblacion" value="4" @click="handleNavItemSelection" role="tab">Población</a>
                            </li>
                        </ul>

                        <!-- Tab/Pestañas Localización-->
                        <div class="tab-content" id="tabOpciones">
                            <!--CARRETERA-->
                            <div class="tab-pane container active" id="carretera">
                                <div class="mt-3" >
                                    <label for="inputCarretera" > Carretera</label>
                                    <input id="inputCarretera"  type="text" name="inputCarretera"
                                    placeholder="Introduce Carretera" v-model="formData.inputCarretera">
                                </div>

                                <br>
                                <div  >
                                    <label for="inputpuntoKM">Punto Km</label>
                                    <input id="inputpuntoKM"   type="text" name="inputpuntoKM"
                                    placeholder="Introduce Kilometro" v-model="formData.inputpuntoKM">
                                </div>
                                <br>
                                <div  >
                                    <label for="inputSentido">Sentido</label>
                                    <input id="inputSentido"  type="text" name="inputSentido"
                                    placeholder="Introduce Sentido" v-model="formData.inputSentido">
                                </div>

                            </div>

                            <!--CALLE-->
                            <div class="tab-pane container fade" id="calle">
                                <div class="form-group">
                                    <label for="inputVia" class=" mt-2 ">Tipo vía</label>
                                    <input id="inputVia" class="form-control ms-1 mt-1" type="text" name="inputVia"
                                    placeholder="Introduce Vía" v-model="formData.inputVia">
                                </div>
>>>>>>>>> Temporary merge branch 2
                                <br>
                                <label for="ExpinputCalle"  >Nombre Calle</label>
                                <input id="ExpinputCalle"   type="text" name="ExpinputCalle"
                                placeholder="Introduce Calle" v-model="formData.inputCalle">
                                <br>
                                <label for="ExpExpinputCasa">Número</label>
                                <input id="ExpinputCasa"   type="text" name="ExpinputCasa"
                                placeholder="Introduce Casa" v-model="formData.inputCasa">
                                <br>
                                <label for="ExpinputEscalera" >Escalera</label>
                                <input id="ExpinputEscalera"  type="text" name="ExpinputEscalera"
                                placeholder="Introduce Escalera" v-model="formData.inputEscalera">
                                <br>
                                <label for="ExpinputPiso" >Piso</label>
                                <input id="ExpinputPiso"   type="text" name="ExpinputPiso"
                                placeholder="Introduce Piso" v-model="formData.inputPiso">
                                <br>
                                <label for="ExpinputPuerta" >Puerta</label>
                                <input id="ExpinputPuerta" type="text" name="ExpinputPuerta"
                                placeholder="Introduce Puerta" v-model="formData.inputPuerta">
                            </div>

                            <!--PUNTO SINGULAR-->
                            <div class="tab-pane container fade mt-3" id="singular">
                                <div class="form-group">
                                    <label for="inputPS">Punto Singular</label>
                                    <input id="inputPS" class="form-control" type="text" name="inputPS"
                                    placeholder=" Introduce Punto" v-model="formData.inputPS">
                                </div>
                            </div>

                            <!--POBLACION inputPoblacionNombre-->
                            <div class="tab-pane container fade mt-3" id="poblacion">
                                <div class="form-group">
                                    <label for="inputPob">Nombre Población</label>
                                    <input id="inputPob" class="form-control" type="text"
                                    name="inputPob" placeholder="Introduce Poblacion"
                                    v-model="formData.inputPob">
                                </div>
                            </div>
                        </div>
                        <!--<p> {{ formData.selectedNavItem }}</p>-->
                    </div>
                </div>
                <!--EXPEDIENTES-FILTRO-->
                <div class=" ms-3 mt-4" id="expedientes2">
                    <tr >
                        <td v-for="result in formData.searchResults" :key="result.id" style="display: table-row;">
                            <span>Expediente ID {{ result.id }} Codigo {{ result.codi }} Estado {{result.estat_expedients_id}}</span>
                        </td>
                    </tr>
                </div>
            </form>

        </div> <!--FINAL DIV ROW-->

            <div  style="margin-top:140px" class="badge bg-success" v-show="formValid" >¡Hecho!</div>
            <div  style="margin-top:140px" class="badge bg-danger" v-show="!formValid">Faltan campos</div>
            <button id="botonFinal" :disabled="!formValid" @click="openModalWithData" style="margin-top:150px">Finalizar Llamada</button>
    </div>
</template>
<script>
import axios from 'axios';
//import { ref, reactive } from "vue";
export default {
    props: {
        //searchResults: Array,
        objetoRecibido1: Object
    },
    data() {
        return {
            formValid: false,

            //Para hacer las consultas
            provincies: [],
            provincia: {},
            comarques: [],
            comarca: {},
            municipis: [],

            //Este objeto de datos se pasará al padre una vez relleno
            formData: {
                selectedNavItem: '1',
                //Si es o no de Cat
                catEscogido:'1',
                provinciaInput: '',
                municipioInput: '',
                selectedProvincia: "",
                selectedComarca: "",
                selectedMunicipi: "",
                //Menu Tab - FALTA METER
                menuTabEscogido: '',
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
                //Se guardan la busqueda para enviar al padre de nuevo
                searchResults: [],
            },
        };
    },
    created() {
    },
    mounted() {
        console.log('Carta2 montada');
        this.fetchProvincies();
        this.validateForm();
        if (this.objetoRecibido1) {
            this.formData.searchResults = this.objetoRecibido1.searchResults
            console.log('ha pasado bien');
        }
    },
    methods: {
        //PRUEBA MODAL
        openModalWithData() {
            this.$emit('openModalWithData');
        },
        //Select tab este guardara el tipo de localizacion
        handleNavItemSelection(event) {
            const selectedNavItem = event.target.getAttribute('value');
            this.formData.selectedNavItem = parseInt(selectedNavItem);
            console.log(this.formData.selectedNavItem);
        },
        // llamada a la API en la función getSearchResults cada vez que se actualiza el valor del input o el select.
        async getSearchResults() {
            const response = await
                axios
                .get('/Broggi112/public/api/search/' + this.formData.selectedMunicipi)
                .then((response) => {
                    this.formData.searchResults = response.data;
                })
                .catch((error) => {
                    console.error(error);
                });

            //emitimos un evento al padre con los resultados actualizados
            this.$emit('enviar-objeto', this.formData);
        },
        //Validar Form
        validateForm() {
            if (this.formData.catEscogido === '1') {

                if (!this.formData.selectedProvincia && !this.formData.selectedComarca && !this.formData.selectedMunicipi){
                    this.formValid = false;
                    console.log('Ha entrado al id de catEscgidos 1 ' + this.formValid)
                } else {
                    this.formValid = true;
                }
            } else {
                this.formValid = !!this.formData.provinciaInput;
                //el && !!this.formData.municipioInput es opcional
            }
            //  QUIZAS METER ESTO DENTRO DEL BOOLEANO CUANDOES TRUE
            console.log(this.formValid);
            if (this.formValid == true) {
                //se envia al componente padre, pasamos el objeto lleno
                this.getSearchResults();

            }
        },
        fetchProvincies() {
            axios
                .get('/Broggi112/public/api/provincies')
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
                .get('/Broggi112/public/api/provincies/' + this.formData.selectedProvincia)
                .then((response) => {
                    this.provincia = response.data;
                    console.log(response.data);
                    this.comarques = this.provincia.comarques;
                    this.formData.selectedComarca = "";
                    this.municipis = [];
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        fetchMunicipis() {
            axios
                .get('/Broggi112/public/api/comarques/' + this.formData.selectedComarca)
                .then((response) => {
                    this.comarca = response.data;
                    console.log(response.data);
                    this.municipis = this.comarca.municipis;
                    //this.municipis = response.data;
                    this.formData.selectedMunicipi = "";
                })
                .catch((error) => {
                    console.error(error);
                });
        },
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
        height: 117px;
       /* margin-left: 47px;*/
        top: 339px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
        overflow: auto;
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
        left: 69px;
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
        left: 69px;
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
        left: 69px;
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
        left: 69px;
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
        left:60px;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
    #provinciaInput {
        box-sizing: border-box;
        position: absolute;
        width: 363px;
        height: 35px;
        left:60px;
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

        display: block;
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
        left:150px;
    }
    #inputViaLabel{
        left:2px;
    }
    #inputVia {
        width: 220px;
        height: 34px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }

    #botonFinal{
        background: #E33386;
        box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
        color: white;
    }
    #botonFinal:disabled {
        background: #e5e5e5;
        box-shadow: none;
        color: #E33386;
    }
</style>
