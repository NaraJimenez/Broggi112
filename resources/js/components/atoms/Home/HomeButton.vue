<template>
    <button>
        <!-- <image v-bind: {{ icon }} alt=''> -->
        {{text}}
    </button>
</template>

<script>

export default {
        props: {
            text,
            // icon
        }
    }
</script>
<style>

</style>