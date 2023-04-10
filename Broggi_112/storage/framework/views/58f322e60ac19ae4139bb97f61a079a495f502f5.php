<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Usuarios</title>
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        table {
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            border: none;
        }

        tbody tr {
  background-color: #fff;
  color: #025D73;
  margin-bottom: 10px; /* Agregar margen inferior */
  border-radius: 10px;
}


        th {
            background-color: #24BDFF !important;
            color: #fff !important;
        }

        tbody tr:nth-child(odd) {
            background-color: #fff;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="background-color: #11ADC4; color: #fff;">
            <h2 class="text-center mb-4" style="color: #025D73;">Administración de Usuarios</h2>
            <table class="table table-striped table-bordered">
                <thead class="bg-light text-dark fw-bold">
                    <tr>
                        <th>Nombre de usuario</th>
                        <th>Contraseña</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($usuario->username); ?></td>
                            <td><?php echo e($usuario->contrasenya); ?></td>
                            <td><?php echo e($usuario->nom); ?></td>
                            <td><?php echo e($usuario->cognoms); ?></td>
                            <td><?php echo e($usuario->tipus_usuaris_id); ?></td>
                            <td>
                                <a href="<?php echo e(route('usuarios.editar', ['id' => $usuario->id])); ?>" class="btn btn-primary">Editar</a>
                                <form action="<?php echo e(route('usuarios.eliminar', ['id' => $usuario->id])); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                                 </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\Users\cep.DESKTOP-DE5UDA5\Desktop\xampp\htdocs\Broggi_112\resources\views/paginas/adminUsers.blade.php ENDPATH**/ ?>