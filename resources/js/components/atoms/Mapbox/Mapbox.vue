<template>
</template>
<script>
    
    export default ({
       mount(){
           	mapboxgl.accessToken = 'pk.eyJ1IjoibGFpYWFiYXJxdWVyb28wIiwiYSI6ImNsZ2V3bHFqdzAwbXozdHMybTA1N3NxOGUifQ.yLYbZki49gryaZyQ9cgftw';
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

            const map = new mapboxgl.Map({
                container: 'map',
                // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
                style: 'mapbox://styles/mapbox/streets-v12',
                center: feature.center,
                zoom: 10
            });

            // Create a marker and add it to the map.
            new mapboxgl.Marker().setLngLat(feature.center).addTo(map);
        });
       }
    })
</script>
<style>

</style>
    