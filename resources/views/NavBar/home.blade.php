@extends('layout.plantilla')
@section('title')
  Home
@endsection
@section('css-pagina')
<link  href="{{asset('css/home.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="message-container">
  Bienvenido al menú, pulsa "Aceptar llamada" para acceder al formulario.
</div>
	<div class="mobile"> 
    <div class="screen">
        <span>{{ $randomPhone }}</span>
        <div id="emergency-alert" class="alert">
            <p class="alert-message">¡¡¡Emergencia!!! Acepta la llamada</p>
        </div>
        <div class="bottom-bar">
          <div class="button-rounded red">
            <i class="fa-solid fa-phone fa-beat-fade"></i>
          </div>
      </div>
    </div>
  </div>
@endsection
