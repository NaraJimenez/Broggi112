@extends('layout.plantilla')

@section('title')
    Cartas de llamadas
@endsection

@section('css-pagina')
    <link href="{{ asset('css/expedientes.css') }}" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
@endsection

@section('content')
    <div class="admin-background">
        <div class="header-file">
            <p class="title">Cartas de llamadas</p>
            <input type="text" id="searchInput" onkeyup="buscar()" placeholder="Buscar por código...">
        </div>

        <div class="admin-content">
            <table style="border-spacing: 10px 0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Codi Trucada</th>
                        <th>Data Hora Trucada</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartasllamadas as $carta)
                        <tr>
                            <td>{{ $carta->id }}</td>
                            <td><span>{{ $carta->codi_trucada }}</span></td>
                            <td>{{ $carta->data_hora_trucada }}</td>
                            <td><i class="bi bi-eye-fill"></i></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function buscar() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.querySelector("table");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Filtrar por la segunda columna (Codi Trucada)
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endsection
