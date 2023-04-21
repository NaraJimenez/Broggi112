<template >
    <div>
        <!--Pasamos las pestañas de los arrays y  /// class="align-items-center justify-content-center ms-4 h-100 mt-2 "-->
       
        <div class="tabs mt-3 justify-content-center mb-1"> 
            <!--Codigo de Carta Llamada-->
            <div id="codiTrucada" name="codiTrucada" class="text-center me-2 mt-1"><p class="mt-3">{{ codiTrucada }}</p> </div>
            <!--TABS MENU-->
            <div class="tabs_header ">
                <button
                v-for="tab in tabs" :key="tab" @click="component = tab"
                :class="{selected: tab == component}">
                    {{ tab }}
                </button>
            </div>
            <!--Tiempo de Llamada-->
            <div id="tiempoTrucada" name="tiempoTrucada" class="text-center mt-1" >{{ contadorFormatejat }} <br> {{fechaHoraActual}}</div>
        </div>


        <!--Componentes: variable que se encuentra en data--><!-- @clicked="onClickChild"-->
        <keep-alive>
            <component :is = "component" @enviar-objeto="recibirObjeto" />
        </keep-alive>



    </div>
</template>
<script >
    //Importamos los componentes hijos
    import pagina1 from "./pagina1.vue";
    import pagina2 from "./pagina2.vue";
    import pagina3 from "./pagina3.vue";


    export default {
        //Pasamos los componentes
        components: { pagina1, pagina2, pagina3 },

        //props: {}, para pasar datos al filtro
        //telèfon, si es de cat o no, tipus de incident.

        data() {
            return {
                //TABS con el nombre de nuestros componentes, metidas en arrays
                tabs: ["pagina1", "pagina2", "pagina3"],
                //El primer componente en mostrar
                component: "pagina1",
                //Aqui se guardan los elementos que se van a enviar a la B
                objetoRecibido: null,
                //CREAR BOLLEANO false - Cuando se pasen todos los forms a true
                pasadoForm2: false,
                
                //TIEMPO
                fechaHoraActual: "",
                contador: 0,
                interval: null,
                iniciTrucada: "",
                duracioTrucada: 0,

                //Codigo Llamada
                codiTrucada: this.generarCodiTrucada(),
            }
        },
        mounted() {
            this.setFechaHoraActual();
            this.iniciarContador();
            
        },
        beforeDestroy() {
            clearInterval(this.interval);
        },
        computed: {
            contadorFormatejat() {
                const minutos = Math.floor(this.contador / 60);
                const segundos = this.contador % 60;
                return `${minutos.toString().padStart(2, '0')}:${segundos.toString().padStart(2, '0')}`;
            },
        },
        methods: {
            //Tiempo
            setFechaHoraActual() {
                this.fechaHoraActual = new Date().toLocaleString('es-ES');
            },
            iniciarContador() {
                this.interval = setInterval(() => {
                    this.contador++;
                }, 1000);
            },
            convertirTiempoASegundos(tiempoFormateado) {
                const [minutos, segundos] = tiempoFormateado.split(':');
                return parseInt(minutos) * 60 + parseInt(segundos);
            },
            //Codigo Llamada
            generarCodiTrucada() {
                const timestamp = new Date().getTime();
                return `TRUC-${timestamp}`;
            },
            //Recibir Objeto
            recibirObjeto(myForm) {
                this.objetoRecibido = myForm;
                console.log('Ha llegado al padre');
                this.pasadoForm2 = true;
                console.log(this.pasadoForm2)
            },

        }

        /*methods: {
            onClickChild (value) {
                console.log(value) // someValue
            },
            enviarDatos() {
                this.trucada.duracioTrucada = this.convertirTiempoASegundos(this.contadorFormatejat);
                this.trucada.iniciTrucada = new Date().toISOString();
                console.log('Datos del objeto:', this.trucada);
                axios
                    .post("/api/cartestrucades", this.trucada)
                    .then((response) => {
                        console.log(response.data.message);
                        location.reload();
                    })
                    .catch((error) => {
                        if (error.response) {
                            console.error('Error al guardar los datos:', error.response.data.message, 'Código de error:', error.response.data.code);
                        } else {
                            console.error('Error al guardar los datos:', error.message);
                        }
                    });
            },
        }*/



    }
</script>
<style>
    .tabs {
        /* max-width: 1000px;*/
        margin: 0 auto;
        display: flex;
    }

    .tabs_header{
        margin-bottom: 10px;
        padding: 0;
    }

    .tabs_header > button {
        text-align: center;
        width: 170px;
        height: 70px;
        margin-right: 10px;
        background-color: gray;
        color: black;
        border-radius: 10px;
        border-color: none;

        /*Para darle feedback al user*/
        cursor: pointer;
        transition: 0.4s all ease-out;
    }

    .tabs_header > button.selected {
        background-color: #025D73;
        color: #FBFBFD;
    }
    .tabs_header > button:hover {
        background-color: #025D73;
        color: #FBFBFD;
    }
    #codiTrucada, #tiempoTrucada {
        box-sizing: border-box;
        width: 180px;
        height: 57px;
        background: #FFFFFF;
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
</style>
