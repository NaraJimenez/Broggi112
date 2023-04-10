<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo e(asset('./styles/style.css')); ?>" rel="stylesheet" type="text/css">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>


<body class="login">
<div class="content">
    <div class="perfil"></div>
    <div class="form-container">
        <form action="<?php echo e(action([App\Http\Controllers\UsuarioController::class, 'login'])); ?>" method="POST" >
            
            
<?php echo csrf_field(); ?>
            <input type="text" id="username" class="input" name="username" placeholder="Usuario">
            <input type="password" class="input" id="password" name="password" placeholder="Contraseña">
            <input class="enviar" type="submit" value="Ingresar">
        </form>
    </div>
</div>


</body>

</html>
<?php /**PATH C:\Users\cep.DESKTOP-56UD49B\Desktop\xampp\htdocs\oriol\resources\views/auth/login.blade.php ENDPATH**/ ?>