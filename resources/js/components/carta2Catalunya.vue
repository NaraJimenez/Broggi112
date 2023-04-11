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
          <select  class="form-select form-select-sm text-center" aria-label=".form-select-lg example">
            <option selected>Provincia</option>
            <option value="1">One</option>
          </select>
          <!--SI ES EN CATALUNYA APARECEN ESTOS SINO SE QUEDAN DESABILITADO-->
          <select class="form-select form-select-sm text-center" aria-label=".form-select-lg example">
            <option selected>Comarca</option>
            <option value="1">One</option>
          </select>
          <select  class="form-select form-select-sm text-center" aria-label=".form-select-lg example">
            <option selected>Municipio</option>
            <option value="1">One</option>
          </select>
        </div>
    </div>

</template>
<script>
export default {
    
}
</script>
<style>
    
</style>