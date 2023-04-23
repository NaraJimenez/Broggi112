<template >
    <div>
        <div>Pagina 3</div>
        <div>
            <button class="btn btn-primary" :disabled="!formValid" @click="submitForm">Finalitzar Llamada</button>
            <!--@click='onClickButton'-->
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            //si el form esta validado se podrá clicar al boton de finalizar
            formValid: false,
            formData3: {
                inputNombre: '',
            },
        }
    },
    mounted() {
        console.log('Pagina 3 Montada');
        this.validateForm3();
    },
    methods: {
        validateForm3() {
            //La doble negación !! convierte el resultado en un valor booleano --METER CAMPOS OBLIGATORIOS
            this.formValid = !!this.formData3.inputNombre;
            console.log(this.formValid);
            if (this.formValid == true) {
                //se envia al componente padre, pasamos el objeto lleno
                    this.$emit('enviar-objeto3', this.formData3);
                    //Enviamos al finalizar al padre para abrir el modal
                    submitForm(
                        this.$emit('finalizarLlamada');
                   )
                //console.log(this.formData);
            }
        },

    }
}
</script>
<style>

</style>
