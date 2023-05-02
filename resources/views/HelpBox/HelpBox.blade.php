
@extends('layout.plantilla')
@section('title')
Pop-up
@endsection  
@section('css-pagina')
<link  href="{{asset('css/stylebox.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>HelpBox</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.14.0/mapbox-gl.js"></script>
</head>

<body>


    <img id="help" src="{{ asset('img/ConrecorteFinal.png') }}">     
    <img id="myButton" src="{{ asset('img/carita.png') }}" onclick="ocultarImagen('help')">

    <div id="popup">
        <div id="bocado">
            <div id="columns">
                <div class="column">
                    <h3>Información personal</h3>
                    <p>Que edad tienes?</p>
                    <p>Como te llamas?</p>
                    <p>Alguna patologia de la victima?</p>
                    <p>Cual es tu relación con la victima?</p>
                    <p>Cual es tu DNI?</p>
                    <p>Me puedes verificar la informacion para corroborar?</p>
                    <p>Cuantas victimas hay?</p>

                </div>
                <div class="column">
                    <h3>Incidèncias</h3>
                    <p>Cual es tu emegencia?</p>
                    <p>Esta respirando?</p>
                    <p>Que ha pasado exactamente?</p>
                    <p>Estas Solo?</p>
                </div>
                <div class="column">
                    <h3>Localización</h3>
                    <p>Cual es la direccion de la emergencia?</p>
                    <p>Me sabrias decir la calle?</p>
                    <p>Indicame que ves a tu alrededor</p>
                    <p>Donde estas?</p>
                    <p>Estas en Cataluña?</p>
                    <p>En que pueblo?</p>
                    <p>En que provincia?</p>
                </div>
            </div>
        </div>
        <div id="language-container">
            <img src="{{ asset('img/catellano.png') }}" alt="Español" id="primera" onclick="changeLanguage('es')">
            <img src="{{ asset('img/catalan.png') }}" alt="Catalan" id="segunda" onclick="changeLanguage('ca')">
            <img src="{{ asset('img/ingles.png') }}" alt="Inglés" id="tercera" onclick="changeLanguage('en')">
        </div>
        <button id="closeButton">X</button>
        
    </div>

</body>

</html>
@endsection