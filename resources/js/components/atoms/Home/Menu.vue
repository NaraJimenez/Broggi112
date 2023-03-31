<template>

    <div id="Menu"  >
    <button  v-if="showButton" id="Menu-button" class="menu">
        <p  @click="openMenu()">Prueba</p>
        <img  :src="'../../../../../public/img/Menu.png'"/>
    </button>
        <cross-button v-if="showCrossButton"></cross-button>
         <navbar v-if="showNavbar"></navbar>
        <navbar-child v-if="showNavbar"></navbar-child>
    </div>
</template>

<script>

import Navbar from '../Button/Navbar.vue';

export default {
        components: {
            Navbar, 
        },
         props: {
            img: String,
        },
        data () {
            return {    
                showNavbar: false,
                showButton: true,
                showCrossButton: false,
            };
        },
    methods:{
            
    openMenu () {
        this.showNavbar = true;
        this.showButton = false;
        this.showCrossButton = true;
      

    },
    recharge () {

        debugger;
        if (this.showNavbar === false) {
            this.showButton = true;
        }
    }
    }
      
    }
</script>
<style>
</style>
