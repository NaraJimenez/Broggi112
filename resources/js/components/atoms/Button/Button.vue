<template>
<div id="NavbarButton">
  <button>
        <img :src="icon" alt="">
        {{text}}
    </button>
</div>
</template>

<script>

export default {
        props: {
            text: String
        }
    }
</script>
<style>
    button {
        height: 100%;
        width: 100%;
        border-radius: 10px;
        cursor: pointer;
        background-color: #35B5C9;
        border: 2px solid #808080;
        color: white;
        /* box-shadow: 0px 4px 4px #0c0a0a; */
    }
    #NavbarButton {
        display: flex;
        box-sizing: border-box;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        overflow: auto;
        height: 57px; 
        width: 200px;
        margin-bottom: 50px;

    }
</style>