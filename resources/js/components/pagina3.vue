<template>
    <div id="mapas">
        <div  class="map-container" id="map">
            <!-- <Mapbox></Mapbox> -->

        </div>

    </div><button id="botonFinal"  @click="openModalWithData" style="margin-top:40px; display: block; margin: 0 auto; ">Finalizar Llamada</button>
</template>

<script>
import axios from 'axios';
// import Mapbox from "../components/atoms/Mapbox/Mapbox.vue";
export default {

    props: {
        objetoRecibido: Object
    },
    name: 'Mapa',
    data() {
        return {
            map: null,
            calle: 'Passeig de Gràcia, Barcelona',
            agencias: [],
        };
    },
    methods:{
        openModalWithData() {
            this.$emit('openModalWithData');
        },
    },
    mounted() {
    mapboxgl.accessToken = 'pk.eyJ1IjoibGFpYWFiYXJxdWVyb28wIiwiYSI6ImNsZ3dqN2JjZTAwb2IzZW56amh2eHR1ajIifQ.SoI7H86nB1eVLqW6f52ntg';
    const mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
    mapboxClient.geocoding
        .forwardGeocode({
            query: this.objetoRecibido.selectedMunicipi.toString(),
            autocomplete: false,
            limit: 1
        })
        .send()
        .then((response) => {
            if (
                !response ||
                !response.body ||
                !response.body.features ||
                !response.body.features.length
            ) {
                console.error('Invalid response:');
                console.error(response);
                return;
            }
            const feature = response.body.features[0];
            const map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v12',
                center: feature.center,
                zoom: 10
        });
            new mapboxgl.Marker().setLngLat(feature.center).addTo(map);
        });

        axios.get('http://localhost:8080/proyecto2/Broggi112/public/mapbox')
        .then(response => {
            console.log(response);
            const agencias = response.data;
            if (agencias) {
        agencias.forEach(agencia => {
            const el = document.createElement('div');
            el.className = 'marker';

            // create the marker
            const marker = new mapboxgl.Marker(el)
                .setLngLat(feature.center)
                .addTo(map);
            // create the popup
            const popup = new mapboxgl.Popup({ offset: 25 })
            .setHTML(`<h3>${agencia.nom}</h3>`);
            // assign the popup to the marker
            marker.setPopup(popup);
            });
        }
            self.agencias = agencias;
        })
        .catch(error => {
        console.error('Error al obtener las agencias:', error);
        });
    }
};
</script>

<style>
    .map-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 300px;
        width: 900px;
    }
    .marker {
        background-image: url('https://i.imgur.com/MK4NUzI.png');
        background-size: cover;
        width: 50px;
        height: 50px;
        cursor: pointer;
    }
    #botonFinal{
        background: #E33386;
        box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
        color: white;
    }
    #botonFinal:disabled {
        background: #e5e5e5;
        box-shadow: none;
        color: #E33386;
    }
</style>
