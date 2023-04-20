@extends('plantilla.principal')

@section('titulo', 'Broggi - Carta Trucada')

@section('content')

    <div class="text-center mt-5 mb-5" id="titulo">
        <h2>Carta Registrada</h2>
    </div>

    <div class="card mt-2 " id="CartaIncidenciaExpe">
        <div class="card-body">
            <!--Componente de Expediente-->
            <div id="cartaExpediente" ></div>
        </div>
    </div>


@endsection