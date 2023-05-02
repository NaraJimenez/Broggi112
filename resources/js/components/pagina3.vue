<template>
  <div id="mapas">
    <div  class="map-container" id="map">
      <!-- <Mapbox></Mapbox> -->
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import mapboxgl from 'mapbox-gl';
import MapboxSdk from '@mapbox/mapbox-sdk/services/geocoding';


export default {
  name: 'Mapa',
  data() {
    return {
      map: null,
      calle: 'Passeig de Gràcia, Barcelona',
      agencias: [],
    };
  },
 mounted() {
  mapboxgl.accessToken = 'pk.eyJ1IjoibGFpYWFiYXJxdWVyb28wIiwiYSI6ImNsZ3dqN2JjZTAwb2IzZW56amh2eHR1ajIifQ.SoI7H86nB1eVLqW6f52ntg';
    const mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
    mapboxClient.geocoding
      .forwardGeocode({
        query: this.calle,
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
          zoom: 12
        });
        new mapboxgl.Marker({className: "marker" }).setLngLat(feature.center).addTo(map);

        axios.get('http://localhost:8080/proyecto2/Broggi112/public/mapbox-json')
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
                  .addTo(map);
              });
          });
        }
      })
          .catch(error => {
            console.error('Error al obtener las agencias:', error);
          });
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