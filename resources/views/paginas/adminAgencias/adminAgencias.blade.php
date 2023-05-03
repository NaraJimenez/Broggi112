@extends('layout.plantilla');

@section('title')
    Agencias
@endsection

@section('css-pagina')
    <link href="{{ asset('css/adminA.css') }}" rel="stylesheet" type="text/css"> <!-- Estilos CSS para la página -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="admin-background">
        <div class="header-file">
            <div class="admin-content">
                <p class="title">Administración de Agencias</p>
                <a href="{{ route('agencias.crear') }}" id="edit">Administrar Agencias</a>
            </div>
        </div>
        <div>
            <table style="border-spacing: 10px 0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Calle</th>
                        <th>Código Postal</th>
                        <th>Correo</th>
                        <th>Municipio ID</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agencies as $agencia)
                        <tr>
                            <td>{{ $agencia->id }}</td>
                            <td>{{ $agencia->nom }}</td>
                            <td>{{ $agencia->carrer }}</td>
                            <td>{{ $agencia->codi_postal }}</td>
                            <td>{{ $agencia->correu }}</td>
                            <td>{{ $agencia->municipis_id }}</td>
                            <td>
                                <div>
                                    <form method="POST"
                                        action="{{ route('agencias.eliminar', ['id' => $agencia->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $agencia->id }}">
                                        <button id="delete" type="submit">
                                            <i class="bi bi-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination pagination-style">
            {{ $agencies->links('pagination::default') }}
        </div>
    </div>

    {{-- Esta sección muestra los botones de navegación de la página --}}
<div class="button-container">
    <div class="buttons">
        <a class="button" href="{{ url('/adminuser') }}">Usuario</a>
        {{-- El botón de Expedientes aparece seleccionado por defecto --}}
        <a class="button-selected" href="{{ url('/adminagencias') }}">Agencias</a>
        <a class="button" href="{{ url('/expedientes') }}">Expedientes</a>
    </div>
</div>
@endsection
