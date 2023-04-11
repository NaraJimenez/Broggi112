<template>
    <div class='wrapper'>
      <tabs :mode="mode">
        <!--Carretera-->
        <tab title="Carretera">
            <label for="nombreCarretera">Nombre Carretera</label>
            <input class="" type="text" name="nombreCarretera" placeholder="Nombre de Carretera">
            <br>
            <label for="puntoKm">Punto Km</label>
            <input class="" type="text" name="puntoKm" placeholder="Punto Kilometro"><br>
            <label for="nomSentido">Sentido</label>
            <input class="" type="text" name="nomSentido" placeholder="Sentido"><br>
        </tab>
        <!--Calle-->
        <tab title="Calle">
            <label for="tipoVia">Tipo vía</label>
            <input class="" type="text" name="tipoVia" placeholder="Tipo de Vía"><br>
            <label for="nombreCalle">Nombre Calle</label>
            <input class="" type="text" name="nombreCalle" placeholder="Nombre de la Calle"><br>
            <label for="numCasa">Número</label>
            <input class="" type="text" name="numCasa" placeholder="Número de la vivienda"><br>
            <label for="numEscalera">Escalera</label>
            <input class="" type="text" name="numEscalera" placeholder="Número de Escalera"><br>
            <label for="numPiso">Piso</label>
            <input class="" type="text" name="numPiso" placeholder="Número del Piso"><br>
            <label for="numPuerta">Puerta</label>
            <input class="" type="text" name="numPuerta" placeholder="Número de la Puerta"><br>
        </tab>
        <!--Punto Singular-->
        <tab title="Punto Singular">
            <label for="nombrePSingular">Nombre Punto Singular</label>
            <input class="" type="text" name="nombrePSingular" placeholder="Nombre del Punto Singular">

        </tab>
        <!--Población-->
        <tab title="Población">
            <label for="nombrePoblacion">Nombre Población</label>
            <input class="" type="text" name="nombrePoblacion" placeholder="Nombre de la Población">
        </tab>
      </tabs>
    </div>
  </template>

  <script>
  import Tab from './Tab.vue'
  import Tabs from './Tabs.vue'

  export default {
    components: {
      Tab,
      Tabs
    },
    data () {
      return {
        mode: 'dark'
      }
    },
    methods: {
      changeStyle () {
        if (this.mode === 'dark') {
          this.mode = 'light'
        } else {
          this.mode = 'dark'
        }
      }
    }
  }
  </script>

  <style lang="css">
    * {
      margin: 0;
      padding: 0;
      font-family: 'Karla', sans-serif;
    }
    .wrapper {
      width: 100%;
      min-height: 100vh;
      background-color: #f8f8f8;
      margin: 0;
      padding: 20px;
    }

    .change__style {
      background-color: #eee;
      font-size: 1em;
      margin-bottom: 10px;
      padding: 5px;
    }
  </style>
