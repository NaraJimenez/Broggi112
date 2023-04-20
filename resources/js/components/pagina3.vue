<template >
    <div>
        <div>Pagina 3</div>
        <div>
            <button class="btn btn-primary">Finalitzar Trucada</button>
            <!--@click='onClickButton'-->
        </div>
    </div>
</template>
<script>
export default {
    mounted() {
        console.log('Pagina 3 Montada')
    },
    methods: {
        /*
        onClickButton (event) {
            this.$emit('clicked', 'someValue')
        }*/
    }
}
</script>
<style>

</style>
