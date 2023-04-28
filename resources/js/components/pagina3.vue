<template>
  <div id="mapas">
    <div  class="map-container" id="map">
      <!-- <Mapbox></Mapbox> -->
    </div>
  </div>
</template>

<script>
import axios from 'axios';
// import Mapbox from "../components/atoms/Mapbox/Mapbox.vue";
export default {
  // Paso los atributos de las agencias

  // components: Mapbox,
  name: 'Mapa',
   props: {
    agencias: {
      type: Array,
      required: true
    },
  data() {
    return {
      map: null
    };
  },
  mounted() {
    mapboxgl.accessToken = 'pk.eyJ1IjoibGFpYWFiYXJxdWVyb28wIiwiYSI6ImNsZ3dqN2JjZTAwb2IzZW56amh2eHR1ajIifQ.SoI7H86nB1eVLqW6f52ntg';
    const mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
    mapboxClient.geocoding
        .forwardGeocode({
          // Deja en query el que tienes tú
            query: 'objetoRecibido.selectMunicipi', 
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
                // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
                style: 'mapbox://styles/mapbox/streets-v12',
                center: feature.center,
                zoom: 10
            });

              this.agencias.forEach((agencia) => {
              // Aquí creo el marker para cada agencia
              mapboxClient.geocoding
                .forwardGeocode({
                    query: agencia.carrer + ' ' + agencia.codi_postal + ' ' + agencia.nom,
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

                    new mapboxgl.Marker()
                      .setLngLat(feature.center)
                      .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
                        .setHTML('<h3>' + agencia.nom + '</h3><p>' + agencia.carrer + ' ' + agencia.codi_postal + '</p>'))
                      .addTo(this.map);
                });
            });
        });
  }
}
</script>


<style>
.map-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 300px;
  width: 900px;
}
</style>