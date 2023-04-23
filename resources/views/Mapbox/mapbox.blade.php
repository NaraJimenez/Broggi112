
@extends('layout.plantilla')
@section('title')
Mapbox
@endsection  
@section('css-pagina')
<link  href="{{asset('css/mapbox.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
{{-- $accessToken = config('services.mapbox.token'); --}}
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add a marker using a place name</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.14.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.14.0/mapbox-gl.js"></script>
<style>
body { margin: 10; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
<div id="map"></div>

<script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
 
<script>
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
</script>

</body>
</html>
@endsection








{{-- 



  <button id="buttonN" type="button"  class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#vertically-centered">
    Vertically centered
  </button>

  <x-modal id="vertically-centered" title="Vertically centered" :centered="true">
    <x-slot name="body">
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    </x-slot>
    <x-slot name="footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </x-slot>
  </x-modal> --}}



