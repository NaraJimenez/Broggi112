<template >
    <div>
        <!--Pasamos las pestañas de los arrays y  /// class="align-items-center justify-content-center ms-4 h-100 mt-2 "-->
        <div class="tabs mt-3 justify-content-center mb-1">
            <div class="tabs_header ">
                <button
                v-for="tab in tabs" :key="tab" @click="component = tab"
                :class="{selected: tab == component}">
                    {{ tab }}
                </button>
            </div>
        </div>


        <!--Componentes: variable que se encuentra en data-->
        <keep-alive>
            <component :is = 'component'/>
        </keep-alive>

    </div>
</template>
<script>
    //Importamos los componentes hijos
    import pagina1 from "./pagina1.vue";
    import pagina2 from "./pagina2.vue";
    import pagina3 from "./pagina3.vue";


    export default {
        //Pasamos los componentes
        components: { pagina1, pagina2, pagina3 },

        data() {
            return {
                //TABS con el nombre de nuestros componentes, metidas en arrays
                tabs: ["pagina1", "pagina2", "pagina3"],
                //El primer componente en mostrar
                component: "pagina1"
            }
        },



    }
</script>
<style>
    .tabs {
       /* max-width: 1000px;*/
        margin: 0 auto;
        display: flex;
    }

    .tabs_header{
        margin-bottom: 10px;
        padding: 0;
    }

    .tabs_header > button {
        text-align: center;
        width: 170px;
        height: 70px;
        margin-right: 10px;
        background-color: gray;
        color: black;
        border-radius: 10px;
        border-color: none;

        /*Para darle feedback al user*/
        cursor: pointer;
        transition: 0.4s all ease-out;
    }

    .tabs_header > button.selected {
        background-color: #025D73;
        color: #FBFBFD;
    }
    .tabs_header > button:hover {
        background-color: #025D73;
        color: #FBFBFD;
    }
</style>
