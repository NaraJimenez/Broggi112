<template>
    <div id="Navbar">
        <Button text="Inicio"></Button>
        <Button text="Video"></Button>
        <Button text="BigData"></Button>
        <Button text="Admin"></Button>
        <Button text="Expedientes"></Button>
    </div>
</template>

<script>

import Button from './Button.vue'
 

export default {

       components: {
           Button
       } 

    }
</script>
<style>
    #Navbar {
        height: 100%;
        width: 300px; 
        background-color: #EBEFEF;
        overflow: auto;
        display: flex;
        flex: 1;
        flex-direction: column;
        align-items: center;
        padding-top: 60px;
    }

</style>