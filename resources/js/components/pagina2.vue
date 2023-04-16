<template>
    <div>
        <!--Elementos Carta-->
            <div class="row ms-3 mt-2">

                <!--Elementos Tercer Rectangulo-->
                <div class="col ms-2" id="rectangulo3">Cataluña
                    <div id="catalunya" class="mt-3 ms-4 text-center"> Cataluña?</div>
                        <div>
                            <label id="selectCat" >
                                <input type="radio" id="Si" value="0" v-model="picked" />
                                <label for="Si">Si</label>
                                <input type="radio" id="No" value="1" v-model="picked" class="ms-2"/>
                                <label for="No">No</label>
                            </label>
                            <!--ESCONDER-->
                            <span class="ms-2">Eligió: {{ picked }} </span>
                            <!--Si es de Cataluña-->
                            <div v-if="picked === '0' ">
                            <!--<select id="selectProvincia"
                                name="selectProvincia"
                                class="form-select mt-2 ms-4"
                                aria-label="provincia"
                                v-model="localitzacio.selectProvincia"
                                @change="selectComarques()" >
                                    <option selected value="" class="text-center">Provincia</option>
                                    <option v-for="provincia in provincies" :key="provincia.id" :value="provincia.id" >{{ provincia.nom }}</option>
                                </select>

                                <br>
                                <select id="comarca"
                                name="comarca"
                                class="form-select mt-4 ms-4"
                                aria-label="comarca"
                                v-model="localitzacio.selectComarca"
                                @change="selectMunicipis()">
                                    <option selected value="" class="text-center">Comarca</option>
                                    <option v-for="comarca in comarques" :key="comarca.id" :value="comarca.id">{{comarca.nom}}</option>
                                </select>
                                <br>

                                <select id="selectMunicipi"
                                name="selectMunicipi"
                                v-model="localitzacio.selectMunicipi"
                                class="form-select mt-4 ms-4"
                                aria-label="selectMunicipi"
                                for="selectMunicipi" >Municipio
                                    <option selected value="" class="text-center">Municipio</option>
                                    <option v-for="municipi in municipis" :key="municipi.id" :value="municipi.id" >{{ municipi.nom }}</option>
                                </select>-->
                            </div>
                            <!--NO Cataluña-->
                            <div v-else>
                            <!--<div>
                                    <input id="provinciaInput" v-model=" localitzacio.provinciaInput" placeholder="Introduce Provincia"
                                    class="form-control text-center mt-2 ms-4" type="text" name="provinciaInput"
                                    aria-describedby="provinciaInput"/>
                                </div>

                                <div>
                                    <input id="muniOpcional" v-model=" localitzacio.muniOpcional" placeholder="Introduce Municipio"
                                    class="form-control text-center mt-5 ms-4" type="text" name="muniOpcional"
                                    aria-describedby="provinciaInput" />
                                </div>
                            </div>-->
                            </div>
                        </div>
                </div>
                <div class="col mt-3 ms-3" id="rectangulo4">
                    <!--Tipo Localización-->
                    <div class="selectSection">
                        <button type="button" data-number="1" class="active" @click="mostrarOpciones()">1</button>
                        <button type="button" data-number="2" @click="mostrarOpciones()">2</button>
                        <button type="button" data-number="3" @click="mostrarOpciones()">3</button>
                        <button type="button" data-number="4" @click="mostrarOpciones()">4</button>
                    </div>
                    <!--Elementos a mostrar-->
                    <div class="contentSection">
                        <div class="content" data-number="1">Escogido 1</div>
                        <div class="content" data-number="2">Escogido 2</div>
                        <div class="content" data-number="3">Escogido 3</div>
                        <div class="content" data-number="4">Escogido 4</div>

                    </div>

                </div>
                <div class="w-100 ms-2" id="expedientes2">Expedientes</div>
            </div> <!--FINAL DIV ROW-->
    </div>
</template>
<script>
export default {
    data() {
        return {

            picked:[],
            value:[],
            provincies: [],
            comarques: [],
            municipis: [],

            localitzacio:{
                selectedProvincia: '',
                selectedComarca: '',
                selectedMunicipi: '',
                muniOpcional:'',
                provinciaInput: '',
            }
        };
    },
    methods: {
        mostrarOpciones(){

        },
        selectProvincies() {
            let me = this;
            axios
                .get('provincies')
                .then((response) => {
                me.provincies = response.data;
            })
            /* .catch((err) => {
                console.log(err);
            })
            .finally(() => (this.loading = false));*/
        },
        selectComarques() {
            let me = this;
            let provincia = this.selectProvincia;
            axios
                .get('comarques/' + provincia)
                .then((response) => {
                    me.comarques = response.data;
                })
            /*  .catch((err) => {
                console.log(err);
            })
            .finally(() => (this.loading = false));*/
        },
        selectMunicipis() {
        let me = this;
            let comarca = this.selectComarca;
            axios
                .get('municipis/' + comarca)
                .then((response) => {
                    me.municipis = response.data;
                })
            /*.catch((err) => {
                console.log(err);
            })
            .finally(() => (this.loading = false));
            this.selectAgencies();*/
        },
    },
    created() {
        this.selectProvincies();
    },
    mounted() {
        console.log('Carta2 montada')
    },
}
</script>
<style>
    /*Divs - Rectanuglos/partes de la carta*/
    #rectangulo3 {
        /*box-sizing: border-box;
        width: 438px;*/
        height: 230px;
        border: 1px solid #025D73;
        border-radius: 15px;
    }

    #rectangulo4 {
        box-sizing: border-box;
        position: absolute;
        width: 430px;
        height: 360px;
        left: 525px;
        top: 106px;
        border: 1px solid #025D73;
        border-radius: 15px;
    }

    #expedientes2 {
        box-sizing: border-box;
        position: absolute;
        width: 439px;
        height: 162px;
       /* margin-left: 47px;*/
        top: 298px;
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
    #comarca {
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

</style>
