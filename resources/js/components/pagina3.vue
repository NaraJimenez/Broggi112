<template>
    <div id="mapas">
        <div  class="map-container" id="map">
            <!-- <Mapbox></Mapbox> -->

        </div>

    </div><button id="botonFinal"  @click="openModalWithData" style="margin-top:40px; display: block; margin: 0 auto; ">Finalizar Llamada</button>
</template>

<script>
import axios from 'axios';



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
    console.log("Puta localizacion");
    console.log(this.objetoRecibido.selectedProvincia.toString() + ', ' +  this.objetoRecibido.selectedComarca.toString() + ', ' + this.objetoRecibido.selectedMunicipi.toString());
    mapboxClient.geocoding
        .forwardGeocode({
            query: this.objetoRecibido.selectedProvincia.toString() + ', ' +  this.objetoRecibido.selectedComarca.toString() + ', ' + this.objetoRecibido.selectedMunicipi.toString() ,
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
            this.map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v12',
                center: feature.center,
                zoom: 10
            });
            new mapboxgl.Marker().setLngLat(feature.center).addTo(this.map);
        });
        //  new mapboxgl.Marker({className: "marker" }).setLngLat(feature.center).addTo(map);

        axios.get('http://localhost:8080/Broggi112/public/mapbox-json')
          .then(response => {
            const agencias = response.data;
            if (agencias) {
              agencias.forEach(agencia => {
            
            mapboxClient.geocoding.forwardGeocode({
                query: agencia.codi_postal  + '' + agencia.carrer,
                autocomplete: false,
                limit: 1
              })
              .send()
              .then((response) => {
            
                const feature = response.body.features[0];
                
                // create the popup
                const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(`<h4>${agencia.nom}</h4>`);
                // create the marker
                const marker = new mapboxgl.Marker({className: "marker-agencia" })
                  .setLngLat(feature.center)
                  .setPopup(popup)
                  .addTo(this.map);
              });
          });
        }
      })
          .catch(error => {
            console.error('Error al obtener las agencias:', error);
          });
      
  },
};
</script>


<style>
.map-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 300px;
  width: 900px;
  background-color: orange;
}
.marker {
  width: 30px;
  height: 30px;
  cursor: pointer;
  border: 2px solid black;
  border-radius: 50%;
}
.mapboxgl-marker-agencia {
  width: 30px;
  height: 30px;
  cursor: pointer;
  border: 2px solid black;
  border-radius: 50%;
  background-color: plum;
}
</style>
