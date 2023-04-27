<template>
    <div id="Navbar"  v-if="showNavbarM">
        <CrossButton  imgSrc="img/Cross.png"  @click="closeNavbar()"></CrossButton>
        <Button text="Inicio" @click="goToPage('http://localhost:8080/proyecto2/Broggi112/public/home')" :icon="'./img/icon_home.png'"></Button>
        <Button text="Video" @click="goToPage('https://www.miweb.com/inicio')" :icon="'./img/icon_video.png'"></Button>
        <Button text="BigData" @click="goToPage('http://localhost:8080/proyecto2/Broggi112/public/graficos')" :icon="'./img/icon _bar .png'"></Button>
        <Button  text="Expedientes" @click="goToPage('http://localhost:8080/proyecto2/Broggi112/public/expedientes')" :icon="'./img/icon _file.png'"></Button>
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
                showNavbarM: true,

            };
        },
        methods:{
            
    closeNavbar () {
        this.showNavbarM = false;
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
    position: fixed;
    top: 0;
    left: 0; 
    flex-direction: column;
    align-items: center;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
</style>