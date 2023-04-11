<template>
    <div id="MenuN">        
        <div id="Menu-button">
            <img  @click="openMenu()" src="./img/Menu.png"/>
        </div>
        <navbar v-if="showNavbar" @navbar-opened="showNavbar = $event"></navbar>
    </div>
</template>

<script>

import Navbar from '../Button/Navbar.vue';

export default {
        components: {
            Navbar, 
        },
        data () {
            return {    
                showNavbar: false
            };
        },
    methods:{
            
    openMenu () {
        this.showNavbar = true;
    },
    }, 
    };
</script>
<style>
#MenuN {
   display: contents !important;
}
</style>
