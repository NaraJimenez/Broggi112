@extends('plantilla.principal')

@section('titulo', 'Broggi - Carta Trucada')

@section('content')
    <div class="text-center" id="titulo">
        <h2>Carta de Trucada</h2>
    </div>

    <div class="card" id="CartaIncidencia">
        <div class="card-body">
            <!--Componente Menu-->
            <div id="menuComponent" ></div>       
    </div>
</div>

<?php
    //$randomPhone = $_GET['phone'];
    //:random-phone="{{ $randomPhone }}"
?>
@endsection
