@extends('layout.plantilla')

@section('title')
Mapbox
@endsection  

@section('css-pagina')
<link  href="{{asset('css/mapbox.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')
  <Mapa />
@endsection

@section('scripts-pagina')
<script src="{{ asset('js/app.js') }}"></script>
@endsection 

 










