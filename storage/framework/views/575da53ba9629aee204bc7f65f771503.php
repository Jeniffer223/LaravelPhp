<!DOCTYPE pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
<h1>Lista de Usuários</h1>
    <a href="<?php echo e(route('users.create')); ?>">Criar novo usuário</a>
    <ul>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($user->name); ?> - <?php echo e($user->email); ?></li>
        <a href="<?php echo e(route('users.edit', $user->id)); ?>">Editar</a>
        <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST" style="display:inline;"><br>
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">Deletar</button>
        </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html><?php /**PATH C:\Users\Gilcelio\Laraval02\ExercicioPhp\resources\views/users/index.blade.php ENDPATH**/ ?>