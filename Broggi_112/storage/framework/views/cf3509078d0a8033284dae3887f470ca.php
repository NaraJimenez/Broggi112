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
            
            <input type="submit" href="<?php echo e(url('/login')); ?>" value="Ingresar">
            </form>
        </div>
    </div>
    </div>
    <div>
        
    </div>
</body>

</html>
<?php /**PATH C:\Users\cep.DESKTOP-56UD49B\Desktop\xampp\htdocs\oriol\resources\views/layouts/principal.blade.php ENDPATH**/ ?>