<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    {{-- <link rel="shortcut icon" href="{{ asset('img/favicon-politecnics.png') }}" type"image/x-icon"> --}}
    @vite(['resources/css/app.scss', 'resources/js/app.js', '../../js/menu.js'])
</head>
<body> 
    <div id="Menu" style="width:50px; height:50px; background-color:#cccccc;">
    
    </div>
 
    @yield('content')
</body>
</html>

