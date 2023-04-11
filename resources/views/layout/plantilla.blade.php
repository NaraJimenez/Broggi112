<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <script src="https://kit.fontawesome.com/ed77576707.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    @yield('css-pagina')
</head>
<body> 
    <div id="Menu" style="display:flex; position: absolute; top: 5vh; left: 5vh; width:50px; height:50px; background-color:red;">
    
    </div>
    <div class="profile">
        @if (isset($user) && isset($userRol))
            <div class="imgProfile" >
                <span>{{ $user }}</span>
                <span>{{ $userRol }}</span>
            </div>
        @else
            <div class="messageProfile">
                <span>No se ha registrado el usuario</span>
            </div>
        @endif
        <div>
            <img src="./img/ImagenUser.png" alt="profile" onclick="openMenuP()">
        </div>
        <div v-if="menuOpened">
            <Menu @close-menu="closeMenu" @navbar-opened="openNavbar" @close-navbar="closeNavbar" />
        </div>
    </div>
    @yield('content')
</body>
</html>

