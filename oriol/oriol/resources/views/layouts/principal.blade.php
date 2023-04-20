<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="./styles/style.css" rel="stylesheet" type="text/css">
</head>

<body class="login">
    <div class="content">
        <div class="perfil"></div>
        <div class="content">
            <form method="POST">
            <input type="text" id="username" name="username" placeholder="Usuario">
            <input type="password" id="password" name="password" placeholder="Contraseña">
            {{-- @if (Auth::check() && Auth::user()->rol->nombre == 'Administrador')

            @endif
            @if (Auth::check())
                {{ Auth::user()->nombre }} {{ Auth::user()->apellidos }}
            @endif --}}
            <input type="submit" href="{{ url('/login') }}" value="Ingresar">
            </form>
        </div>
    </div>
    </div>
    <div>
        {{-- @yield('contenido') --}}
    </div>
</body>

</html>
