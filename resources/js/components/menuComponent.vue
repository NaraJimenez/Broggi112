<template >
    <div>
        <div class="tabs mt-3 justify-content-center mb-1">
            <!--Codigo de Carta Llamada-->
            <div id="codiTrucada" name="codiTrucada" class="text-center me-2 mt-1"><p class="mt-3" >{{ cartaTrucadaRealizada.codiTrucada }}</p> </div>
            <!--TABS MENU-->
            <div class="tabs_header ">
                <button
                v-for="tab in tabs" :key="tab" @click="component = tab"
                :class="{selected: tab == component}">
                    {{ tab }}
                </button>
            </div>

            <!--Tiempo de Llamada-->
            <div id="tiempoTrucada" name="tiempoTrucada" class="text-center mt-1" >{{ contadorFormatejat }} <br> {{cartaTrucadaRealizada.fechaHoraActual}}</div>

             </div>

        <keep-alive>
            <component :is = "component" @enviar-objeto="recibirObjeto" @enviar-objeto1="recibirObjeto1"
            :objeto-recibido="cartaTrucadaRealizada.objetoRecibido" :objeto-recibido1="cartaTrucadaRealizada.objetoRecibido1"
            @enviar-objeto3="recibirObjeto3" @openModalWithData="confirmFinalizarLlamada" />

        </keep-alive>

    </div>

     <!--MODAL-->
     <div class="modal" tabindex="-1" id="myModal"  ref="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Llamada Finalizada - {{ cartaTrucadaRealizada.codiTrucada }}</h5>
              <!--Hay que me ter en el header, el codigo de llamada y lo que ha durado-->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--Si NO han encontrado elementos en el filtro-->
                <div v-if="expedientesBuscados.length === 0">
                    <p>No se ha encontrado ninguna coincidencia, al "Crear" se creará una
                        carta nueva asociado a un nuevo expediente.</p>
                </div>
                <!--Si se han encontrado elementos en el filtro-->
                <div v-else>
                    <p>Estas son los Expedientes que coinciden:</p>
                    <select name="selected" id="selected" multiple v-model="cartaTrucadaRealizada.selected">
                        <option v-for="expedienteBuscado in expedientesBuscados" :value="expedienteBuscado">{{ expedienteBuscado }}</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <!--Si no se encunetran elmentos en el filtro, el boton sera desabilitado-->
              <button type="button" class="btn btn-secondary" id="actualizarBoton" data-bs-dismiss="modal" :disabled="expedientesBuscados.length === 0" @click="actualizarExpe(cartaTrucadaRealizada)">Actualizar</button>
              <button type="button" class="btn btn-primary" id="guardarBoton" @click="guardarCarta(cartaTrucadaRealizada)">Crear</button>
            </div>
          </div>
        </div>
      </div>
<p> {{ prueba }}</p>
</template>
<script>
import axios from 'axios';
    //Importamos los componentes hijos
    import Incidencia from "./pagina1.vue";
    import Localización from "./pagina2.vue";
    import Agencias from "./pagina3.vue";
    export default {

        //Pasamos los componentes
        components: { Incidencia, Localización, Agencias },
        props:{
            /*phone: {
                type: String,
                required: true,

                }*/
        },
        data() {
            return {
                //TABS con el nombre de nuestros componentes, metidas en arrays
                tabs: ["Incidencia", "Localización", "Agencias"],
                //El primer componente en mostrar
                component: "Incidencia",
                //CREAR BOLLEANO false - Cuando se pasen todos los forms a true
                pasadoForm1: false,
                pasadoForm2: false,
                pasadoForm3: false,
                todosFormsRecibidos: false,
                //Objeto en que se guardan todos los elementos de la carta - Objeto padre
                cartaTrucadaRealizada: {
                    //Aqui se guardan los elementos que se van a enviar a la B
                    objetoRecibido1: null,
                    objetoRecibido: null,
                    //objetoRecibido3: null,
                    //TIEMPO
                    fechaHoraActual: "",
                    contador: 0,
                    interval: null,
                    iniciTrucada: "",
                    duracioTrucada: 0,
                    //Codigo Llamada
                    codiTrucada: this.generarCodiTrucada(),
                    //Expediente seleccionado con el que relacionar la carta
                    selected:[],
                },

                //Modal
                myModal: {},
                //Buscador final se guarda aqui y este se ha de mostrar en el modal
                expedientesBuscados: [],
                llamada: ""

            }
        },
        mounted() {
            this.setFechaHoraActual();
            this.iniciarContador();
            //this.mostrarTelefono();
            //console.log(this.phone);
        },
        /*created(){
            console.log(this.phone);
        },*/
        beforeDestroy() {
            clearInterval(this.interval);
        },
        computed: {
            contadorFormatejat() {
                const minutos = Math.floor(this.cartaTrucadaRealizada.contador / 60);
                const segundos = this.cartaTrucadaRealizada.contador % 60;
                return `${minutos.toString().padStart(2, '0')}:${segundos.toString().padStart(2, '0')}`;
            },
        },
        methods: {
            /*mostrarTelefono() {
                console.log("El teléfono es:", this.phone);
            },*/
            //Tiempo
            setFechaHoraActual() {
                this.cartaTrucadaRealizada.fechaHoraActual = new Date().toLocaleString('es-ES');
            },
            iniciarContador() {
                this.cartaTrucadaRealizada.interval = setInterval(() => {
                    this.cartaTrucadaRealizada.contador++;
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
            //SE RECIBEN LOS OBJETOS
            //FORM 1
            recibirObjeto1(myForm1) {
                //debugger;
                console.log('Ha llegado al padre FORM 1');
                this.pasadoForm1 = true;
                console.log(this.pasadoForm1);
                //Se guarda dentro del objeto padre
                this.cartaTrucadaRealizada.objetoRecibido1 = myForm1;
            },
            //FORM 2
            recibirObjeto(myForm) {
                //this.objetoRecibido = myForm;
                console.log('Ha llegado al padre FORM 2');
                this.pasadoForm2 = true;
                console.log(this.pasadoForm2)
                //Se guarda dentro del objeto padre
                this.cartaTrucadaRealizada.objetoRecibido = myForm;
            },
            //FORM 3
            /*recibirObjeto3(myForm3) {
                //this.objetoRecibido3 = myForm3;
                console.log('Ha llegado al padre FORM 3');
                this.pasadoForm3 = true;
                console.log(this.pasadoForm3);
                //Se guarda dentro del objeto padre
                this.cartaTrucadaRealizada.objetoRecibido3 = myForm3;
                //CUANDO SE RELLENAN TODOS LOS FORMS SE ACTIVA EL BOTON DE ENVIAR EN LA PAGINA 3
            },*/
            //FINALIZAR LLAMADA
            confirmFinalizarLlamada(){
                this.expedientesBuscados = this.cartaTrucadaRealizada.objetoRecibido.searchResults;
                this.myModal = new bootstrap.Modal('#myModal', this.expedientesBuscados);
                this.myModal.show();
            },
            //Guardar a la Base de Datos la Carta
            guardarCarta(cartaTrucadaRealizada){
                this.cartaTrucadaRealizada = cartaTrucadaRealizada;
                this.cartaTrucadaRealizada.duracioTrucada = this.convertirTiempoASegundos(this.contadorFormatejat);
                this.cartaTrucadaRealizada.iniciTrucada = new Date().toISOString();
                console.log('Datos del objeto:', this.cartaTrucadaRealizada);
                axios
                    .post('/Broggi112/public/api/cartestrucades', this.cartaTrucadaRealizada)
                    .then((response) => {
                        console.log(response.data.message);
                        //this.$refs.myModal.hide();
                        this.myModal.hide();
                        window.location.href = '/NavBar/home';
                    })
                    .catch((error) => {
                        if (error.response) {
                            console.error('Error al guardar los datos:', error.response.data.message, 'Código de error:', error.response.data.code);
                        } else {
                            console.error('Error al guardar los datos:', error.message);
                        }
                    });
            },
            //Actualizar Carta de Llamada y guardar la nueva Carta de Llamada
            actualizarExpe(cartaTrucadaRealizada){
                this.cartaTrucadaRealizada.duracioTrucada = this.convertirTiempoASegundos(this.contadorFormatejat);
                this.cartaTrucadaRealizada.iniciTrucada = new Date().toISOString();
                console.log('Datos del objeto:', this.cartaTrucadaRealizada);

                axios
                    .post("/Broggi112/public/api/cartestrucades", this.cartaTrucadaRealizada)
                    .then((response) => {
                        console.log(response.data.message);
                        this.myModal.hide();
                        //this.$refs.myModal.hide();
                        window.location.href = '/NavBar/home';
                    })
                    .catch((error) => {
                        if (error.response) {
                            console.error('Error al guardar los datos:', error.response.data.message, 'Código de error:', error.response.data.code);
                        } else {
                            console.error('Error al guardar los datos:', error.message);
                        }
                    });
            }
        },
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
    .modal-header{
        background-color: #76DAE4;
    }
    .modal-body, .modal-footer {
        background-color: #EBEFEF;
    }
    #actualizarBoton{
        background: #FFFFFF;
        border: 2px solid #E33386;
        border-radius: 20px;
        color:#E33386 ;
    }
    #guardarBoton{
        background-color:#E33386 ;
        border: 2px solid #E33386;
        border-radius: 20px;
    }
    #selected {
        border: 3px solid #76DAE4;
        border-radius: 10px;
    }
    #actualizarBoton:disabled {
        background: #e5e5e5;
        box-shadow: none;
        color: #E33386;
    }

</style>
