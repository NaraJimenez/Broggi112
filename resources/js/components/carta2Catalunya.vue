<template>
    <div id="contenidoPrimerRectangulo2" class="mt-2">
        <form>
            <!--OPCION - Si es de Cataluña o no-->
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
            <div v-if="picked === '0'">
                <select v-model="selectedProvincia" id="selectProvincia" class="mt-2 ms-4">
                    <option disabled value="" class="text-center">Provincia</option>
                    <option v-for="provincia in provincies" :key="provincia.id" :value="provincia.id">
                        {{ provincia.nom }}
                    </option>
                </select> <br>
                <select v-model="selectedComarca" id="selectComarca" class="mt-4 ms-4">
                    <option disabled value="" class="text-center">Comarca</option>
                    <option v-for="comarca in comarques" :key="comarca.id" :value="comarca.id">
                        {{ comarca.nom }}
                    </option>
                </select> <br>
                <select v-model="selectedMunicipi" id="selectMunicipio" class="mt-4 ms-4">
                    <option disabled value="" class="text-center">Municipio</option>
                    <option v-for="municipi in municipis" :key="municipi.id" :value="municipi.id">
                        {{ municipi.nom }}
                    </option>
                </select>
            </div>
            <!--NO Cataluña-->
            <div v-else>
                <div>
                    <!-- <p>Message is: {{ message }}</p>-->
                    <input id="provinciaInput" v-model="message" placeholder="Introduce Provincia" class="text-center mt-2 ms-4" />
                </div>

                <div>
                    <!-- <p>Message is: {{ message }}</p>-->
                    <input id="muniOpcional" v-model="message" placeholder="Introduce Municipio" class="text-center mt-5 ms-4" />
                </div>
            </div>
        </div>
         <!-- <div>


          Provincia
          <select class="form-select" v-model="selectedProvinciaIdentiTrucada" @change="fetchComarques" required>
            <option v-if="carregant" value="" disabled selected>Carregant...</option>
            <option v-else value="" disabled selected>Provincia</option>
            <option v-for="provincia in provincies" :key="provincia.id" :value="provincia.id">
                {{ provincia.nom }}
            </option>
        </select>-->
          <!--SI ES EN CATALUNYA APARECEN ESTOS SINO SE QUEDAN DESABILITADO
          <select class="form-select" v-model="selectedComarcaIdentiTrucada" @change="fetchMunicipis" :disabled="!selectedProvincia" required>
            <option value="" disabled selected>Comarca</option>
            <option v-for="comarca in comarques" :key="comarca.id" :value="comarca.id">
                {{ comarca.nom }}
            </option>
          </select>
          <select class="form-select" v-model="selectedMunicipiIdentiTrucada" :disabled="!selectedComarca" required>
            <option value="" disabled selected>Municipi</option>
            <option v-for="municipi in municipis" :key="municipi.id" :value="municipi.id">
                {{ municipi.nom }}
            </option>
          </select>
        </div>-->
        </form>
    </div>

</template>
<script>
export default {
  data() {
        return {
            picked:[],




            foraDeCatalunya: false,
            provincies: [],
            comarques: [],
            municipis: [],
            selectedProvinciaIdentiTrucada: "",
            selectedComarcaIdentiTrucada: "",
            selectedMunicipiIdentiTrucada: "",
            selectedProvincia: "",
            selectedComarca: "",
            selectedMunicipi: "",
            carregant: true,
        };
    },
    created() {
        this.fetchProvincies();
    },
    methods: {
        toggleForaDeCatalunya() {
            this.foraDeCatalunya = !this.foraDeCatalunya;
        },
        fetchProvincies() {
            axios
                .get("/api/provincies")
                .then((response) => {
                    this.provincies = response.data;
                    this.carregant = false;
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        fetchComarques() {
            axios
                .get(`/api/provincies/${this.selectedProvincia}/comarques`)
                .then((response) => {
                    this.comarques = response.data;
                    this.selectedComarca = "";
                    this.municipis = [];
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        fetchMunicipis() {
            axios
                .get(`/api/comarques/${this.selectedComarca}/municipis`)
                .then((response) => {
                    this.municipis = response.data;
                })
                .catch((error) => {
                    console.error(error);
                });
        },
    },

}
</script>
<style>
    #primerRectangulo2{
        box-sizing: border-box;
        width: 438px;
        height: 230px;
        border: 1px solid #025D73;
        border-radius: 15px;
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
        height: 34px;
        /*left: 100px;
        top: 213px;*/
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }

    #selectComarca {
        box-sizing: border-box;
        position: absolute;
        width: 363px;
        height: 34px;
        /*left: 100px;
        top: 213px;*/
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }

    #selectMunicipio{
        box-sizing: border-box;
        position: absolute;
        width: 363px;
        height: 34px;
        /*left: 100px;*/
        top: 260px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
    #muniOpcional{
        box-sizing: border-box;
        position: absolute;
        width: 363px;
        height: 34px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px; 
    }
    #provinciaInput {
        box-sizing: border-box;
        position: absolute;
        width: 363px;
        height: 34px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px; 
    }

</style>