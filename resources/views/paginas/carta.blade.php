@extends('plantilla.principal')

@section('titulo', 'Broggi - Carta Trucada')

@section('contenido')
<div>
    <div class="mt-5" style="text-align: center; margin-left: 800px;">
        <h1>Carta de Trucada</h1>
    </div>


    <div class="card mt-3" id="CartaIncidencia">
        <div class="card-body">
            <!--Componente Menu-->
            <div id="menuComponent" :phone="@json($randomPhone)"></div>       
    </div>

    <div id="helper">
        <a href="{{ asset('HelpBox/HelpBox.blade.php') }}">
          <img src="{{ asset("img/HelpBox.png") }}" alt="helpBox" >
        </a>
    </div>
</div>


@endsection
