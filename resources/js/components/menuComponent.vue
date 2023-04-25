<template >
    <div>
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
            <component :is = "component" @enviar-objeto="recibirObjeto" @enviar-objeto1="recibirObjeto1"
            @enviar-objeto3="recibirObjeto3" 
            :resultados="searchResults" @finalizarLlamada="confirmFinalizarLlamada()" />
            
        </keep-alive><!--Al finalizar la llamada se ha de pasarle la carta realizada, ademas de la lista de expedientes filtrados-->

    </div>

    <!--MODAL-->
    <div class="modal" tabindex="-1" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Llamada Finalizada</h5>
              <!--<p>{{ cartaTrucadaRealizada. codiTrucada }}</p>
              <p>{{ cartaTrucadaRealizada.duracioTrucada }}</p>-->
              <!--Hay que me ter en el header, el codigo de llamada y lo que ha durado-->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--Si se han encontrado elementos en el filtro-->
                <div>
                    <p>Estas son las Carta Guardadas que coinciden:</p>
                    <!--<select v-model="selected" multiple></select>-->
                </div>
                <!--Si NO han encontrado elementos en el filtro-->
                <div>
                    <p>No se ha encontrado ninguna incidencia, al "Crear" se creará una carta guardad nueva.</p>
                </div>
            </div>
            <div class="modal-footer">
                <!--Si no se encunetran elmentos en el filtro, el boton sera deseable-->
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" @click="actualizarCarta()">Actualizar</button>
              <button type="button" class="btn btn-primary" @click="guardarCarta(cartaTrucadaRealizada)">Crear</button>
            </div>
          </div>
        </div>
      </div>

</template>
<script>
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
                    objetoRecibido3: null,

                    //FALTA METER EL TIEMPO Y EL CODIGO AQUI

                },

                //TIEMPO
                fechaHoraActual: "",
                contador: 0,
                interval: null,
                iniciTrucada: "",
                duracioTrucada: 0,

                //Codigo Llamada
                codiTrucada: this.generarCodiTrucada(),

                //Modal
                myModal: {},
                //Buscador
                searchResults: [],
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
            //el componente hijo y actualizando el estado del componente padre con los resultados
            handleSearchResultsUpdated(results) {
                console.log('hola');
                this.searchResults = results;
            },
            //Nuevos resultados enviados por el form 2
            nuevoResultado(resultados) {
            // Manejar el evento emitido por el componente hijo
            this.resultados = resultados
            },
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
            //Recibir Objeto -- FALTA PONER this.cartaTrucadaRealizada.
            recibirObjeto(myForm) {
                this.objetoRecibido = myForm;
                console.log('Ha llegado al padre FORM 2');
                this.pasadoForm2 = true;
                console.log(this.pasadoForm2)
                this.cartaTrucadaRealizada.objetoRecibido = objetoRecibido;
                //Se guarda dentro del objeto padre
            },
            recibirObjeto1(myForm1) {
                debugger;
                console.log('Ha llegado al padre FORM 1');
                this.pasadoForm1 = true;
                console.log(this.pasadoForm1);
                //Se guarda dentro del objeto padre
                this.cartaTrucadaRealizada.objetoRecibido1 = myForm1;
            },
            recibirObjeto3(myForm3) {
                this.objetoRecibido3 = myForm3;
                console.log('Ha llegado al padre FORM 3');
                this.pasadoForm3 = true;
                console.log(this.pasadoForm3);
                //Se guarda dentro del objeto padre
                this.cartaTrucadaRealizada.objetoRecibido3 = objetoRecibido3;
            },
            //FINALIZAR LLAMADA
            confirmFinalizarLlamada(){
                this.myModal = new bootstrap.Modal('#myModal', options);
                this.myModal.show();
            },
            //Guardar a la Base de Datos la Carta
            guardarCarta(cartaTrucadaRealizada){
                this.cartaTrucadaRealizada = cartaTrucadaRealizada;
                this.cartaTrucadaRealizada.duracioTrucada = this.convertirTiempoASegundos(this.contadorFormatejat);
                this.cartaTrucadaRealizada.iniciTrucada = new Date().toISOString();
                console.log('Datos del objeto:', this.cartaTrucadaRealizada);
                axios
                    .post("/api/cartestrucades", this.cartaTrucadaRealizada)
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
            //Actualizar Carta de Llamada y guardar la nueva Carta de Llamada
            actualizarCarta(){
                //Con el id del expediente se crea una carta asociado a este

                this.cartaTrucadaRealizada.duracioTrucada = this.convertirTiempoASegundos(this.contadorFormatejat);
                this.cartaTrucadaRealizada.iniciTrucada = new Date().toISOString();
                console.log('Datos del objeto:', this.cartaTrucadaRealizada);
                //HAY QUE PASARLE EL NUMERO DE ID DEL EXPE
                axios
                    .post("/api/cartestrucades", this.cartaTrucadaRealizada)
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
            }

        }

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