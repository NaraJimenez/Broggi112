@extends('plantilla.principal')

@section('titulo', 'Broggi - Carta Trucada')

@section('content')

    <div class="text-center mt-5 mb-5" id="titulo">
        <h2>Carta de Trucada</h2>
    </div>

    <div class="card mt-2 mx-auto" id="CartaIncidencia">
        <div class="card-body">
            <!--Componente Menu-->
            <div id="menuCarta"></div>
            <div>
            <div id="primerRectangulo2" class="mt-4 ms-5">
                <div id="carta2Catalunya"></div>
            </div>

            <!--Buscador de Expediente
            <div id="filtroExpedientes"></div>-->

            <div id="segundoRectangulo2" class="mt-4">
                <!--<div id="carta2Botones"></div>-->
                <div id="carta2Localizacion"></div>
            </div>

            </div>
            
        </div>
        <div>
            <a href="{{url('/carta1Vue')}}"> 
            <button type="button" class="btn btn-primary float-right">ATRAS</button>
        </a>
        <a href="{{url('')}}"> 
            <button type="button" class="btn btn-primary float-right">NEXT</button>
    </a>
    <a href="{{url('')}}"> 
        <button type="button" class="btn btn-primary float-right">SUBMIT</button>
</a>
        </div>
        
    </div>


@endsection
