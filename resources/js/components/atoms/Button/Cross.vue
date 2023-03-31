<template>
<div id="CrossButton">
<div class="Cross">
        <img :src="imgSrc" alt="Cross Buttton" />
    </div>
</div>
</template>

<script>

export default {
        props: {
            imgSrc: String,
             
        }
    }
</script>
<style>
    #CrossButton {
        display: flex;
        justify-content: flex-end;
        align-content: center;
        flex-direction: row;
        height: 100px;
        width: 100px;
        cursor: pointer;
    }
    .cross{
        display: flex;
        flex: 1;
        justify-content: flex-end;
    }
     .hidden{
        display: none;
    }
</style>