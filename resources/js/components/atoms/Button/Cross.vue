<template>
<div class="CrossButton">
<div class="Cross">
        <img class="imgCross" :src="imgSrc" alt="Cross Buttton" />
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
<style scoped>
    .CrossButton {
        display: flex;
        top:0;
        right: 0;
        margin-right: 10px;
        margin-top: 10px;
        position: absolute;
        justify-content: flex-end;
        align-content: center;
        flex-direction: row;
        cursor: pointer;
    }
    .cross{
        display: flex;
        flex: 1;
        justify-content: flex-end;
    }

    .imgCross{
        width: 32px;
        height: 22px;
    }

     .hidden{
        display: none;
    }
</style>