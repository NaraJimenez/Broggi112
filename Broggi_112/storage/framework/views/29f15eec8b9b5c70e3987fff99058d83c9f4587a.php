<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Usuarios</title>
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
table {
    border: none;
    border-radius: 10px;
    overflow: hidden;
    overflow-y: scroll;
    max-height: 500px; /* ajusta esta propiedad según tus necesidades */
}


        th,
        td {
            border: none;
        }

        tbody tr {
            background-color: #fff;
            color: #025D73;
            margin-bottom: 10px;
            /* Agregar margen inferior */
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
    <div class="page-container container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="background-color: #11ADC4; color: #fff; width: 100%;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="text-start" style="color: #025D73;">Administración de Usuarios</h1>
                <button class="btn btn-primary agregar-btn" type="button">
                    <i class="bi bi-plus"></i> Agregar usuario
                </button>
                        </div>
            <table class="table table-striped table-bordered">
                <thead class="bg-light text-dark fw-bold">
                    <tr>
                        <th>ID</th>
                        <th>Nombre de usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($usuario->id); ?></td>
                            <td><?php echo e($usuario->username); ?></td>
                            <td><?php echo e($usuario->nom); ?></td>
                            <td><?php echo e($usuario->cognoms); ?></td>
                            <td><?php echo e($usuario->tipus_usuaris_id); ?></td>
                            <td>
                                <button class="btn btn-primary d-inline-block editar-btn" type="button" data-id="<?php echo e($usuario->id); ?>" data-username="<?php echo e($usuario->username); ?>" data-nombre="<?php echo e($usuario->nom); ?>" data-apellido="<?php echo e($usuario->cognoms); ?>" data-tipo="<?php echo e($usuario->tipus_usuaris_id); ?>" data-toggle="modal" data-target="#modalEditar">
                                    <i class="bi bi-pencil"></i> Editar
                                </button>
                                <form action="<?php echo e(route('usuarios.eliminar', ['id' => $usuario->id])); ?>" method="POST"
                                    class="d-inline-block">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <dialog close class='popup'>
                            <form action="<?php echo e(route('usuarios.actualizar', ['id' => $usuario->id])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Nombre de usuario</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo e($usuario->username); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="nom" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo e($usuario->nom); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="cognoms" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" id="cognoms" name="cognoms" value="<?php echo e($usuario->cognoms); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="tipus_usuaris_id" class="form-label">Tipo de usuario</label>
                                    <select class="form-select" id="tipus_usuaris_id" name="tipus_usuaris_id">
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($rol->id); ?>" <?php echo e($usuario->tipus_usuaris_id == $rol->id ? 'selected' : ''); ?>>
                                                <?php echo e($rol->nom); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                <button type="button" class="btn btn-secondary cancelar-btn">Cancelar</button>
                            </form>
                        </dialog>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    <dialog close class='popup-add'>
        <form action="<?php echo e(route('usuarios.agregar')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="username" class="form-label">Nombre de usuario</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="mb-3">
                <label for="cognoms" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="cognoms" name="cognoms">
            </div>
            <div class="mb-3">
                <label for="tipus_usuaris_id" class="form-label">Tipo de usuario</label>
                <select class="form-select" id="tipus_usuaris_id" name="tipus_usuaris_id">
                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($rol->id); ?>">
                            <?php echo e($rol->nom); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
            <button type="button" class="btn btn-secondary cancelar-btn">Cancelar</button>
        </form>
    </dialog>

</body>
<script>
    // scripts modal1
const botonesEditar = document.querySelectorAll('.editar-btn');
const botonesCancelar = document.querySelectorAll('.cancelar-btn');
const modals = document.querySelectorAll('.popup');
for (let i = 0; i < botonesEditar.length; i++) {
    botonesEditar[i].addEventListener('click', () => {
        modals[i].showModal();
    });
    botonesCancelar[i].addEventListener('click', () => {
        modals[i].close();
    });
}
 // scripts modal2
const agregarBtn = document.querySelector('.agregar-btn');
const modalAgregar = document.querySelector('.popup-add');
const cancelarBtn = modalAgregar.querySelector('.cancelar-btn');

agregarBtn.addEventListener('click', () => {
    modalAgregar.showModal();
});

cancelarBtn.addEventListener('click', () => {
    modalAgregar.close();
});

</script>
</html>
<?php /**PATH C:\xampp\htdocs\Broggi_112\resources\views/paginas/adminUsers.blade.php ENDPATH**/ ?>