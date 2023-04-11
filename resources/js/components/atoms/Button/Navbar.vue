<template>
    <div id="Navbar"  v-if="showNavbar">
        <CrossButton  imgSrc="img/Cross.png"  @click="openNavbar()"></CrossButton>
        <Button text="Inicio" @click="goToPage('https://www.miweb.com/inicio')" img="./img/icon_home.png"></Button>
        <Button text="Video" @click="goToPage('https://www.miweb.com/inicio')"></Button>
        <Button text="BigData" @click="goToPage('https://www.miweb.com/inicio')"></Button>
        <Button text="Admin" @click="goToPage('https://www.miweb.com/inicio')"></Button>
        <Button  text="Expedientes" @click="goToPage('https://www.miweb.com/inicio')"></Button>
    </div>
</template>

<script>

import Button from './Button.vue'
import CrossButton from './Cross.vue'


export default {

       components: {
           Button,
           CrossButton
       },
        data () {
            return {    
                showNavbar: true,

            };
        },
        methods:{
            
    openNavbar () {
        this.showNavbar = false;
        this.$emit('navbar-opened', false);
    },
    goToPage(url) {
      window.location.href = url; // Redirigir a la nueva página
    },
        },

    };
</script>
<style>
    #Navbar {
        height: 100vh;
        width: 300px; 
        display: flex;
        flex: 1 !important;
        justify-content: center;
        background-color: #EBEFEF;
        position: absolute;
        top: 0;
        left: 0;
        flex-direction: column;
        align-items: center;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>