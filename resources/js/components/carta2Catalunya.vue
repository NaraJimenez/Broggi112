<template>
    <div id="contenidoPrimerRectangulo2" class="mt-2">
          <div id="catalunya" class="mt-3 ms-4 text-center"> Cataluña?</div>
          <div>
            <label id="checkboxCat" >
              <input type="checkbox" id="checkCarta2" />
              <span>Si</span>
              <input type="checkbox" id="checkCarta2" />
              <span>No</span>
          </label>
          </div>
          <div>
          <!--Provincia-->
          <select class="form-select" v-model="selectedProvinciaIdentiTrucada" @change="fetchComarques" required>
            <option v-if="carregant" value="" disabled selected>Carregant...</option>
            <option v-else value="" disabled selected>Provincia</option>
            <option v-for="provincia in provincies" :key="provincia.id" :value="provincia.id">
                {{ provincia.nom }}
            </option>
        </select>
          <!--SI ES EN CATALUNYA APARECEN ESTOS SINO SE QUEDAN DESABILITADO-->
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
        </div>
    </div>

</template>
<script>
export default {
  data() {
        return {
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
    
</style>