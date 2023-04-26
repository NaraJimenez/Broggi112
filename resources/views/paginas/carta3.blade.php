@extends('plantilla.principal')

@section('titulo', 'Broggi - Carta Trucada')
  
@section('content')

@section('css.carta3')

          <div class="text-center mt-5 mb-5" id="titulo">
            <h2>Carta de Trucada</h2>
          </div>

          <div class="card mt-3 mx-auto" id="CartaIncidencia">
            <div class="card-body">>
                    <div>
                      <h1>Mi mapa de Mapbox</h1>
                      <Mapa />
                    </div>
            </div> <!--FINAL CARD BODY-->
          </div> <!--FINAL CARD -->

          <div id="helper">
            <a href="#">
                <img src="{{ asset("img/HelpBox.png") }}" alt="HTML tutorial">
                </a>
          </div>

          <script>
            import Mapa from './Mapa.vue';
            
            export default {
              name: 'App',
              components: {
                Mapa
              }
            };
            </script> 