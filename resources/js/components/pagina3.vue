<template>
  <div>
    <div  class="map-container" id="map"></div>
  </div>
</template>

<script>


export default {
  name: 'Mapa',
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
            query: 'Plaça Urquinaona, Barcelona',
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

            // Create a marker and add it to the map.
            new mapboxgl.Marker().setLngLat(feature.center).addTo(this.map);
        });
  }
};
</script>

<style>
.map-container {
  height: 400px;
  width: 100%;
}
</style>