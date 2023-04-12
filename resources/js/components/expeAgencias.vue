<template>
    <div class="form-group">
        <select id="agenciasExp" class="form-select form-select-sm" aria-label=".form-select-lg example" v-model="TipoSeleccionado">
            <option v-for="agencia in agencias" :value="agenciasExp">{{agencias.nombre}}</option>
          </select>

          <select id="estadoAgenciasExp" class="form-select form-select-sm"  aria-label=".form-select-sm example">
            <option v-for="estado in estados" :value="estadoAgenciasExp">{{estat_agencies.estat}}</option>
          </select>
    </div>
</template>
<script>
export default {
    data(){
        return {
            //Guardo en un array las egencias y su estado
            
        }
    },
    created(){
       
        //Llamamos a la api/BBDD
        axios
            .get('')
            //si todo va bien
            .then(response => {
                
            })
    },
}
</script>
<style>
    
</style>