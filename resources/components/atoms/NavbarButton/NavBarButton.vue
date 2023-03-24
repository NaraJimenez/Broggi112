
<template>
<button>
    <image src= {{icon}} alt=''>
    <p>{{text}}</p>
</button>
</template>

<script>
import Vue from 'vue';
    export default{
        name: "NavbarButton",
        props: {
            icon: String,
            text: String
        },
        data() {
            return {
                icon: '',
                text: ''
            }
        }
    }
</script>
<style>

</style>
