@extends('plantilla.principal')

@section('titulo', 'Broggi - Carta Trucada')

@section('content')
    <div class="text-center mt-5 mb-5" id="titulo">
        <h2>Carta de Trucada</h2>
    </div>

    <div class="card mt-2 mx-auto" id="CartaIncidencia">
        <div class="card-body">
            <!--Componente Menu
            <div id="menuCarta"></div>-->

            <!--Componente parte Izquierda de Carta1-->
            <div id="carta1Box"></div>

            <!--Componente parte derecha-->
            <div id="segundoRectangulo" class="mt-4">
                <div id="carta1Incidentes"></div>

                <!--Buscador de Expediente-->
                <div id="filtroExpedientes"></div>

                <!--HelpBox-->
                <div id="helpBoxboton"></div>

                <div id="helper">
                  <a href="{{ asset('HelpBox/HelpBox.blade.php') }}">
                    <img src="{{ asset("img/HelpBox.png") }}" alt="helpBox" >
                  </a>
                </div>

            </div>
        </div>
            <a href="{{url('/carta2Vue')}}">
                    <button type="button" class="btn btn-primary float-right">NEXT</button>
            </a>
    </div>


@endsection
