<template>
    <div id="Navbar"  v-if="showNavbar">
         <CrossButton imgSrc="../../../../../public/img/Cross.png"  @click="openNavbar()"></CrossButton>
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
    }
        }

    }
</script>
<style>
#Navbar {
  height: 100%;
  width: 300px; 
  background-color: #EBEFEF;
  position: absolute;
  overflow: auto;
  display: flex;
  flex: 1;
  flex-direction: column;
  align-items: center;
  padding-top: 60px;
  top: 0;
  left: 0;
}
</style>