<template>
    <div id="Navbar"  v-if="showNavbar">
        <CrossButton  imgSrc="./img/Cross.png"  @click="openNavbar()"></CrossButton>
        <Button text="Inicio"></Button>
        <Button text="Video"></Button>
        <Button text="BigData"></Button>
        <Button text="Admin"></Button>
        <Button  text="Expedientes"></Button>
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
    }
</style>