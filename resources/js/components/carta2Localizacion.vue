<template>
    <div>
      <form>
        <button 
          class="mt-4 ms-2"
          v-for="tab in tabs"
          :key="tab"
          :class="['tab-button', { active: currentTab === tab }]"
          @click="currentTab = tab"
        > {{ tab }}
        </button>
        <component :is="currentTab" class="tab ms-2 me-2"> </component>
      </form>
    </div>
  </template>

  <script>
    import Poblacion from './poblacio.vue'
    import PuntSingular from './puntSingular.vue'
    import Carretera from './carretera.vue'
    import Calle from './calle.vue'
    

    export default {
    components: {
        Carretera,
        Calle,
        PuntSingular,
        Poblacion,
    },
    data() {
        return {
        currentTab: 'Carretera',
        tabs: ['Carretera', 'Calle', 'Punt Singular', 'Poblacion']
        }
    }
    }
  </script>

  <style>
  .tab-button {
    padding: 6px 10px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border: 1px solid #025D73;
    cursor: pointer;
    background: #76DAE4;
    /*margin-bottom:-1px;*/
    margin-right: -1px;
  }
  .tab-button:hover {
    background: #025D73;
    margin-bottom: -1px;
    color: white;
  }
  .tab-button.active {
    background: #025D73;
    margin-bottom: -1px;
    color: white;
  }
  .tab {
    border: 1px solid #025D73;
    padding: 10px;
    background-color: rgb(253, 254, 255);
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 5px;
  }
  #segundoRectangulo2{
    box-sizing: border-box;
    position: absolute;
    width: 430px;
    height: 353px;
    left: 525px;
    top: 103px;
    border: 1px solid #025D73;
    border-radius: 15px;
  }
  </style>
<!--
  <template>
  <MDBTabs v-model="activeTabId1">
    // Tabs navs 
    <MDBTabNav pills tabsClasses="mb-3 mt-2">
      <MDBTabItem tabId="ex1-1" href="ex1-1">Carretera</MDBTabItem>
      <MDBTabItem tabId="ex1-2" href="ex1-2">Calle</MDBTabItem>
      <MDBTabItem tabId="ex1-4" href="ex1-4">Punto Singular</MDBTabItem>
      <MDBTabItem tabId="ex1-5" href="ex1-5">Población</MDBTabItem>
    </MDBTabNav>
    //Tabs navs 
    //Tabs content 
    <MDBTabContent>
      <MDBTabPane tabId="ex1-1">Content #1</MDBTabPane>
      <MDBTabPane tabId="ex1-2">Content #2</MDBTabPane>
      <MDBTabPane tabId="ex1-3">Content #3</MDBTabPane>
      <MDBTabPane tabId="ex1-4">Content #4</MDBTabPane>
      <MDBTabPane tabId="ex1-5">Content #5</MDBTabPane>
    </MDBTabContent>
    //Tabs content 
  </MDBTabs>
</template>

<script>
  import {
    MDBTabs,
    MDBTabNav,
    MDBTabContent,
    MDBTabItem,
    MDBTabPane,
  } from 'mdb-vue-ui-kit';
  import { ref } from 'vue';

  export default {
    components: {
      MDBTabs,
      MDBTabNav,
      MDBTabContent,
      MDBTabItem,
      MDBTabPane,
    },
    setup() {
      const activeTabId1 = ref('ex1-1');

      return {
        activeTabId1,
      };
    },
  };
</script>
  
  <style>
  
  </style>

-->