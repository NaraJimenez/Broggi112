<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <!-- Añadimos bootstrap con las siguientes lineas de código -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    {{-- Con esta etiqueta podremos incluir los iconos bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/cssPropio.css') }}"> {{-- Aquí hemos incluído el css propio --}}

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> {{-- De esta manera podemos poner el fatly de bootstrap --}}
    <link rel="stylesheet" href="./style/index.css" /> <!-- Esta etiqueta sirve para linkar el CSS con nuestro HTML. -->
</head>

<body style="padding-top: 185px;"> {{-- Hay que ponerle el padding top para poder ver el contenido correctamente --}}

    <nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo.jfif') }}"
                    alt="Imagen del logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dades mestres
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/cursos') }}">Cursos</a></li>
                            {{-- Así es cómo podemos reedirigirnos a una ruta o a otra --}}
                        </ul>
                    </li>
            </div>
        </div>
    </nav>

    {{-- Hacemos un div (Este es el div dónde vamos a poner nuestra tabla para mostrar todos los datos correctamente) --}}
    <div class="container-fluid">
        @yield('contenido')
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle. min. js"
                                                                                          crossorigin="anonymous">
</script>

</html>
